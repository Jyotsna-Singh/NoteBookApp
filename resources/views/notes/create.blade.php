@extends('layouts.base')

@section('content')
  <div class="container">
<h1>Create Note</h1>

@if(count($errors)>0)
    <ul style="none">
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('notes.store')}}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
    <label for="title">Note Title</label>
    <input class="form-control" type="text" name="title">
    </div>

    <div class="form-group">
    <label for="body">Note Body</label>
    <textarea class="form-control" type="text" name="body"></textarea>
    </div>

    <input type="hidden" name="notebook_id" value="{{$id}}">
    <input class="btn btn-primary" type="submit" value="Done">
</form>
</div>

@endsection