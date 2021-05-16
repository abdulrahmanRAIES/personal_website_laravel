@extends('layouts.admin_layout')

@section('content')
<form action="{{route('education.store')}}" method="post" enctype="multipart/form-data">
    @csrf
   
    <div class="row">

        <div style="margin-left: 20px;" class="form-group col-md-4 mt-3">
             <div class="mb-3">
                <label for="title"><h4> University Name </h4></label>
                <input type="text" class="form-control" id="title1" name="title1" value="">
              </div>

              <div class="mb-3">
                <label for="title"><h4> Degree </h4></label>
                <input type="text" class="form-control" id="title2" name="title2" value="">
              </div>

              <div class="mb-3">
                <label for="title"><h4>Description</h4></label>
                <input type="text" class="form-control" id="description" name="description" value="">
              </div>

              <div class="mb-5">
                <label for="sub_title"><h4> Start </h4></label>
                <input type="text" class="form-control" id="start" name="start" value="">
            </div>

            <div class="mb-5">
                <label for="sub_title"><h4> End </h4></label>
                <input type="text" class="form-control" id="end" name="end" value="">
            </div>

        </div>
    </div>
    <input style="margin-left: 20px;" type="submit" name="submit" class="btn btn-primary mt-5">
</div>
</form>
@endsection
