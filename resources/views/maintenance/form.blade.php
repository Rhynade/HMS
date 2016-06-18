@extends('layouts.app')

@section('content')
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
      <!-- <div class="checkbox">
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
        </label> -->
        <fieldset class="form-group">
          <label for="exampleTextarea">Description</label>
          <textarea name="description" class="form-control" id="description" rows="10"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


  @endsection
