<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            [
                'course_id' => 1,
                'title' => 'LESSON 1',
                'order' => 1,
                'description' => 'LESSON 1 DESCRIPTION',
                'video_src' => 'https://www.youtube.com/embed/5kXuXwVeI4M',
            ],

            [
                'course_id' => 1,
                'title' => 'LESSON 2',
                'order' => 2,
                'description' => 'LESSON 2 DESCRIPTION',
                'video_src' => 'https://www.youtube.com/embed/5kXuXwVeI4M',
            ],

            [
                'course_id' => 1,
                'title' => 'LESSON 3',
                'order' => 3,
                'description' => 'LESSON 3 DESCRIPTION',
                'video_src' => 'https://www.youtube.com/embed/5kXuXwVeI4M',
            ],
        ]);
    }
}
