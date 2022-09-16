<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control col-7" id="name" name="name" value="{{ $todo_list->name ?? '' }}">
</div>
<div class="form-group">
  <label for="time">Time</label>
  <input type="time" class="form-control col-7" id="time" name="time" value="{{ $todo_list->time ?? '' }}">
</div>
<div class="form-group">
  <label for="description">Description</label>
  <input type="text" class="form-control col-7" id="description" name="description" value="{{ $todo_list->description ?? '' }}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>