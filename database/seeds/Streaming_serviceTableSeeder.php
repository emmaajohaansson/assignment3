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
          "price" => 99,
          "image" => "https://pmcvariety.files.wordpress.com/2014/10/hbo-logo.jpg?w=1000"
        ],
        [
          "name" => "Netflix",
          "price" => 99,
          "image" => "https://images.complex.com/complex/images/c_limit,w_680/fl_lossy,pg_1,q_auto/cnsklkjuhdgdz93atdin/netflix-logo"
        ],
        [
          "name" => "Viaplay",
          "price" => 99,
          "image" => "https://res.cloudinary.com/teamtailor/image/upload/c_limit,f_auto,h_900,w_1600/v1508146213/jnglrudnrhgajgcg8xst.jpg"
        ]
      ]);
    }
}
