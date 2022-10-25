<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::factory()->count(2)->state(new Sequence(
            ['title' => 'Note 1', 'description' => 'Sample description', 'color' => 'blue'],
            ['title' => 'Note 2', 'description' => 'Sample description 2', 'color' => 'yellow'],
        ))->create();

    }
}
