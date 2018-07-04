<?php

use Illuminate\Database\Seeder;

class Tv_showsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tv_shows')->insert([
        [
          "title" => "Game of Thrones",
          "image" => "https://www.hbo.com/content/dam/hbodata/series/game-of-thrones/episodes/1/game-of-thrones-1-3000x1688.jpg/_jcr_content/renditions/cq5dam.web.1200.675.jpeg",
          "description" => "Familjer krigar mot varandra. Ett maktspel utspelar sig och många dör.",
          "premiere_year" => 2011
        ],
        [
          "title" => "New Girl",
          "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/5/5e/New_Girl_S4_Poster.jpg/220px-New_Girl_S4_Poster.jpg",
          "description" => "En tjej flyttar ihop med manliga rumskompisar, vilket leder till diverse roliga händelser.",
          "premiere_year" => 2011
        ],
        [
          "title" => "Vänner",
          "image" => "http://cdn.24.co.za/files/Cms/General/d/4320/28d1220097b54f79907f2d810b51ad0b.jpg",
          "description" => "En grupp vänner umgås på ett café.",
          "premiere_year" => 1994
        ],
        [
          "title" => "The Flash",
          "image" => "https://static.next-episode.net/tv-shows-images/huge/the-flash.jpg",
          "description" => "Kille får superkrafter och blir jättesnabb.",
          "premiere_year" => 2014
        ]
      ]);
    }
}
