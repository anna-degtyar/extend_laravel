<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller {

    protected $tasks;

    /**
     * Создание нового экземпляра контроллера.
     *
     * @return void
     */
    public function __construct(TaskRepository $tasks) {
        $this->middleware('auth');
        $this->tasts = $tasks;
    }

    /**
     * Отображение списка всех задач пользователя.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request) {

        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }

    /**
     * Уничтожить заданную задачу.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task) {
        $this->authorize('destroy', $task);
        $task->delete();
        return redirect('/tasks');
    }

}
