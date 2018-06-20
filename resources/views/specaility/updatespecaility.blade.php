@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{ url('/editspecaility',array($specailities->id)) }}">
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
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $specailities->name;?>" placeholder="Title">

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('/specaility') }}" class="btn btn-primary">back</a>

                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection