@extends('layouts.master')
@section('content')
    <section class="row">
      <div class="col-md-4">
        <form class="form" method="post" enctype="multipart/form-data" action="{{route('employee.upload')}}">
          <div class="form-group">
            {{csrf_field()}}
            <label>Logs</label>
            <input type="file" name="file" class="form-control" placeholder="..." autofocus>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-default" value="Save">
          </div>
        </form>
      </div>
    </section>
@stop
