@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <legend>Technicians</legend>
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
                <a href='{{url("/createtechnician")}}'><button class="btn btn-primary">Add New</button></a>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Image</th>
                    <th scope="col">Specaility</th>

                </tr>
                </thead>
                <tbody>
                @if(count($technicians) > 0)
                    @foreach($technicians->all() as $technician)

                        <tr>
                            <td>{{ $technician->id }}</td>
                            <td>{{ $technician->t_name }}</td>
                            <td>{{ $technician->cnic }}</td>
                            <td>{{ $technician->email }}</td>
                            <td>{{ $technician->address }}</td>
                            <td>{{ $technician->phone }}</td>
                            <td>{{ $technician->rating }}</td>
                            {{--<td><img src="public/upload/{{ $technician->image }}"> </td>--}}
                            {{--<td><img src="{{asset('storage/upload/'.$technician->image. '.jpg')}}" width="100px" height="100px"> </td>--}}
                            <td><img src="{{asset('storage/upload/'.$technician->image)}}" width="100px" height="100px"> </td>
                            {{--<td>{{ $technician->image }}</td>--}}
                            <td>{{ $technician->name }}</td>
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