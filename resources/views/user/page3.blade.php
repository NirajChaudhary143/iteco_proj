@extends('user.include.main')
@section('main-section')

    <link rel="stylesheet" href="{{asset('user/css/background1.css')}}">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 contt">
                <div class="col-md-12 col-lg-12 col-md-12 h2 text-center fw-bold mb-1 h2 pt-2" style="padding-bottom: 40px;">PROJECT <span class="text-primary">DETAILS</span></div>
                        <p class="projul col-md-12 col-sm-12 col-lg-12 text-center"></p>
                <div class="bio">
                    <div class="roww">
                             <h3 style="padding-bottom: 10px;">Road Sector Development Project


                                </h3>
                                <div class="project-details-image">
                                    <img src="{{asset('user/images/yo/proj3.jpg')}}" alt="Project Image">
                                </div>
                            </div>
                            <div class="project-details-content-right">
                                <div class="project-details-text">

                                    <p><strong>Description:</strong>  World Bank Grant No. H 629:NP
                                        Phase I: Feasibility Study, and Detail Engineering Design
                                        Phase II: Construction Supervision</p>
                                    <p><strong>Starting Date:</strong> May 2010</p>
                                    <p><strong>Completion Date:</strong> June 2015</p>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
