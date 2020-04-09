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
        $this->call(TaskStatusSeeder::class);
        if (!env('production')) {
            $this->call(UsersTableSeeder::class);
        }
    }
}
