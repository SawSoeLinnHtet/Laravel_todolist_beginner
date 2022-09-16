<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\ToDoList;
use Illuminate\Support\Facades\Redirect;

    class ToDoListController extends Controller
    {
        public function index(){
            return view('todo_list.index', ['todo_lists'=>ToDoList::all()]);
        }

        public function create(){
            return view('todo_list.create');
        }

        public function store(Request $request){
            ToDoList::create($request->all());

            return redirect()->route('todo_list.index')->with('success', 'TodoList Created');
        }

        public function destroy(ToDoList $todolist){
            $todolist->delete();

            return redirect()->route('todo_list.index')->with('success', 'TodoList Deleted');
        }

        public function edit(ToDoList $todolist){
            return view('todo_list.edit', ['todo_list'=>$todolist]);
        }

        public function update(ToDoList $todolist, Request $request){
            $todolist->update($request->except('_method', '_token'));

            return redirect()->route('todo_list.index')->with('success', 'TodoList Edited');
        }
    }
