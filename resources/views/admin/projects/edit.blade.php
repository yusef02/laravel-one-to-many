@extends('layouts.app')

@section('title', 'Edit project')

@section('content')
<div class="container py-5">
  <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="row g-3">

    @csrf
    @method('patch')

    <div class="col-4">
      <label for="title" class="form-label">Title*</label>
      <input type="text" class="form-control " id="title" name="title" value="{{$project->title}}" required>
    </div>
    <div class="col-4">
      <label for="repository" class="form-label">Repository*</label>
      <input type="text" class="form-control " id="repository" name="repository" value="{{$project->repository}}" required>
    </div>
    <div class="col-4">
      <label for="type_id" class="form-label">Type*</label>
      <select type="text" class="form-select " id="type_id" name="type_id" required>
        @foreach($types as $type)
        <option value="{{$type->id}}">{{$type->type}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-4">
      <label for="author" class="form-label">Author*</label>
      <input type="text" class="form-control " id="author" name="author" value="{{$project->author}}" required>
    </div>
    <div class="col-6">
      <label for="date_create" class="form-label">Created at*</label>
      <input type="date" class="form-control " id="date_create" name="date_create" value="{{$project->date_create}}" required>
    </div>

    <div class="col-6">
      <label for="last_update" class="form-label">Last update*</label>
      <input type="date" class="form-control " id="last_update" name="last_update" value="{{$project->last_update}}" required>
    </div>

    <div class="col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" rows="6" id="description" name="description">{{$project->description}}</textarea>
    </div>

    <div class="col-3 mt-3 mb-5">
      <button class=" btn btn-success">Update</button>
    </div>
    <a href="{{ route('admin.projects.index') }}">back to index projects</a> |


  </form>

</div>


@endsection