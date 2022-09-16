<?php

use App\Http\Controllers\ToDoListController;
use App\Models\ToDoList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo_list', [ToDoListController::class,'index'])->name('todo_list.index');

Route::get('/todo_list/create', [ToDoListController::class,'create'])->name
('todo_list.create');
Route::post('/todo_list/create', [ToDoListController::class, 'store'])->name('todo_list.store');

Route::get('/todo_list/{todolist}/edit', [ToDoListController::class, 'edit'])->name('todo_list.edit');
Route::patch('/todo_list/{todolist}/edit', [ToDoListController::class, 'update'])->name('todo_list.update');

Route::delete('/todo_list/{todolist}/delete', [ToDoListController::class, 'destroy'])->name('todo_list.delete');