@extends('app')
@section('content')
{!! Form::open(['url' => 'create_event']) !!}
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Event Name</label>
    <div class="col-sm-10">
      <input type="text" name='name' class="form-control" id="email" placeholder="Event Name">
    </div>
  </div>
     <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Event venue</label>
    <div class="col-sm-10"> 
      <input type="text" name='venue' class="form-control" id="pwd" placeholder="Event venue">
    </div>
  </div>
     
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Event description</label>
    <div class="col-sm-10"> 
        <textarea name='description' rows="10" class="form-control">
            
        </textarea>
    </div>
  </div>
     
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Latitude</label>
    <div class="col-sm-10"> 
      <input type="text" name='latitude' class="form-control" id="pwd" placeholder="Latitude">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Longitude</label>
    <div class="col-sm-10"> 
      <input type="text" name='longitude' class="form-control" id="pwd" placeholder="Longitude">
    </div>
  </div>
<!--  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>-->
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
{!! Form::close() !!}

<?php

foreach($errors->all('<li>:message</li>') as $message)
{
    echo $message;
}
?>

@endsection