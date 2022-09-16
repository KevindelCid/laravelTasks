<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([

            'title_task' => 'primera tarea',
            'id_user' => 1,
            'description' => 'descripcion de la tarea que estamos creando desde un seeder',
            'start' => '2022-09-09',
            'end' => '2022-09-10',
            'color' => '#fff',
            'status' => '1',


        ]);
    }
}
