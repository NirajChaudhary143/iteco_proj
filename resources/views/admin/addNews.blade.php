@extends('admin.include.main')

@section('main-section')
    <div class="container my-5">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12 mx-auto opacity-9">
            <div class="card z-index-0 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 w-50">
                    <div class="bg-gradient-dark shadow-secondary border-radius-lg pt-3 pb-2">
                      <h6 class="text-white text-capitalize ps-3">ADD NEWS</h6>
                    </div>
                </div>
              <div class="card-body">
                @include('admin.newsForm')
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
    