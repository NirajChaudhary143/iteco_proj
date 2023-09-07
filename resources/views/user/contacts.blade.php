@extends('user.include.main')

@section('main-section')

<link rel="stylesheet" href="{{asset('user/css/contacts.css')}}">

    <div class="container mt-5 main-contc rounded shadow px-5">
        <div class="row">
            <h2 class=" text-center text-primary fw-bold">Nice to Meet You.</h2>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3533.03583167701!2d85.337449!3d27.6852874!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19937eaf0c9b%3A0x6967752b4c0164e7!2sITECO%20Nepal%20P.%20Ltd.!5e0!3m2!1sen!2snp!4v1690800890296!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" height="440px" class="w-100 rounded shadow my-3"></iframe>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column left-contact  mt-5">
                        <h4>ADDRESS</h4>
                        <p>Panchakanya Marga, Minbhawan<br>
                        Naya Baneshwor, Kathmandu, Nepal</p>
                        <h4>PHONE</h4>
                        <p>01-4106776</p>
                        <h4>EMAIL</h4>
                        <p>iteco@mos.com.np</p>
                        <h4>SOCIAL</h4>
                        <div class="medias2">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-sm-12 right-contact  mt-5">
                        <form class="row form">
                            <div class="col-md-12 col-lg-6 col-sm-12 mb-4">
                                <input type="text" class=" msg w-100" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-12 col-lg-6 col-sm-12  mb-4">
                                <input type="text" class=" msg w-100" placeholder="Enter Your Email">
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <textarea name="name" id="name" class="msg textareac mb-4" placeholder="Message"></textarea>
                            <input type="submit" value="SEND" class="submit_btnc btn-primary form-control">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
