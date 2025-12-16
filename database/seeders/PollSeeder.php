<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poll;
use App\Models\Option;

class PollSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama jika ada (dengan foreign key check off)
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Vote::truncate();
        Option::truncate();
        Poll::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        // Buat polling pemilihan ketua OSIS
        $poll = Poll::create([
            'question' => 'Pemilihan Ketua OSIS 2024'
        ]);

        // Tambah pasangan calon ketua OSIS
        $options = [
            'Pasangan Nomor 1: Ahmad & Siti',
            'Pasangan Nomor 2: Budi & Dewi',
            'Pasangan Nomor 3: Candra & Fitri'
        ];
        
        foreach ($options as $opt) {
            Option::create([
                'poll_id' => $poll->id,
                'option_text' => $opt,
                'votes' => 0
            ]);
        }
    }
}
