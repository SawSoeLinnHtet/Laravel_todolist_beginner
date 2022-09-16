@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6"><h3 class="float-left d-inline-block mt-5">Todolist Table</h3>
      <a href="{{ route('todo_list.create') }}" class="mb-5 btn btn-sm btn-primary float-right mt-5">Create ToDoList</a>
      <div class="container">
        @include('todo_list.table')
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>
@endsection