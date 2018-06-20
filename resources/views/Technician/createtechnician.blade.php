@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/inserttechnician') }}">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>Technicians</legend>
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CNIC</label>
                            <input type="text" name="cnic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CNIC">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                                <input type="radio" name="status" value="1" checked="checked"> On
                                <input type="radio" name="status" value="0"> Off<br>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone No</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" name="experience" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Experience">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rating</label>
                            <input type="text" name="rating" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rating">

                        </div>

                        <div class="form-group">

                            <label for="exampleInputEmail1">Specaility</label>
                            <select class="form-control m-bot15" name="specaility_id">

                                @if(count($specailities) > 0)
                                    @foreach($specailities->all() as $specaility)


                                            <option value='{{ $specaility->id }}'>{{ $specaility->name }}</option>


                                    @endforeach
                                        @endif

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="image">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/technician') }}" class="btn btn-primary">back</a>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection