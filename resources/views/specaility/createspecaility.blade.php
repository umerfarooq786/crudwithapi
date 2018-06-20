@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" action="{{ url('/insertspecaility') }}">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>Specailities of Technicians</legend>
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Specaility</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Specaility">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/specaility') }}" class="btn btn-primary">back</a>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection