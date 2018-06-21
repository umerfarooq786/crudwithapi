@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <legend>Product Items</legend>
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
                <a href='{{url("/createitem")}}'><button class="btn btn-primary">Add New</button></a>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>

                </tr>
                </thead>
                <tbody>
                @if(count($items) > 0)
                    @foreach($items->all() as $item)

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                            <a href='{{ url("/updateitem/{$item->id}") }}'><button class="btn btn-success">Update </button></a>
                            <a href='{{ url("/deleteitem/{$item->id}") }}'><button class="btn btn-danger"> Delete </button></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection