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
<h1>Publish an Announcement</h1>
  <form method="post" action="/announcement/display">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <fieldset class="form-group">
        <label for="enterTitle">Title</label>
        <textarea name="title" class="form-control" id="enterTitle" rows="1"></textarea>
      </fieldset>
      
  <fieldset class="form-group">
    <textarea id="mytextarea" name="body" class="form-control" rows="15"></textarea>
  </fieldset>

 
  <button type="submit" class="btn btn-primary">Publish</button>
  </form>
  </div>
</body>
</html>

 <!--  <div class="container">
    <h3>Publish An Announcement</h3>
    <form method="POST" action="/announcement/display">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset class="form-group">
        <label for="enterTitle">Title</label>
        <textarea name="title" class="form-control" id="enterTitle" rows="1"></textarea>
      </fieldset>

      <fieldset class="form-group">
        <label for="exampleTextarea">Text</label>
        <textarea name="body" class="form-control" id="exampleTextarea" rows="10"></textarea>
      </fieldset>
      <fieldset class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" class="form-control-file" id="exampleInputFile">
      </fieldset>
      <button type="submit" class="btn btn-primary">Publish</button>
    </form>
  </div>
 -->
<!-- </body>
</html> -->


@endsection
