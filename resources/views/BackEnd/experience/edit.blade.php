@extends('layouts.admin_layout')

@section('content')
<form action="{{route('experience.update', $experience->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">

        <div style="margin-left: 20px;" class="form-group col-md-4 mt-3">
             <div class="mb-3">
                <label for="title"><h4> Title 1 </h4></label>
                <input type="text" class="form-control" id="title1" name="title1" value=" {{$experience->title1}}">
              </div>

              <div class="mb-3">
                <label for="title"><h4> Title 2 </h4></label>
                <input type="text" class="form-control" id="title2" name="title2" value="{{$experience->title2}}">
              </div>

              <div class="mb-3">
                <label for="title"><h4>Description</h4></label>
                <input type="text" class="form-control" id="description" name="description" value="{{$experience->description}}">
              </div>

              <div class="mb-5">
                <label for="sub_title"><h4> Start </h4></label>
                <input type="text" class="form-control" id="start" name="start" value="{{$experience->start}}">
            </div>

            <div class="mb-5">
                <label for="sub_title"><h4> End </h4></label>
                <input type="text" class="form-control" id="end" name="end" value="{{$experience->end}}">
            </div>

        </div>
    </div>
    <input style="margin-left: 20px;" type="submit" name="submit" class="btn btn-primary mt-5">
</div>
</form>
@endsection