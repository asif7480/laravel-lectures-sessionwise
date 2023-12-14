<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(
            [
                'name'=> 'Asif',
                'email'=> 'a.a.khan@gmail.com',
                'age' => 65,
                'contact' => 12346,
            ]
        );
    }
}
