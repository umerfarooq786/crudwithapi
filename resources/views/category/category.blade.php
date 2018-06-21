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
            {{--<div class="row">--}}
                {{--<a href='{{url("/createspecaility")}}'><button class="btn btn-primary">Add New</button></a>--}}
            {{--</div>--}}

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Service's Name </th>
                </tr>
                </thead>
                <tbody>
                @if(count($categories) > 0)
                    @foreach($categories->all() as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            {{--<td>--}}
                                {{--<a href='{{ url("/updatespecaility/{$specaility->id}") }}'><button class="btn btn-success">Update </button></a>--}}
                                {{--<a href='{{ url("/deletespecaility/{$specaility->id}") }}'><button class="btn btn-danger"> Delete </button></a>--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection