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
                "image" => "https://assets.foxdcg.com/dpp-uploaded/images/new-girl/new-girl_07/seriesDetail.jpg?fit=inside%7C1920:1080",
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
                "image" => "http://cdn-static.denofgeek.com/sites/denofgeek/files/styles/main_wide/public/2018/06/the-flash-season-5.jpg?itok=B-iOwm2r",
                "description" => "Kille får superkrafter och blir jättesnabb.",
                "premiere_year" => 2014
            ]
        ]);
    }
}
