<table class="table">
  <thead>
    <tr>
      <th>
        #
      </th>
      <th>
        Name
      </th>
      <th>
        Time
      </th>
      <th>
        Description
      </th>
      <th>
        Action
      </th>
    </tr>
  </thead>
  <tbody>
    @forelse($todo_lists AS $key=>$todolist)
    <tr>
      <td>
        {{ $key+1 }}
      </td>
      <td>
        {{ $todolist->name }} 
        {{-- @if($todolist->done === 1)
          <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span>
        @endif --}}
      </td>
      <td>
        {{ $todolist->time }}
      </td>
      <td>
        {{ $todolist->description }}
      </td>
      <td>
        <a href="{{ route('todo_list.edit', $todolist->id) }}" class="text-warning d-inline"><i class="fa-solid fa-pen-to-square"></i></a>
        <form action="{{ route('todo_list.delete',$todolist->id) }}" method="POST">
          @csrf  
          @method('DELETE')
          <button class="btn btn-sm btn-link text-danger"><i class="fa-solid fa-trash"></i></button>
        </form> 
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="6">
        <div class="alert alert-warning">
          No Data Found
        </div>
      </td>
    </tr>
    @endforelse
  </tbody>
</table>