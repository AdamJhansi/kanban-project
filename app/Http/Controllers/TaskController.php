<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\tasks;


class TaskController extends Controller
{
    private $tasks;

    public function __construct()
    {
        $this->tasks = [
            (object) [
                'id' => 1,
                'name' => 'Develop Final Project',
                'detail' => 'Kanban project using PHP and Laravel',
                'due_date' => '2023-04-30',
                'status' => 'not_started',
            ],
            (object) [
                'id' => 2,
                'name' => 'Lunch',
                'detail' => 'Have Nasi Padang',
                'due_date' => '2023-04-10',
                'status' => 'not_started',
            ],
            (object) [
                'id' => 3,
                'name' => 'Learn Blade Templating',
                'detail' => 'Complete Blade Templating material',
                'due_date' => '2023-04-05',
                'status' => 'in_progress',
            ],
            (object) [
                'id' => 4,
                'name' => 'Decide Plans for Lebaran holidays',
                'detail' => 'Trip with family?',
                'due_date' => '2023-04-21',
                'status' => 'in_progress',
            ],
            (object) [
                'id' => 5,
                'name' => 'Develop a Laravel Project',
                'detail' => 'Develop a Kanban app\'s review',
                'due_date' => '2023-04-30',
                'status' => 'in_review',
            ],
            (object) [
                'id' => 6,
                'name' => 'Learn PHP Basics',
                'detail' => 'Complete PHP materials on Frontend Course',
                'due_date' => '2023-04-30',
                'status' => 'completed',
            ],
        ];
    }

    public function index()
    {
        $pageTitle = 'Task List'; 
        $tasks = $this->tasks;
        return view('tasks.index', [
            'pageTitle' => $pageTitle, 
            'tasks' => $tasks,
        ]);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Task';
        $tasks = $this->tasks;

        $task = $tasks[$id - 1];

        return view('tasks.edit', ['pageTitle' => $pageTitle, 'task' => $task]);
    }

    public function create()
    {
        $pageTitle = 'Create Task';
        $tasks = $this->tasks;

        $newtask = $tasks;
        return view('tasks.create', ['pageTitle' => $pageTitle, 'task' => $newtask]);
    }

}