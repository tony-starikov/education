<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'lesson_id' => 1,
                'question' => 'QUESTION 1',
            ],

            [
                'lesson_id' => 1,
                'question' => 'QUESTION 2',
            ],

            [
                'lesson_id' => 1,
                'question' => 'QUESTION 3',
            ],

            [
                'lesson_id' => 2,
                'question' => 'QUESTION 1',
            ],

            [
                'lesson_id' => 2,
                'question' => 'QUESTION 2',
            ],

            [
                'lesson_id' => 2,
                'question' => 'QUESTION 3',
            ],

            [
                'lesson_id' => 3,
                'question' => 'QUESTION 1',
            ],

            [
                'lesson_id' => 3,
                'question' => 'QUESTION 2',
            ],

            [
                'lesson_id' => 3,
                'question' => 'QUESTION 3',
            ],
        ]);
    }
}
