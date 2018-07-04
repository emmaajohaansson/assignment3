<?php

use Illuminate\Database\Seeder;

class Streaming_servicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('streaming_services')->insert([
        [
          "name" => "HBO",
          "price" => 99
        ],
        [
          "name" => "Netflix",
          "price" => 99
        ],
        [
          "name" => "Viaplay",
          "price" => 99
        ]
      ]);
    }
}
