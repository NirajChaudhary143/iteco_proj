@extends('admin.include.main')

@section('main-section')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 col-6">
            <div class="bg-dark shadow-secondary border-radius-lg pt-3 pb-2">
              <h6 class="text-white text-capitalize ps-3">News</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Discription</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Reported Date</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)   
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-2">
                            <h6 class="mb-0 text-sm ps-2">{{Illuminate\Support\Str::limit($new->title, 90, '...')}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset($new->image)}}" alt="" width="50px" height="50px" class="rounded">
                        {{-- <p class="text-sm font-weight-bold mb-0">{{$new->image}}</p> --}}
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{!! Illuminate\Support\Str::limit($new->description, 40, '...') !!}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$new->reported_date}}</p>
                      </td>                      
                      <td class="align-middle">
                        {{-- <a href="javascript:;" class="text-light rounded p-2 bg-success font-weight-bold text-xs me-1" data-toggle="tooltip" data-original-title="View user">
                            View Details
                        </a> --}}
                        <a href="{{ route('edit.news.form', ['id' => $new->id]) }}" class="text-light rounded p-2 bg-info font-weight-bold text-xs me-1" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="{{ route('delete.news', ['id' => $new->id]) }}" class="text-light rounded p-2 bg-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user"
                            onclick="return confirm('Are you sure you want to delete this News?');">
                             Delete
                         </a>                         
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div style="padding:0 10px">

                  {{$news->links('pagination::bootstrap-5')}}
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection