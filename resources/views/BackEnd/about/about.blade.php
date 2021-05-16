@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">About</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href=""> About section</a></li>
            
        </ol>


        <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{@method_field('put')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3> Image</h3>
                    {{-- <img style="height: 30vh" src="{{asset('assets/img/img.png')}}" class="img-thumbnail">--}}
                     <img style="height: 30vh" src="{{url($about->image)}}" class="img-thumbnail">
                     <input class="mt-3" type="file" name="image" id="image">
                </div>
                <div class="form-group col-md-4 mt-3">
                     <div class="mb-3">
                        <label for="title"><h4> Name </h4></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$about->name}}">
                      </div>

                      <div class="mb-3">
                        <label for="title"><h4>Phone</h4></label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$about->phone}}">
                      </div>

                      <div class="mb-3">
                        <label for="title"><h4>Email</h4></label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$about->email}}">
                      </div>

                      <div class="mb-5">
                        <label for="sub_title"><h4>Description</h4></label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$about->description}}">
                    </div>

                    <div>
                        <h4>Upload Resume</h4>
                        <input class="mt-2" type="file" id="resume" name="resume">
                    </div>

                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
    </div>
</form>
</main>
@endsection
