@extends('layouts.admin_layout')

@section('content')
<form action="{{route('skils.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="row">

        <div style="margin-left: 20px;" class="form-group col-md-4 mt-3">
             <div class="mb-3">
                <label for="title"><h4> Tool </h4></label>
                <input type="text" class="form-control" id="tool" name="tool" value="">
              </div>

              <div class="mb-3">
                <label for="title"><h4> HTML Code </h4></label>
                <input type="text" class="form-control" id="code" name="code" value="">
              </div>


        </div>
    </div>
    <input style="margin-left: 20px;" type="submit" name="submit" class="btn btn-primary mt-5">
</div>
</form>
@endsection
