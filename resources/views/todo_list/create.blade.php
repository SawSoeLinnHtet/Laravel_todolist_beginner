@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-3">
  </div>
  <div class="col-6">
    <h3 class="h3 text-primary mt-5 mb-5">
      Create ToDoList Form
    </h3>
    <div class="container">
      <form action="{{ route('todo_list.store') }}" method="POST">
        @csrf
        @include('todo_list.partials.form')
      </form>
    </div>
  </div>
  <div class="col-3">
  </div>
</div>
@endsection