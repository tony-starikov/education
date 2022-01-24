<?php

use Illuminate\Database\Seeder;

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
                'answer_true' => 'TRUE ANSWER',
                'answer_false_1' => 'FALSE ANSWER 1',
                'answer_false_2' => 'FALSE ANSWER 2',
            ],

            [
                'lesson_id' => 2,
                'question' => 'QUESTION 2',
                'answer_true' => 'TRUE ANSWER',
                'answer_false_1' => 'FALSE ANSWER 1',
                'answer_false_2' => 'FALSE ANSWER 2',
            ],

            [
                'lesson_id' => 3,
                'question' => 'QUESTION 3',
                'answer_true' => 'TRUE ANSWER',
                'answer_false_1' => 'FALSE ANSWER 1',
                'answer_false_2' => 'FALSE ANSWER 2',
            ],
        ]);
    }
}
