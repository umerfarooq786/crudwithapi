@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <legend>Specailities of Technicians</legend>
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
                <a href='{{url("/createspecaility")}}'><button class="btn btn-primary">Add New</button></a>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Service's Category </th>
                </tr>
                </thead>
                <tbody>
                @if(count($specailities) > 0)
                    @foreach($specailities->all() as $specaility)

                        <tr>
                            <td>{{ $specaility->id }}</td>
                            <td>{{ $specaility->name }}</td>
                            <td>
                                <a href='{{ url("/updatespecaility/{$specaility->id}") }}'><button class="btn btn-success">Update </button></a>
                                <a href='{{ url("/deletespecaility/{$specaility->id}") }}'><button class="btn btn-danger"> Delete </button></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection