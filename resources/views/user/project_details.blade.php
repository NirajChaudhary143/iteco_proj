@extends('user.include.main')
@section('main-section')

<link rel="stylesheet" href="{{asset('user/css/background1.css')}}">

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 contt">
            <div class="col-md-12 col-lg-12 col-md-12 h2 text-center fw-bold pb-3">PROJECT <span class="text-primary">DETAILS</span></div>
            <p class="projul col-md-12 col-sm-12 col-lg-12 text-center mb-4"></p>
            <div class="bio">
                <div class="row">
                    <h4 class="pb-2 fw-bold">{{$projects->project_title}}</h4>
                    @if($projects->image)
                    <div class="project-details-image">
                        <img src="{{asset($projects->image)}}" alt="">
                    </div>
                    @endif
                </div>
                <div class="project-details-content-right">
                    <div class="project-details-text">
                        <p><strong>Description:</strong> {!!$projects->description!!}</p>
                        <p><strong>Uv/Association:</strong> {{$projects->uv_association}}</p>
                        <p><strong>Client:</strong> {{$projects->client_name}}</p>
                        <p><strong>Starting Date:</strong> {{$projects->start_date}}</p>
                        <p><strong>Completion Date:</strong> {{$projects->complete_date}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('admin/js/index.js')}}"></script>
@endsection
