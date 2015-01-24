<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		Course::create([
            'code' => 'course',
            'title' => 'Small Engine (Yanmar, Kubota)',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Cellphone Repair',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Dress Making / ISMO',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Housekeeping',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Catering',
            'description' => '',
            'duration' => '5',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Message Therapy',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Motorcycle Mechanics',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        Course::create([
            'code' => 'course',
            'title' => 'Shielded Metal Arc Wedding',
            'description' => '',
            'duration' => '10',
            'duration_metric' => 'day',
            'type' => 'skill',
        ]);

        
        

	}

}