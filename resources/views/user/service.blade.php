@extends('user.include.main')

@section('main-section')

<link rel="stylesheet" href="{{asset('user/css/services.css')}}">

    <section class="services w-100 pt-5 pb-2 text-dark" style="background-color: #e4e7ee;">
        <div class=" d-flex container mb-4">
            <div class="row">
                <div class="col-md-12 col-lg-12 col sm-12 h2 text-center mb-3">OUR <span class=" fw-bold text-primary">SERVICES</span></div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">

                    <div class="scard">
                        <img src="{{asset('user/images/hydropower-station-svgrepo-com.svg')}}" class="text-center" alt="">
                        <p class="title2"></p>
                        <p class="h5">HYDROPOWER</p>
                        <p class=""><ul class="">
                            <ul class="desc2" style="padding: 0px;">
                                <li>Pre-Feasibility Study of 300+ MW Project</li>
                                <li>Feasibility Study of 1000+ MW HEP (Around 20 Projects)</li>
                                <li>Detailed Design of 750+ MW HEP (Around 6 Projects)</li>
                                <li>Construction Supervision of 138.5 MW HEP (3 Projects)</li>
                                <li>Commissioning of 27.5 MW HEP (2 Projects)</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                    <div class="scard ">
                        <img src="{{asset('user/images/infrastructure-svgrepo-com.svg')}}" class="align-self-center" alt="">
                        <p class="title2"></p>
                        <p class="h5">BUILDING AND URBAN DEVELOPMENT</p>
                        <p class="desc2"><ul class="desc2">
    <li>2 Hospitals totaling 75 bed capacity and 5800 sq.m. built up area (Nuwakot and Mugu)</li>
    <li>Road, river training, sewer lines, green belts and allied works for urban river corridor in Kathmandu Valley</li>
    <li>4 Lane Urban road of ~3 km in Kathmandu</li>
    <li>Upgradation of Master Plan for Bagmati Area Sewerage Project</li>
</ul>
</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                        <div class="scard">
                            <img src="{{asset('user/images/water-resources-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="title2"></p>
                            <p class="h5">WATER SUPPLY AND SANITATION</p>
                            <p class="desc2"><ul class="desc2">
    <li>1,700,000+ Design Population</li>
    <li>Design and construction supervision (20+ Urban Towns, 40+ Small Towns)</li>
    <li>Design of 8 co-finance WSSP</li>
    <li>Feasibility Study of 500+ km of Bulk water supply transmission pipeline system</li>
</ul>
</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                        <div class="scard">
                            <img src="{{asset('user/images/energy-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="title2"></p>
                            <p class="h4">TRANSMISSION LINE</p>
                            <p class="desc2">
                            <ul class="desc2">
    <li>22 km of 220 kV TL Feasibility study and design</li>
    <li>Safeguards Implementation and Monitoring works of over 300 km of Transmission line</li>
    <li>20-30 km Design of 132 kV TL for various HEPs</li>
</ul>

                            </p>
                        </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                    <div class="scard">
                        <img src="{{asset('user/images/irrigation.svg')}}" class="align-self-center" alt="">
                        <p class="title2"></p>
                        <p class="h5">IRRIGATION</p>
                        <p class="desc2"><ul class="desc2">
    <li>Design of 1300+m of barrage headworks, 100+km canal and command area of 400,000+Ha</li>
    <li>Construction Supervision of 317m barrage with 20 km canal</li>
    <li>Irrigation, Water Supply, Hydropower, Recreational projects</li>
    <li>230,000+ Ha Command Area, 133+ MW of Power, 40+ km of Tunnel</li>
</ul>
</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                        <div class="scard">
                            <img src="{{asset('user/images/transportation-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="title2"></p>
                            <p class="h5">TRANSPORTATION</p>
                            <ul class="desc2">
        <li>Design of more than 2000 km of roads and construction supervision of more than 1000 km of roads</li>
        <li>Feasibility/Design of 300+ bridges and construction supervision of 40+ bridges</li>
        <li>Feasibility Study of 12 Road Tunnel</li>

    </ul>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                    <div class="scard">
                        <img src="{{asset('user/images/construction-tools-svgrepo-com.svg')}}" class="align-self-center" alt="">
                        <p class="title2"></p>
                        <p class="h5">SPECIALIST AREAS</p>
                        <p class="desc2"><ul class="desc2">
    <li>Specialized design, review and construction supervision services in slope stabilization and landslide mitigation projects</li>
    <li>Sediment handling projects</li>
    <li>Social and environmental analysis</li>
    <li>Safeguards Implementation and Monitoring works</li>
</ul>
</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                        <div class="scard">
                            <img src="{{asset('user/images/industrial-factory-svgrepo-com.svg')}}" class="align-self-center" alt="">
                            <p class="title2"></p>
                            <p class="h5">STRATEGIC AREAS</p>
                            <p class="desc2"><ul class="desc2">
    <li>Capacity building projects facilitating training related to slope stability, landslide management and other kinds of disaster risk reduction</li>
    <li>Strategic plan to provide consulting services in national and regional infrastructures relating to railways, airports, storage type of hydropower, multi-story buildings and road tunnels</li>
</ul>
</p>
                        </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                        <div class="scard ">
                            <img src="images/survey-svgrepo-com.svg" class="align-self-center" alt="">
                            <p class="title2"></p>
                            <p class="h5">SURVEY AND MAPPING</p>
                            <p class="desc2">Cutting-edge survey and mapping solutions, revolutionizing data collection and analysis, ensuring accuracy and efficiency in decision-making processes for the country's infrastructure development.</p>
                        </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-3 mb-1">
                        <div class="scard">
                            <img src="images/agriculture-svgrepo-com.svg" class="align-self-center" alt="">
                            <p class="title2"></p>
                            <p class="h5">AGRICULTURE</p>
                            <p class="desc2">Aspects such as agricultural development and rural development planning, land use planning, farm management, operation and maintenance of small and large scale irrigation systems, rural social infrastructure and rural farm mechanisation.</p>
                        </div>
                </div> -->
            </div>
        </div>
    </section>
@endsection
