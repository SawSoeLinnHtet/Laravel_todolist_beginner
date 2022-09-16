@extends('layouts.master')

@section('content')
    <div class="container">
      <div class="col-md-12 text-center">
        <h1 class="mb-5 mt-5 text-primary">
          Welcome to my Todolist
        </h1>
        <a href="{{ route('todo_list.index') }}" class="btn btn-sm btn-primary align-center">
          Let's Start New Day
        </a>
      </div>
    </div>
@endsection