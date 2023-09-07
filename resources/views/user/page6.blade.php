@extends('user.include.main')
@section('main-section')

    <link rel="stylesheet"href="{{asset('user/css/background1.css')}}">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 contt">
                <div class="col-md-12 col-lg-12 col-md-12 h2 text-center fw-bold mb-1 h2 pt-2" style="padding-bottom: 40px;">PROJECT <span class="text-primary">DETAILS</span></div>
                        <p class="projul col-md-12 col-sm-12 col-lg-12 text-center"></p>
                <div class="bio">
                    <div class="roww">
                             <h3 style="padding-bottom: 10px;">Bhimphedi Kulekhani Tunnel Construction Project
                                </h3>
                                <div class="project-details-image">
                                    <img src="{{asset('user/images/yo/proj1.jpg')}}" alt="Project Image">
                                </div>
                            </div>
                            <div class="project-details-content-right">
                                <div class="project-details-text">

                                    <p><strong>Description:</strong> Preliminary Tunnel Engineering Design and Preparation of General Arrangement Drawings of Posta Bahadur Bogati Tunnel Project(3.20km) </p>
                                    <p><strong>Starting Date:</strong> February 2017</p>
                                    <p><strong>Completion Date:</strong> Ongoing</p>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
