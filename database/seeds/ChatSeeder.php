<?php

use Illuminate\Database\Seeder;
use App\Models\Chat;
class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chat::create([
            'user_id' => 1,
            'course_id' => 21,
            'statement' => '今回の課題は必須提出なのですか？'
        ]);
        
        Chat::create([
            'user_id' => 2,
            'course_id' => 21,
            'statement' => 'そうです！'
        ]);

        Chat::create([
            'user_id' => 1,
            'course_id' => 21,
            'statement' => 'ありがとうございます！'
        ]);
    }
}
