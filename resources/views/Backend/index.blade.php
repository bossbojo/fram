@extends('layouts.html5')

@section('body')
<div class="container" style="min-height: 377px;">
      <div class="w3-card-2 w3-white w3-round" >
            <div class="w3-container">
             <div class="text-center">
                <h2>เมนูหลัก</h2>
                <br>
             </div>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a href="{{action('Backend\AgriculturistController@index') }}" class="thumbnail text-center">
                    <img src="{{ asset('img\01.png') }}">
                    </a>
                </div>
                @if(Auth::user()->role == 'admin')
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail text-center">
                    <img src="{{ asset('img\02.png') }}">
                    </a>
                </div>
                @endif
                 <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail text-center">
                    <img src="{{ asset('img\03.png') }}">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail text-center">
                    <img src="{{ asset('img\04.png') }}">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail text-center">
                    <img src="{{ asset('img\05.png') }}">
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail text-center">
                    <img src="{{ asset('img\06.png') }}">
                    </a>
                </div>
                @if(Auth::user()->role == 'admin')
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail text-center">
                    <img src="{{ asset('img\07.png') }}">
                    </a>
                </div>
                @endif
            </div>
 
         
        </div>
    </div>
</div>
@endsection
