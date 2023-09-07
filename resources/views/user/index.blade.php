@extends('user.include.main')
@section('main-section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- carousel slider -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade text-center shadow" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item active">
                <div class="d-block img1 display-3 fw-bold carousel-text d-flex flex-column align-items-center justify-content-center" alt=""><p class="text-light">WELCOME TO </p><p class="text-primary"> ITECO NEPAL</p>
                </div>
            </div>
            <div class="carousel-item display-3 fw-bold carousel-text d-flex align-items-center justify-content-center">
                <div class="d-block img2 display-3 fw-bold carousel-text d-flex align-items-center justify-content-center text-light" alt="">
                    WE ARE SERVING
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block img3 display-3 fw-bold carousel-text d-flex flex-column align-items-center justify-content-center text-light" alt="">
                    <p>FOR THE BETTER </p><p class="text-danger px-4">FUTURE</p>
                </div>
            </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about us section -->
    <section class="about mt-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-md-12 h2 text-center fw-bold mb-4">ABOUT <span class="text-danger">US</span></div>
                <p class="titles col-md-12 col-sm-12 sol-lg-12 text-center mb-4"></p>
                <div class="col-md-6 col-lg-6 col-md-12">
                    <img src="{{asset('user/images/aboutus1.jpg')}}" alt="" class="rounded shadow">
                </div>
                <div class="col-md-6 col-lg-6 col-md-12 mb-5" style="text-align: justify;">
                    ITECO Nepal (P) Ltd. is an engineering consulting company founded in 3rd May,1987 by the group of experienced professionals. Within a short period, ITECO Nepal has grown into one of the most reputed companies of Nepal. Today it’s activities cover a whole range of services including engineering design and construction, project planning and preparation, institutional buildup, technical assistance and training, advisory services and all aspects of project implementation. ITECO Nepal has an efficient operational system backed by devoted experts with adequate experience. The competence of our staff, our commitment to high standards and our proven ability to tackle complex assignments even under difficult circumstances have been well appreciated by our clients both inside and outside Nepal.
                    ITECO Nepal is leading engineering consulting company in Nepal providing diverse range of services in engineering sector through latest and cutting edge technology. ITECO Nepal has a wealth of experience in the field of project management, transportation, hydro-power, water supply and sanitation, sewerage management, rural and urban infrastructure development, water resources development, social and environment sectors.
                </div>
            </div>
        </div>
    </section>

    <!-- services  -->
    <section class="services w-100 text-light pt-5 pb-2 shadow">
        <div class=" d-flex container mb-4">
            <div class="row">
                <div class="col-md-12 col-lg-12 col sm-12 h2 text-center mb-4">OUR <span class=" fw-bold text-primary">SERVICES</span></div>
                <p class="titles2 col-md-12 col-sm-12 sol-lg-12 text-center"></p>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('user/images/infrastructure-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="h4 fw-bold">INFRASTRUCTURE</p>
                            <p class="title2 mb-1"></p>
                            <p class="desc">Infrastructure and physical developments, rehabilitation, reconstruction, maintenance, improvement and upgrading, landscape and site development and formulation of development plans.</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('user/images/transportation-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="h4 fw-bold">TRANSPORTATION</p>
                            <p class="title2 mb-1"></p>
                            <p class="desc">Aspects of development of conventional road network, bridges, suspension bridges, and non conventional forms of transport such as ropeway transport and inland water transport, relevant to Nepal.</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('user/images/water-resources-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="h4 fw-bold">WATER RESOURCES</p>
                            <p class="title2 mb-1"></p>
                            <p class="desc">Various aspects of development of gravity and pumped irrigation schemes, exploitation of surface and ground water potentials for water supply (small town water supply and sanitation), basin studies and water storage studies.</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('user/images/energy-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="h4 fw-bold">ENERGY</p>
                            <p class="title2 mb-1"></p>
                            <p class="desc">Aspects of generation and distribution of energy with special emphasis on the small and mini hydel sectors, and aspects of introducing portable Pelt  on turbines for village electrification.</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('user/images/earth-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="h4 fw-bold">SURVEY AND MAPPING</p>
                            <p class="title2 mb-1"></p>
                            <p class="desc">Cutting-edge survey and mapping solutions, revolutionizing data collection and analysis, ensuring accuracy and efficiency in decision-making processes for the country's infrastructure development.</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('user/images/hydropower-station-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="h4 fw-bold">HYDROPOWER</p>
                            <p class="title2 mb-1"></p>
                            <p class="desc"> Aspects such as agricultural rural development planning, land use planning, farm management, operation and maintenance of small and large scale irrigation systems, rural social infrastructure and rural farm mechanisation.</p>
                        </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                    <a href="{{route('services')}}" class="mt-2 btn py-2 px-5 show_button">Show All</a>
                </div>
            </div>
        </div>
    </section>

    <!-- articles / news -->
    <section class="articles mt-5 mb-5">
        <div class="container">
            <div class="row row-m">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="post-inner">
                            <div class="article-head">
                                <h2><strong>Latest <span  class="text-danger">News</span></strong></h2>
                            </div>
                            <div class="article-body">
                                @foreach ($news as $new)
                                <div class="news-list-item articles-list d-flex mb-2">
                                    <div class="img-wrapper col-md-4 col-lg-4 col-sm-4">
                                        <img src="{{asset($new->image)}}" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="post-info-2 col-md-8 col-lg-8 col-sm-8">
                                        <h4 class="article-title">{{$new->title}}</h4>
                                        <ul class="authar-info d-flex flex-wrap mb-1">
                                            <li><i class="fa-regular fa-clock"></i> {{$new->created_at->format('M-d-Y')}}</li>
                                        </ul>
                                        <p class="d-lg-block d-none">{!!$new->description!!}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{$news->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-sm-12 d-flex flex-column mt-sm-5 mt-lg-0">
                        <div class="wrapper w-100 bg-outline-light">
                            <div class="calendar-head">
                                <div class="icons">
                                    <span id="prev" class="material-symbols-rounded">
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </span>
                                </div>
                                <p class="current-date text-center pt-3"></p>
                                <div class="icons d-flex">
                                    <span id="next" class="material-symbols-rounded">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="calendar">
                                <ul class="weeks">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                </ul>
                                <ul class="days"></ul>
                            </div>
                        </div>
                        <!-- <div class="w-100 mt-4 card2 bg-light bg-gradient text-center p-4">
                            any content add later
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery -->
    <section class="gallery py-5 bg-dark mb-5 text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col sm-12 h2 text-center mb-4">DISCOVER OUR <span class=" fw-bold text-primary">GALLERY</span></div>
                <p class="titles2 col-md-12 col-sm-12 sol-lg-12 text-center"></p>
                <div class="scroll-container col-md-12 col-sm-12 col-lg-12 rounded mt-3 text-center">
                    <img src="{{asset('user/images/Gallery/Picture14.jpg')}}" alt="Cinque Terre">
                    <img src="{{asset('user/images/Gallery/Picture16.jpg')}}" alt="" style="width:300px;">
                    <img src="{{asset('user/images/Gallery/Picture1.jpg')}}" alt="Northern Lights">
                    <img src="{{asset('user/images/Gallery/Picture2.jpg')}}" alt="Mountains">
                    <img src="{{asset('user/images/Gallery/Picture3.jpg')}}" alt="Cinque Terre">
                    <img src="{{asset('user/images/Gallery/Picture4.jpg')}}" alt="Forest">
                    <img src="{{asset('user/images/Gallery/Picture5.jpg')}}" alt="Northern Lights">
                    <img src="{{asset('user/images/Gallery/Picture7.jpg')}}" alt="Mountains">
                    <img src="{{asset('user/images/Gallery/Picture8.jpg')}}" alt="Cinque Terre">
                    <img src="{{asset('user/images/Gallery/Picture9.jpg')}}" alt="Forest">
                    <img src="{{asset('user/images/Gallery/Picture10.jpg')}}" alt="Northern Lights">
                    <img src="{{asset('user/images/Gallery/Picture11.jpg')}}" alt="Mountains">
                    <img src="{{asset('user/images/Gallery/Picture17.jpg')}}" alt="" style="width:300px;">
                </div>
                <div class="slide_arr">
                    <button class="float-left" id="left-button">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="float-right" id="right-button">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
                <!-- <div class="col-md-12 col-lg-12 col sm-12 h2 text-center projul mb-5 text-light">SOME <span class=" fw-bold" style="color: #888;">CONTENT</span></div>
                <div class="col-md-6 text-light text-center">ADD LATER</div>
                <div class="col-md-6 text-light text-center">OR NOT YOHOHOHOHO</div> -->
            </div>
        </div>

    </section>


    <!-- projects -->
    <section class="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col sm-12 h2 text-center mb-4 fw-bold">OUR <span class="" style="color: #3566c2;">PROJECTS</span></div>
                <p class="projul col-md-12 col-sm-12 col-lg-12 text-center"></p>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                    <a href="{{route('page1')}}">
                        <div class="bg-dark p-3 mb-4 proj_card" style="background: url({{asset('user/images/yo/proj6.jpg')}});  background-size: cover;">
                            <div class="proj_title mb-2">Preparation of Detail Project Report for Lamiraha Multipurpose Dam at Sainamaina, Rupandehi, 132 m long and 23 m high Concrete Faced Rockfill Dam (CFRD)</div>
                            <div class="proj_desc">
                                Starting Date : November 2020 <br>
                                Completion Date: March 2021</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                    <a href="{{route('page2')}}">
                        <div class="bg-dark p-3 mb-4 proj_card" style="background: url({{asset('user/images/yo/proj2.jpg')}});  background-size: cover;">
                            <div class="proj_title mb-2">Detail Design and Construction Supervision of Nagdhunga Tunnel Project (2.45 Km)
                                JICA funded
                                </div>
                            <div class="proj_desc">
                                Starting Date : February 2017 <br>
                                Completion Date: Ongoing</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-0">
                    <a href="{{route('page3')}}">
                        <div class="bg-dark p-4 mb-4 proj_card" style="background: url({{asset('user/images/yo/proj3.jpg')}});  background-size: cover;">
                            <div class="proj_title mb-2">Road Sector Development Project
                                World Bank Grant No. H 629:NP
                                Phase I: Feasibility Study, and Detail Engineering Design
                                Phase II: Construction Supervision
                                </div>
                            <div class="proj_desc">
                                Starting Date : May 2010<br>
                                Completion Date: June 2015
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-0">
                    <a href="{{route('page4')}}">
                        <div class="bg-dark p-4 mb-4 proj_card" style="background: url({{asset('user/images/yo/proj4.jpg')}}); background-size: cover;">
                            <div class="proj_title mb-2">Daraudi River Bridge (during construction) in Dhodeni, Gorkha. The 134-meter long bridge built under JICA's Grant Aid connect the epicenter Saurapani on the other side of the Daraudi River. Bridge Construction along BARAKILO-BARPAK Road Project</div>
                            <div class="proj_desc">
                                Starting Date : November 2016<br>
                                Completion Date: July 2018
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-0">
                    <a href="{{route('page5')}}">
                        <div class="bg-dark p-4 mb-4 proj_card" style="background: url({{asset('user/images/yo/proj5.jpg')}}); background-size: cover;">
                            <div class="proj_title mb-2">Safeguards Implementation and Monitoring works of South Asia Sub-Regional Economic Cooperation, Power System Expansion Project ADB funded. </div>
                            <div class="proj_desc">
                                Starting Date : November 2017<br>
                                Completion Date: Ongoing
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                    <a href="{{route('page6')}}">
                        <div class="bg-dark p-3 mb-4 proj_card" style="background: url({{asset('user/images/yo/proj1.jpg')}}); background-size: cover;">
                            <div class="proj_title mb-2">Preliminary Tunnel Engineering Design and Preparation of General Arrangement Drawings of Posta Bahadur Bogati Tunnel Project (Bhimphedi Kulekhani Tunnel Construction Project)- 3.20 km</div>
                            <div class="proj_desc">
                                Starting Date : February 2020<br>
                                Completion Date: July 2020<br>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                    <a href="#" class="mt-2 btn py-2 px-5 show_button">Show All</a>
                </div>
            </div>
        </div>
    </section>

    <!--our clients-->
    <section class="ourclients mt-5 py-4">
    <div class="col-md-12 col-lg-12 col sm-12 h2 text-center mb-4 fw-bold">OUR <span class="" style="color: #3566c2;">CLIENTS</span></div>
        <p class="projul col-md-12 col-sm-12 col-lg-12 text-center"></p>

        <div class="brand-carousel owl-carousel">
            <div class="single-logo">
                <img src="{{asset('user/images//Emblem_of_Nepal-700x586.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images/ADB logo stacked.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//TDF Logo.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//JICA.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//TWB.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="user/images//MCC.png" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//NEA.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//Rastriya Prasaran Grid Company Limited.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//Swiss Agency for Development and Cooperation.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img src="{{asset('user/images//DfID.svg.png')}}" alt="">
            </div>
        </div>
        <div class="custom-owl-nav w-100">
            <button class="custom-owl-prev ms-2"><i class="fas fa-chevron-left"></i></button>
            <button class="custom-owl-next me-2"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

@endsection
