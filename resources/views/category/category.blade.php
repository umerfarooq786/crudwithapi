@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <legend>Service's Category</legend>
            <div class="row">
                <div>
                    @if(session('info'))
                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <a href='{{url("/createcategory")}}'><button class="btn btn-primary">Add New</button></a>
                </div>

                <div class="col-md-6">

                </div>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Service's Name </th>
                    <th scope="col">Action </th>
                </tr>
                </thead>
                <tbody>
                @if(count($categories) > 0)
                    @foreach($categories->all() as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href='{{ url("/updatecategory/{$category->id}") }}'><button class="btn btn-success">Update </button></a>
                                <a href='{{ url("/deletecategory/{$category->id}") }}'><button class="btn btn-danger"> Delete </button></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection