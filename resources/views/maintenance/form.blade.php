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
    <form method="POST" action="/maintenance/received">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset class="form-group">
        <label for="title">Title</label>
        <textarea name="title" class="form-control" id="title" rows="1"></textarea>
      </fieldset>
      <fieldset class="form-group">
        <label for="faultyArea">Faulty Area</label>
        <textarea name="faultyArea" class="form-control" id="faultyArea" rows="1"></textarea>
        <small class="text-muted">eg. Window, Blinds, Lights etc.</small>
      </fieldset>

      <fieldset class="form-group">
        <label for="exampleTextarea">Description</label>
        <textarea name="description" class="form-control" id="mytextarea" rows="10"></textarea>
      </fieldset>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>




@endsection
