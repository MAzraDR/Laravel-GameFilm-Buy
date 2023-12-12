<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'title' => 'The Witcher 3: Wild Hunt',
                'genre' => 'Action RPG',
                'year' => '2015',
                'rating' => '9.8',
                'sinopsis' => 'The Witcher 3: Wild Hunt is an action role-playing game with a third-person perspective. Set in an open world, the game follows the story of Geralt of Rivia, a monster hunter known as a Witcher.',
                'image_url' => 'https://i.ebayimg.com/images/g/KuYAAOSwFG1ea2YT/s-l500.jpg',
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'genre' => 'Action-Adventure',
                'year' => '2018',
                'rating' => '9.7',
                'sinopsis' => 'Red Dead Redemption 2 is an action-adventure game set in an open world environment. The game follows Arthur Morgan, a member of the Van der Linde gang, as he deals with the decline of the Wild West.',
                'image_url' => 'https://i.ebayimg.com/images/g/F1gAAOSwlnxd3fZQ/s-l1600.jpg',
            ],
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'genre' => 'Action-Adventure',
                'year' => '2017',
                'rating' => '9.5',
                'sinopsis' => 'The Legend of Zelda: Breath of the Wild is an action-adventure game set in an open world. Players control Link, who awakens from a hundred-year slumber to defeat Calamity Ganon and save the kingdom of Hyrule.',
                'image_url' => 'https://i.ebayimg.com/images/g/bkgAAOSwh5ZcnEfn/s-l500.jpg',
            ],
            [
                'title' => 'Cyberpunk 2077',
                'genre' => 'Action RPG',
                'year' => '2020',
                'rating' => '7.2',
                'sinopsis' => 'Cyberpunk 2077 is an action role-playing video game played in a first-person perspective. Set in the dystopian Night City, players control V, a mercenary in pursuit of immortality, as they explore the city and complete missions.',
                'image_url' => 'https://i.ebayimg.com/images/g/lFYAAOSwF4Fi45BS/s-l500.jpg',
            ],
            [
                'title' => 'Assassin\'s Creed Valhalla',
                'genre' => 'Action RPG',
                'year' => '2020',
                'rating' => '8.6',
                'sinopsis' => 'Assassin\'s Creed Valhalla is an action role-playing game set in the Viking Age. Players control Eivor, a Viking raider, as they lead their clan to settle in England and wage war against the Anglo-Saxons.',
                'image_url' => 'https://i.ebayimg.com/images/g/Y1gAAOSwkkhjBQvP/s-l500.jpg',
            ],
            [
                'title' => 'DOOM Eternal',
                'genre' => 'First-Person Shooter',
                'year' => '2020',
                'rating' => '9.0',
                'sinopsis' => 'DOOM Eternal is a first-person shooter and the fifth main entry in the DOOM series. Players control the Doom Slayer, who battles demonic forces from Hell across multiple dimensions to save Earth.',
                'image_url' => 'https://i.ebayimg.com/images/g/SQ0AAOSwOA9eHunu/s-l1600.jpg',
            ],
            [
                'title' => 'Hades',
                'genre' => 'Roguelike',
                'year' => '2020',
                'rating' => '9.5',
                'sinopsis' => 'Hades is a roguelike dungeon crawler where players control Zagreus, the son of Hades, as he attempts to escape the Underworld. Each escape attempt offers unique challenges and interactions with Greek gods.',
                'image_url' => 'https://media.wired.com/photos/5f6cf5ec6f32a729dc0b3a89/master/w_1600,c_limit/Culture_inline_Hades_PackArt.jpg',
            ],
            [
                'title' => 'Ghost of Tsushima',
                'genre' => 'Action-Adventure',
                'year' => '2020',
                'rating' => '9.3',
                'sinopsis' => 'Ghost of Tsushima is an action-adventure game set in feudal Japan. Players control Jin Sakai, a samurai warrior, as he fights to protect the island of Tsushima during the Mongol invasion.',
                'image_url' => 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/61S6g7yJjFL.__AC_SX300_SY300_QL70_FMwebp_.jpg',
            ],          
            [
                'title' => 'Marvel\'s Spider-Man: Miles Morales',
                'genre' => 'Action-Adventure',
                'year' => '2020',
                'rating' => '9.0',
                'sinopsis' => 'Marvel\'s Spider-Man: Miles Morales is an action-adventure game set in the Marvel Universe. Players control Miles Morales, a teenage superhero with spider-like abilities, as he takes on new challenges in New York City.',
                'image_url' => 'https://i.ebayimg.com/images/g/kKwAAOSwdiNgZs4g/s-l1600.jpg',
            ],
        ]);
    }
}
