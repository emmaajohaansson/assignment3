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
      $this->call('Tv_showsTableSeeder');
      $this->call('ReviewsTableSeeder');
      $this->call('Streaming_servicesTableSeeder');
      $this->call('Streaming_service_tv_showTableSeeder');
    }
}
