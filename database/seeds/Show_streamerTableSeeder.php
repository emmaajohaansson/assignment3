<?php

use Illuminate\Database\Seeder;

class Show_streamerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('show_streamer')->insert([
  [
      "show_id" => 1,
      "streamer_id" => 1
  ],
  [
      "show_id" => 2,
      "streamer_id" => 2
  ],
  [
      "show_id" => 3,
      "streamer_id" => 2
  ],
  [
      "show_id" => 4,
      "streamer_id" => 2
  ],

]);
    }
}
