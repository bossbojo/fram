@extends('layouts.html5')

@section('body')
<div class="container">
   
           

        <div class="w3-card-2 w3-white w3-round" >
            <div class="w3-container">
             <div class="text-left">
                <h2>สมัครสมาชิก</h2>
                <br>
             </div>

                <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="username" >ชื่อผู้ใช้งาน</label>
                            <input id="username"  class="form-control" type="text" name="username" value="{{ old('username') }}" placeholder="๊Username/ชื่อผู้ใช้งาน" autofocus>                
                        </div>
                        <div class="form-group">
                            <label for="fullName" >ชื่อ-สกุล</label>
                            <input id="fullName" class="form-control" type="text" name="fullName" value="{{ old('fullName') }}" placeholder="๊ชื่อ-สกุล" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password" >รหัสผ่าน</label>
                            <input id="password" class="form-control"type="password"  name="password" placeholder="๊รหัสผ่าน">
                        </div>

                         <div class="form-group">
                            <label for="password-confirm">ยืนยันรหัสผ่าน</label>
                            <input id="password-confirm" class="form-control" type="password"  name="password_confirmation" placeholder="ยืนยันรหัสผ่าน">
                        </div>

                         <div class="form-group">
                            <label for="email" >E-Mail </label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail">
                        </div>
          
                        <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก
                                </button>
                                  <a class="btn btn-warning" href="{{ url('/') }}">
                                   <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> ย้อนกลับ
                                 </a>
                        </div>
                    </form>
        </div>
    </div>           
</div>
@endsection
