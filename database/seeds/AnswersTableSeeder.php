<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'question_id' => 1,
                'answer' => 'ANSWER 1 FALSE',
                'value' => 0,
            ],

            [
                'question_id' => 1,
                'answer' => 'ANSWER 2 FALSE',
                'value' => 0,
            ],

            [
                'question_id' => 1,
                'answer' => 'ANSWER 3 TRUE',
                'value' => 1,
            ],


            [
                'question_id' => 2,
                'answer' => 'ANSWER 1 FALSE',
                'value' => 0,
            ],

            [
                'question_id' => 2,
                'answer' => 'ANSWER 2 FALSE',
                'value' => 0,
            ],

            [
                'question_id' => 2,
                'answer' => 'ANSWER 3 TRUE',
                'value' => 1,
            ],


            [
                'question_id' => 3,
                'answer' => 'ANSWER 1 FALSE',
                'value' => 0,
            ],

            [
                'question_id' => 3,
                'answer' => 'ANSWER 2 FALSE',
                'value' => 0,
            ],

            [
                'question_id' => 3,
                'answer' => 'ANSWER 3 TRUE',
                'value' => 1,
            ],
        ]);
    }
}
