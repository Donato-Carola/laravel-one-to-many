<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'laravel comics',
                'author' => 1,
                'image' => 'https://m.media-amazon.com/images/I/71Uw1Ro-zTL._SY342_.jpg',
                'date' => '2024-02-1',
                'description' => 'Lavoro in laravel per visualizzare i comics, utilizzando la potenza di laravel riguardo il modo in cui si visualizzano i dati',
            ],
            [
                'title' => 'yu gi ho',
                'author' => 1,
                'image' => 'https://mycomics.it/wp-content/uploads/sites/16/2023/06/FUMYUGIOH0006.jpg',
                'date' => '2024-01-24',
                'description' => 'Descrizione del progetto 2.',
            ],
            [
                'title' => 'Progetto 3',
                'author' => 5,
                'image' => 'immagine3.jpg',
                'date' => '2024-02-14',
                'description' => 'Descrizione del progetto 3.',
            ],
            [
                'title' => 'Progetto 2',
                'author' => 4,
                'image' => 'immagine2.jpg',
                'date' => '2024-02-13',
                'description' => 'Descrizione del progetto 2.',
            ],
            [
                'title' => 'Progetto 3',
                'author' => 3,
                'image' => 'immagine3.jpg',
                'date' => '2024-02-14',
                'description' => 'Descrizione del progetto 3.',
            ],
            [
                'title' => 'laravel comics',
                'author' => 1,
                'image' => 'https://m.media-amazon.com/images/I/71Uw1Ro-zTL._SY342_.jpg',
                'date' => '2024-02-1',
                'description' => 'Lavoro in laravel per visualizzare i comics, utilizzando la potenza di laravel riguardo il modo in cui si visualizzano i dati',
            ],
            [
                'title' => 'yu gi ho',
                'author' => 1,
                'image' => 'https://mycomics.it/wp-content/uploads/sites/16/2023/06/FUMYUGIOH0006.jpg',
                'date' => '2024-01-24',
                'description' => 'Descrizione del progetto 2.',
            ],
            [
                'title' => 'Progetto 3',
                'author' => 5,
                'image' => 'immagine3.jpg',
                'date' => '2024-02-14',
                'description' => 'Descrizione del progetto 3.',
            ],
            [
                'title' => 'Progetto 2',
                'author' => 4,
                'image' => 'immagine2.jpg',
                'date' => '2024-02-13',
                'description' => 'Descrizione del progetto 2.',
            ],
            [
                'title' => 'Progetto 3',
                'author' => 3,
                'image' => 'immagine3.jpg',
                'date' => '2024-02-14',
                'description' => 'Descrizione del progetto 3.',
            ],

        ];


     $typeIds=Type::all()->pluck('id');

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->user_id = $project['author'];
            $newProject->type_id =$typeIds[rand(0, count($typeIds) - 1)];
            $newProject->image = $project['image'];
            $newProject->date = $project['date'];
            $newProject->description = $project['description'];
            $newProject->save();

        }

    }
}
