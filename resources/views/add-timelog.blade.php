@extends('layouts.master')
@section('content')
<?php $id = \Request::segment(3); 
?>
    
    <section class="row">

      <div class="col-md-4">

        <section class="panel-default">
          <div class="panel-heading"><h3 class="panel-title">Upload Logs</h3></div>
          <div class="panel-body">
        
            <form class="form" method="post" enctype="multipart/form-data" action="{{route('employee.upload')}}">
              <!-- <div class="form-group
              ">
                <label>Month</label>
                <select class="form-control">
                  <option value="january">January</option>
                  <option value="february">February</option>
                  <option value="march">March</option>
                  <option value="april">April</option>
                  <option value="may">May</option>
                  <option value="">June</option>
                  <option value="">July</option>
                  <option value="">August</option>
                  <option value="">September</option>
                  <option value="">October</option>
                  <option value="">November</option>
                  <option value="">December</option>
                </select>
              </div> -->
              <div class="form-group">
                {{csrf_field()}}
                <label>Logs</label>
                <input type="file" name="file" class="form-control" placeholder="..." autofocus>
                <input type="hidden" name="id" value="{{$id}}">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-default" value="Upload Logs">
              </div>
            </form>
          </div>
        </section>
        
      </div>
    </section>
    <section class="row">
      <div class="col-md-12">
          @include('include.success')
          @include('include.error')
        <table class="table">
           <thead>
             <tr>
               <th>DATE</th>
               <th>Time In</th>
               <th>Time Out</th>
               <th># of Hr Rendered</th>
             </tr>
           </thead>
           <tbody>
            {{-- @foreach($users as $user) --}}
             @foreach($users->logs as $log)
             <tr>
               <td>{{$log->date}}</td>
               <td>{{date("h:i a", strtotime($log->time_in))}}</td>
               <td>{{date("h:i a", strtotime($log->time_out))}}</td>
             </tr>
             @endforeach
             {{-- @endforeach --}}
           </tbody>
        </table>
      </div>
    </section>
@stop
