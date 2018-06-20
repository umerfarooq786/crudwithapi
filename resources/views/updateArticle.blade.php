@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{ url('/editArticle',array($articles->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Laravel CRUD Application</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $articles->title;?>" placeholder="Title">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>

                        <textarea name="description" class="form-control" placeholder="Description"><?php echo $articles->description;?></textarea>
                    </div>




                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('/Article') }}" class="btn btn-primary">back</a>

                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection