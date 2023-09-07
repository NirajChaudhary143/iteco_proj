@extends('user.include.main')
@section('main-section')
<link rel="stylesheet" href="{{asset('user/css/projects.css')}}">

<div class="container my-5">
    <div class="row">
        <div class="col-d-12 col-sm-12 col-lg-12 py-4 px-5 rounded shadow" style="background-color: #fff;">
            <div class="col-md-12 col-lg-12 col sm-12 h2 text-center mb-4 fw-bold">OUR <span class="" style="color: #3566c2;">PROJECTS</span></div>
            <div class="filter d-flex my-3">
                <div class="selet w-25">Select category:</div>
                <select id="categorySelect" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="0">Display All</option>
                    <option value="1">Transportation Sector</option>
                    <option value="2">Hydropower Sector</option>
                    <option value="3">Water Resource Engineering (Water Supply and Irrigation)</option>
                    <option value="4">Other Engineer including Urban Infrastructure Works</option>
                </select>
            </div>
            <table class="table table-striped" id="displayAll">
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <th class="text-center" scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" target="_blank" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            {{-- Transportation --}}
            <table class="table table-striped" id="transportation">
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($transProj as $project)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
               {{-- Hrdro --}}
               <table class="table table-striped" id="hydroProj">
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($hydroProj as $project)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>

            {{-- Water --}}

            <table class="table table-striped" id="waterProj">
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($waterProj as $project)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>

            {{-- Other --}}

            <table class="table table-striped" id="otherProj">
                <thead>
                    <tr class="">
                        <th scope="col">Project No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Completion Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($otherProj as $project)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->client_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->complete_date}}</td>
                            <td>
                            <a style="text-decoration: none" href="{{route("details.news",['id'=>$project->id])}}">View</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
