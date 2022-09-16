<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{



    function saludar()
    {

        return 'hola, esta es la primera api con laravel';
    }

    function index()
    {
        return Task::all();
    }

    function create(Request $request)
    {

        $request = $request->all();

        $response = Task::create([
            'title_task' => $request['title'],
            'id_user' => 1,
            'description' => $request['description'],
            'start' => $request['start'],
            'end' => $request['end'],
            'color' => $request['color'],
            'status' => '1',
        ]);


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }
    function delete($id_task)
    {

        Task::destroy($id_task);
        return response('tarea eliminada correctamente', 200);
    }

    function update($id_task, Request $request)
    {

        if (empty(Task::find($id_task))) return response('La tarea no existe', 200);
        $request = $request->all();



        Task::where('id_task', $id_task)->update([

            'title_task' => $request['title'],
            'id_user' => 1,
            'description' => $request['description'],
            'start' => $request['start'],
            'end' => $request['end'],
            'color' => $request['color'],
            'status' => '1',

        ]);
        return response('se ha actualizado la tarea', 200);
    }
}
