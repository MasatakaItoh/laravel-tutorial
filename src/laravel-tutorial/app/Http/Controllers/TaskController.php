<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function index(int $id)
    {
        $folders = Folder::all();
        $folder = Folder::find($id);
        $tasks = $folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'folder_id' => $id,
            'tasks' => $tasks,
        ]);
    }
}
