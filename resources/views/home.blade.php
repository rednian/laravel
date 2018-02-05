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
                    <tr>
                        <td>{{$x}}</td>
                        <td>{{ucwords($user['fname']).' '.ucwords($user['lastname'])}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['username']}}</td>
                        <td>
                            <div class="dropdown">
                              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                action
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dLabel">
                               <li> <a href="#" class="btn btn-link btn-xs"><span class="fa fa-folder"></span></a></li>
                               <li><a href="#" class="btn btn-link btn-xs"><span class="fa fa-trash"></span></a></li>
                               <li><a href="#" class="btn btn-link btn-xs"><span class="fa fa-pencil"></span></a></li>
                    
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
