@extends('layouts.app')

@section('content')

<h1 class="mt-3 mb-5 text-center">Edit Sponsor</h1>

    {!! Form::open(['action' => ['AdminSponsorController@update',$sponsor->id],'method'=> 'PUT','enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('name','Organization Name')}}
        {{Form::text('name',$sponsor->name,['class'=> 'form-control','placeholder'=> 'Organization Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('logo','Organization Logo',['class'=> ' d-block'])}}
        {{Form::file('img',['class'=>'w-25'])}}
    </div>

    <div class="form-group">
        {{Form::label('deal','Deal Details')}}
        {{Form::textarea('deal',$sponsor->deal,['class'=> 'form-control','placeholder'=> 'Deal Details'])}}
    </div>

    <div class="mt-4 mb-2">
        {{Form::submit('Update',['class'=> 'btn btn-light d-flex m-auto '])}}
         {!!Form::close()!!}
 </div>
@endsection
