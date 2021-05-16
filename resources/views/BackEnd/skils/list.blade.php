@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="">dashboard</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tool</th>
                            <th scope="col">HTML Code</th>

                        </tr>
                        </thead>
                        <tbody>
                            @if (count($skils)>0)
                                @foreach ($skils as $skil)
                                <tr>
                                        <th scope="row">{{ $skil->id}}</th>
                                        <td>{{ $skil->tool}}</td>
                                        <td>{{ $skil->code}}</td>      
                                        <td>
                                            <div class="row">
                                                <div  class="col-sm-2">
                                                    <a href="{{route('skils.edit',$skil->id)}}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{route('skils.destroy',$skil->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                </tr>
                                @endforeach
                                
                            @endif
                        </tbody>
                    </table>

</main>
@endsection