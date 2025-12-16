<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Option;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    // Tampilkan halaman utama polling
    public function index()
    {
        $poll = Poll::with('options')->first();
        
        // Cek apakah user sudah voting berdasarkan database
        $hasVoted = Vote::where('user_id', Auth::id())
            ->where('poll_id', $poll->id)
            ->exists();
        
        return view('poll', compact('poll', 'hasVoted'));
    }

    // Simpan suara ke database
    public function vote(Request $request)
    {
        $request->validate([
            'option_id' => 'required|exists:options,id'
        ]);
        
        $option = Option::find($request->option_id);
        $poll = $option->poll;
        
        // Cek apakah user sudah voting (double check)
        $existingVote = Vote::where('user_id', Auth::id())
            ->where('poll_id', $poll->id)
            ->first();
        
        if ($existingVote) {
            return redirect()->route('poll')->with('error', 'Anda sudah memberikan suara sebelumnya!');
        }
        
        DB::transaction(function () use ($option, $poll, $request) {
            // Increment votes
            $option->increment('votes');
            
            // Simpan vote ke database
            Vote::create([
                'user_id' => Auth::id(),
                'poll_id' => $poll->id,
                'option_id' => $request->option_id,
                'voted_at' => now()
            ]);
        });
        
        return redirect()->route('results')->with('success', '✓ Terima kasih! Vote Anda berhasil tersimpan. Lihat hasil voting di bawah ini.');
    }

    // Tampilkan hasil polling dengan grafik
    public function results()
    {
        $poll = Poll::with('options')->first();
        
        // Cek apakah user sudah voting
        $userVote = Vote::where('user_id', Auth::id())
            ->where('poll_id', $poll->id)
            ->first();
        
        if (!$userVote) {
            return redirect()->route('poll')->with('error', 'Anda harus voting terlebih dahulu untuk melihat hasil!');
        }
        
        $totalVotes = $poll->options->sum('votes');
        $winner = $poll->options->sortByDesc('votes')->first();
        $votedOptionId = $userVote->option_id;
        
        // Data untuk Chart.js
        $chartData = [
            'labels' => $poll->options->pluck('option_text')->toArray(),
            'votes' => $poll->options->pluck('votes')->toArray(),
            'percentages' => $poll->options->map(function($option) use ($totalVotes) {
                return $totalVotes > 0 ? round(($option->votes / $totalVotes) * 100, 1) : 0;
            })->toArray()
        ];
        
        return view('results', compact('poll', 'totalVotes', 'winner', 'votedOptionId', 'chartData'));
    }

    // Reset hasil (hanya untuk admin/testing)
    public function reset()
    {
        DB::transaction(function () {
            // Reset votes count
            Option::query()->update(['votes' => 0]);
            
            // Hapus semua data votes
            Vote::truncate();
        });
        
        return redirect()->route('poll')->with('success', 'Polling telah direset!');
    }
}
