<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('resumes')->insert([
            'name' => 'Jhoerivin Carl Gaton',
            'email' => 'jcgatonrivera@gmail.com',
            'phone' => '0921-723-7225',
            'summary' => 'Detail-oriented web developer with expertise in HTML, PHP, JavaScript, and SQL...',
            'education' => 'Bachelor of Science in Information Technology, Baliwag Politechnic College, 2025',
            'experience_title' => 'Non - Voice Data Annotator',
            'experience_date' => '2021-10-01',
            'experience_details' => 'Completed the CC101 Call Center seminar...',
            'skills' => 'English Literate, Computer Literate, Proficient in HTML, CSS...',
            'projects' => 'Developed a web-based attendance monitoring system...',
        ]);
    }
    
}
