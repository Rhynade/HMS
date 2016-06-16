@extends('layouts.app')

@section('content')
<div class="container">
  <form>
    <fieldset class="form-group">
      <label for="enterTitle">Title</label>
      <input type="text" class="form-control" id="enterTitle" placeholder="Enter Title">
    </fieldset>

    <fieldset class="form-group">
      <label for="exampleTextarea">Text</label>
      <textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile">
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!--div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div-->

@endsection
