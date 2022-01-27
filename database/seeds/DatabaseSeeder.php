<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PagesTableSeeder::class,
            UsersTableSeeder::class,
            CoursesTableSeeder::class,
            LessonsTableSeeder::class,
            QuestionsTableSeeder::class,
            AnswersTableSeeder::class,
        ]);
    }
}
