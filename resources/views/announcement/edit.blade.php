@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <script src="{{ URL::to('tinymce/js/tinymce/tinymce.min.js') }}"></script>
  <!-- <script src='//cdn.tinymce.com/4/tinymce.min.js'></script> -->
  <script>
    tinymce.init({
      selector: '#mytextarea',
      statusbar:false,

    });
  </script>
</head>

<body>
  <div class="container">
    <h1>Edit an Announcement</h1>
    <form method="POST" action="/announcement/{{ $announcement->id }}">

    {{ method_field('PATCH')}}

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset class="form-group">
        <label for="enterTitle">Title</label>
        <textarea name="title" class="form-control" id="enterTitle" rows="1">{{ $announcement->title }}</textarea>
      </fieldset>
      
      <fieldset class="form-group">
        <textarea id="mytextarea" name="body" class="form-control" rows="15">{{ $announcement->body }}</textarea>
      </fieldset>


      <button type="submit" class="btn btn-primary">Update Announcement</button>

    </form>
  </div>
</body>
</html>

@endsection