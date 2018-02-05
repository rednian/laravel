<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | Login</title>

    <link href="{{asset('/plugins/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form role="form" method="POST" action="{{ url('/login') }}">
                <h1>Login Form</h1>
                   {{ csrf_field() }}

                   <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                       <div class="">
                           <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="username">

                           @if ($errors->has('username'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('username') }}</strong>
                               </span>
                           @endif
                       </div>  
                   </div>

                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                       <div>
                           <input id="password" type="password" class="form-control" name="password" placeholder="password">

                           @if ($errors->has('password'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                       </div>   
                   </div>

                   <!-- <div class="form-group">
                       <div class="pull-left">
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" name="remember"> Remember Me
                               </label>
                           </div>
                       </div>
                   </div> -->

                   <div class="form-group">
                       <div class="">
                           <button type="submit" class="btn btn-default">
                               <i class="fa fa-btn fa-sign-in"></i> Login
                           </button>

                           <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                       </div>
                   </div>


              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Laravel!</h1>

                  <!-- <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p> -->
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>