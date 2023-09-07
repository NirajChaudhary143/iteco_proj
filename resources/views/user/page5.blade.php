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
                             <h3 style="padding-bottom: 10px;">Safeguards Implementation and Monitoring works of South Asia Sub-Regional Economic Cooperation, Power System Expansion Project
                                </h3>
                                <div class="project-details-image">
                                    <img src="{{asset('user/images/yo/proj5.jpg')}}" alt="Project Image" style="width: 50%;">
                                </div>
                            </div>
                            <div class="project-details-content-right">
                                <div class="project-details-text">

                                    <p><strong>Description:</strong> Includes updating of environmental and safeguard documents, implement environmental and social measures, assist project for grievances handling, and implementation of resettlement plan under 400kV/ 220kV transmission line around 400km and substations (Dana, Kusma, Khudi, Ghelanchowk, Udipur, Markinchowk) in Nepal(ADB funded).</p>
                                    <p><strong>Starting Date:</strong> November 2017</p>
                                    <p><strong>Completion Date:</strong> Ongoing</p>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
