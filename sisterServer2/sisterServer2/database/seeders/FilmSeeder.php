<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'year' => '1994',
                'rating' => '9.3',
                'sinopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'image_url' => 'https://i.ebayimg.com/images/g/XxMAAOSw~zFg4aCs/s-l1600.jpg',
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crime',
                'year' => '1972',
                'rating' => '9.2',
                'sinopsis' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'image_url' => 'https://i.ebayimg.com/images/g/oFkAAOSwoWRjZOHS/s-l500.jpg',
            ],
            [
                'title' => 'The Dark Knight',
                'genre' => 'Action',
                'year' => '2008',
                'rating' => '9.0',
                'sinopsis' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
                'image_url' => 'https://images.pristineauction.com/158/1582578/main_1597378492-The-Dark-Knight-27x40-Movie-Poster-PristineAuction.com.jpg',
            ],
            [
                'title' => 'Pulp Fiction',
                'genre' => 'Crime',
                'year' => '1994',
                'rating' => '8.9',
                'sinopsis' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'image_url' => 'https://i.ebayimg.com/images/g/k-YAAOSwiLZhb~eg/s-l1600.jpg',
            ],
            [
                'title' => 'Schindler\'s List',
                'genre' => 'Biography',
                'year' => '1993',
                'rating' => '8.9',
                'sinopsis' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'image_url' => 'https://www.themoviedb.org/t/p/original/sF1U4EUQS8YHUYjNl3pMGNIQyr0.jpg',
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drama',
                'year' => '1994',
                'rating' => '8.8',
                'sinopsis' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75.',
                'image_url' => 'https://i.ebayimg.com/images/g/e2UAAMXQR-dRFNzP/s-l500.jpg',
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'genre' => 'Action',
                'year' => '2003',
                'rating' => '8.9',
                'sinopsis' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'image_url' => 'https://www.limitedruns.com/media/cache/7e/6b/7e6b6743a7e45d096838abd67b2464e2.jpg',
            ],
            [
                'title' => 'Fight Club',
                'genre' => 'Drama',
                'year' => '1999',
                'rating' => '8.8',
                'sinopsis' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into much more.',
                'image_url' => 'https://i.ebayimg.com/images/g/3UQAAOSwroxfeYhm/s-l1600.jpg',
            ],
            [
                'title' => 'Inception',
                'genre' => 'Action',
                'year' => '2010',
                'rating' => '8.8',
                'sinopsis' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'image_url' => 'https://i.ebayimg.com/images/g/LlUAAOSwm8VUwoRL/s-l500.jpg',
            ],
            [
                'title' => 'The Matrix',
                'genre' => 'Action',
                'year' => '1999',
                'rating' => '8.7',
                'sinopsis' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'image_url' => 'https://i.ebayimg.com/images/g/tD4AAOSw31JfmYLd/s-l500.jpg',
            ],
        ]);
    }
}
