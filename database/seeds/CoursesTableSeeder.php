<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'COURSE 1',
                'description' => 'COURSE 1 DESCRIPTION',
                'video_src' => 'https://www.youtube.com/embed/5kXuXwVeI4M',
            ],
        ]);
    }
}
