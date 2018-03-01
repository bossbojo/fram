@extends('layouts.html5')

@section('body')
<div class="container" style="min-height: 377px;">
      <div class="w3-card-2 w3-white w3-round" >
            <div class="w3-container">
             <div class="text-center">
                <h2>เข้าสู่ระบบ</h2>
                <br>
             </div>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="username" value="{{ old('username') }}"  autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                   <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                                </button>

                            </div>
                        </div>
                    </form>
         
        </div>
    </div>
</div>
@endsection
