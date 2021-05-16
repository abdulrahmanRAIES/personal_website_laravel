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
                            <th scope="col">University</th>
                            <th scope="col">Degree</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($educations)>0)
                                @foreach ($educations as $education)
                                <tr>
                                        <th scope="row">{{ $education->id}}</th>
                                        <td>{{ $education->title1}}</td>
                                        <td>{{ $education->title2}}</td>
                                       
                                        <td>{{Str::limit(strip_tags($education->description),40)}}</td>      
                                        <td>{{ $education->start}}</td>
                                        <td>{{ $education->end}}</td>             
                                        <td>
                                            <div class="row">
                                                <div style="margin-right: 20px" class="col-sm-2">
                                                    <a href="{{route('education.edit',$education->id)}}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{route('education.destroy',$education->id)}}" method="POST">
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