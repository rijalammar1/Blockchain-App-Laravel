<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProjectCategorySeeder::class,
            CategoryProjectSubmissionStatusSeeder::class,
            SubCategoryProjectSubmissionSeeder::class,
            ProjectSeeder::class,
            ProgressStatusOfProjectSubmissionSeeder::class,
            // CompanySeeder::class,
            // ProductAndProductDetailSeeder::class,
        ]);
    }
}
