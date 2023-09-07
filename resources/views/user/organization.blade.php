@extends('user.include.main')
@section('main-section')
<link rel="stylesheet" href="{{asset('user/css/bgcolor.css')}}">

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="orgn w-100 d-flex justify-content-center align-items-center shadow rounded" 
                    style="
                    border: 1px solid #ccc;
                    background-color: #fff;">
                    <img src="{{asset('user/images/Organization Chart.jpg')}}" class="w-100" style="padding: 10px 100px;">
                </div>
            </div>
        </div>
    </div>
    
@endsection