<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LinkSeeder::class);
        $this->call(ResumeSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
