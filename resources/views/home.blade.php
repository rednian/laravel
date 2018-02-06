@extends('layouts.master')

@section('content')
<section class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title-left">
                <h3>Employee</h3>
            </div>

        </div>
        <a href="{{route('employee.create')}}" class="btn btn-success">Add New Employee</a>
        @include('include.message')
        <table class="table table-bordered">
            <thead>
                <tr>
                  <td>#</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Username</td>
                  <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php $x =1; ?>
               <?php foreach($users as $user): ?>
                <?php $id = $user->id; ?>
                    <tr>
                        <td>{{$x}}</td>
                        <td>{{ucwords($user['fname']).' '.ucwords($user['lastname'])}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['username']}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{url('employee/upload/'.$id)}}"><span class="fa fa-folder"></span> upload logs</a>
                              </li>
                              <li><a href="#"><span class="fa fa-trash"></span> delete</a>
                              </li>
                              <li><a href="#"><span class="fa fa-pencil"></span> update</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                    </tr>
                    <?php $x++; ?>
               <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
@endsection
