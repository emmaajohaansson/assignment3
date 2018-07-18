<?php

use Illuminate\Database\Seeder;

class Streaming_service_tv_showTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('streaming_service_tv_show')->insert([
      [
          "tv_show_id" => 1,
          "streaming_service_id" => 1
      ],
      [
          "tv_show_id" => 2,
          "streaming_service_id" => 2
      ],
      [
          "tv_show_id" => 3,
          "streaming_service_id" => 2
      ],
      [
          "tv_show_id" => 4,
          "streaming_service_id" => 2
      ]
    ]);
    }
}
