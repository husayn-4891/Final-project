<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        Admin::create([
            'name' => 'Admin User',
            'email' => 'omar_4926@limu.edu.ly',
            'phoneNumber' => '1234567890',
            'password' => Hash::make('password'),
        ]);

         Grade::factory()->create(
            [
                'name'=>'1st yera'
            ]);
             Grade::factory()->create(
            [
                'name'=>'2nd yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'3rd yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'4th yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'5th yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'6th yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'7th yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'8th yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'9th yera'
            ]);

            Grade::factory()->create(
            [
                'name'=>'10th yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'11th yera'
            ]);

            Grade::factory()->create(
            [
                'name'=>'12th yera'
            ]);

    }
}
