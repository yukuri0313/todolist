<?php

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campuses = ['日吉', '三田', 'SFC'];
        $day = [ 1, 2, 3, 4, 5, 6];
        $period = [ 1, 2, 3, 4, 5];
        foreach(range(1,200) as $n) {
            $a = [
            'lecture_name' => "講義$n",
            'professor_name' => "教授$n",
            'year' => 2021,
            'unit' => 2,
            'semester' => '春',
            'campus' => $campuses[$n % 3],
            'day' => $day[$n % 6],
            'period' => $period[$n % 5]
            ]
            ;$dataset[] = $a;
        }
        foreach($dataset as $data) {
            Course::create($data);
        }
    }
}
