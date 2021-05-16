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
                            <th scope="col">Title 1</th>
                            <th scope="col">Title 2</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($experiences)>0)
                                @foreach ($experiences as $experience)
                                <tr>
                                        <th scope="row">{{ $experience->id}}</th>
                                        <td>{{ $experience->title1}}</td>
                                        <td>{{ $experience->title2}}</td>
                                       
                                        <td>{{Str::limit(strip_tags($experience->description),40)}}</td>      
                                        <td>{{ $experience->start}}</td>
                                        <td>{{ $experience->end}}</td>             
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <a href="{{route('experience.edit',$experience->id)}}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{route('experience.destroy',$experience->id)}}" method="POST">
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