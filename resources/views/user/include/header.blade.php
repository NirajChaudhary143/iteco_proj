<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('user/images/title_logo.jpg')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

    <title>ITECO | {{$title}}</title>

</head>
<body>
    <!-- header.php -->
    <div class="header-top w-100 py-2 text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 d-flex justify-content-between">
                    <div class="cnt">
                        <a href="mailto:iteco@mos.com.np" style="padding-right: 10px;margin-right: 10px;border-right: 2px solid #fff;"><i class="fa fa-envelope" aria-hidden="true"></i> iteco@mos.com.np</a>
                        <a href="tel:+977-1-4106776"><i class="fa fa-phone" aria-hidden="true"></i> +977-1-4106776</a>
                    </div>
                    <div class="medias">
                        <a href="https://www.facebook.com/profile.php?id=100067958342043"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/company/iteco-nepal-p-ltd/?originalSubdomain=np"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="sticky-top shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light px-0">
                        <div class="container-fluid px-0">
                            <a class="navbar-brand col-lg-5 col-md-4" href="{{route('home')}}">
                                <img class="logo" src="{{asset('user/images/logocrop.png')}}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse col-md-8 col-lg-7" id="navbarNavDropdown">
                                <ul class="navbar-nav justify-content-between w-100">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                        ABOUT
                                        </a>
                                        <ul class="dropdown-menu bg-gradient rounded" style="background: #fffe;" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{route('aboutUs')}}">About Us</a></li>
                                            <li><a class="dropdown-item" href="{{route('background')}}">Background</a></li>
                                            <li><a class="dropdown-item" href="{{route('company.profile')}}">Company Profile</a></li>
                                            <li><a class="dropdown-item" href="{{route('oraganization')}}">Organization</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="{{route('biography')}}">Biography</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('services')}}">SERVICES</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                        PROJECTS
                                        </a>
                                        <ul class="dropdown-menu bg-gradient rounded" style="background: #fffe;" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{route('ongoingProjects')}}">Ongoing</a></li>
                                            <li><a class="dropdown-item" href="{{route('completedProjects')}}">Completed</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#">GALLERY</a>
                                    </li> -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                        NOTICES
                                        </a>
                                        <ul class="dropdown-menu bg-gradient rounded" style="background: #fffe;" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{route('holiday')}}">Holidays List</a></li>
                                            <li><a class="dropdown-item" href="{{route('extensionNumber')}}">Extenstion Numbers</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact.us')}}">CONTACT US</a>
                                    </li>
                                    <li class="nav-item dropdown d-flex align-items-center">
                                        <a href="" class="nav-link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-user me-sm-1"></i>
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <!-- if not logged in -->
                                        @if(!Auth::user())
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="{{route('login')}}" target="_blank">Log In</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="{{route('register')}}" target="_blank">Register</a>
                                            </li>

                                            <!-- if logged in -->
                                            @else
                                            @if(auth()->user()->role ===1)
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="{{route('admin.panel')}}" target="_blank">ADMIN PANEL</a>
                                            </li>
                                            @endif
                                            <li>
                                                <form method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                    <button class="dropdown-item border-radius-md" type="submit">
                                                        LOG OUT
                                                    </button>
                                                </form>
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
