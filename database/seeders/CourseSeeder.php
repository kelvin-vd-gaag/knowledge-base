<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 1 course called html with lorem ipsum content
        \App\Models\Course::factory()->create([
            'title' => 'HTML',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Nullam euismod, nisl eget aliquam ultricies, nunc',
            ]);
        //create 1 course called php with lorem ipsum content
        \App\Models\Course::factory()->create([
            'title' => 'PHP',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Nullam euismod, nisl eget aliquam ultricies, nunc',
            ]);
        //create 1 course called javascript with lorem ipsum content
        \App\Models\Course::factory()->create([
            'title' => 'Javascript',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Nullam euismod, nisl eget aliquam ultricies, nunc',
            ]);

    }
}
