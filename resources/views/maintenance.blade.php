@extends('layouts.app')

@section('content')
<div class="container">
  <form>
    <fieldset class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title">
    </fieldset>
    <fieldset class="form-group">
      <label for="title">Faulty Area</label>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Blinds
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Window
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Lights
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Fan
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Table
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Others
        </label>
      </div>
    <fieldset class="form-group">
      <label for="exampleTextarea">Description</label>
      <textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
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
