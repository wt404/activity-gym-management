<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
use App\Models\Membership;
use App\Models\Trainer;
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
        Trainer::create([
            'name' => 'Trainer 1',
            'email' => 'trainer1@gmail.com',
            'specialization' => 'Lifestyle Wellness Coach',
            'phone' => '123'
        ]);

        Trainer::create([
            'name' => 'Trainer 2',
            'email' => 'trainer2@gmail.com',
            'specialization' => 'Senior Fitness Specialist',
            'phone' => '123'
        ]);

        Trainer::create([
            'name' => 'Trainer 3',
            'email' => 'trainer3@gmail.com',
            'specialization' => 'Youth Fitness Specialists',
            'phone' => '123'
        ]);

        Membership::create([
            'membership_type' => 'College',
            'membership_price' => 200
        ]);

        Membership::create([
            'membership_type' => 'Senior',
            'membership_price' => 150
        ]);
    }
}
