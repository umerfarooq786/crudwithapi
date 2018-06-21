@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/insertitem') }}">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>Items</legend>
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Item Name</label>
                            <input type="text" name="item_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name">

                        </div>


                        <div class="form-group">

                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control m-bot15" name="category_id">

                                @if(count($categories) > 0)
                                    @foreach($categories->all() as $category)


                                        <option value='{{ $category->id }}'>{{ $category->name }}</option>


                                    @endforeach
                                @endif

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/item') }}" class="btn btn-primary">back</a>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection