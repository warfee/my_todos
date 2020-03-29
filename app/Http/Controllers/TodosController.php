<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Todos;

class TodosController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $list_todos = Todos::where('user_id', $user_id)->get();
        $total_list_todos = $list_todos->count();

        $list_undone_todos = Todos::where('user_id', $user_id)->where('status', '0')->get();
        $total_undone_todos = $list_undone_todos->count();

        $done_todos = Todos::where('user_id', $user_id)->where('status', '1')->get();
        $total_done_todos = $done_todos->count();
        
        return view('todos.dashboard')
        ->with(['total_list_todos' => $total_list_todos])
        ->with(['total_undone_todos' => $total_undone_todos])
        ->with(['total_done_todos' => $total_done_todos]);
    }

     public function show()
    {
        $user_id = Auth::id();
        $todos = Todos::where('user_id', $user_id)->where('status','0')->orderBy('urgency', 'asc')->get();
        $data = [
            'todos' => $todos
        ];
        return view('todos.list_todos', $data);
    }

    public function create()
    {
         $urgencies = DB::table('todos_urgency')->get();
         $data = [
            'urgencies' => $urgencies
        ];

        return view('todos.create', $data);
    }

    public function store(Request $request)
    {

        Todos::create($request->all());
        return redirect('/todos');
    }

    public function view(Todos $todo)
    {
       return view('todos.view', compact('todo'));
    }

    public function edit(Todos $todo)
    {
        $urgencies = DB::table('todos_urgency')->get();
         $data = [
            'urgencies' => $urgencies
        ];

       return view('todos.edit')->with(compact('todo'))->with($data);
    }

    public function update(Request $request, Todos $todo)
    {

        $todo->update($request->all());
       return redirect('/todos');
    }

    public function show_done()
    {
        $user_id = Auth::id();
        $todos = Todos::where('user_id', $user_id)->where('status','1')->orderBy('urgency', 'asc')->get();
        $data = [
            'todos' => $todos
        ];
        return view('todos.done_todo', $data);
    }

}
