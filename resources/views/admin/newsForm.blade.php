@if(isset($news))
{!! Form::model($news,[
    'route'=>['update.news',$news->id],
    'method'=>'post',
    'enctype'=>'multipart/form-data',
    'role'=>'form',
    'class'=>'text-start row'
]) !!}

@else

{!! Form::open([
    'route'=>'add.news',
    'method'=>'post',
    'enctype'=>'multipart/form-data',
    'role'=>'form',
    'class'=>'text-start row',
    'id'=>'myForm'
])
!!}

@endif

    <input type="hidden" id="hdnprojId" value="" />
    <div class="col-lg-6 col-md-12 col-sm-12 form-inp mb-3">
        <div class="col-lg-12 col-md-12 col-sm-12 form-inp mb-3">
            {!! Form::label('','Title',['class'=>'form-label','id'=>'email']) !!}
            {!! Form::text('title',null) !!}
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 form-inp mb-3">
        {!! Form::label('','Add Image',['class'=>'form-label','id'=>'email']) !!}
        {{-- {!! Form::file('image', null) !!} --}}
        <input type="file" name="image" id="">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 form-inp mb-3">
        {!! Form::label('','Description',['class'=>'form-label','id'=>'email']) !!}
        {!! Form::textarea('description',null,['id'=>'editor','rows'=>'10']) !!}
      </div>
      <div class="text-center col-lg-12 col-md-12 col-sm-12 form-inp mb-3">
        {!! Form::submit($btn,['class'=>'btn bg-gradient-dark w-100 my-4 mb-2']) !!}
    </div>
{!! Form::close()!!}


