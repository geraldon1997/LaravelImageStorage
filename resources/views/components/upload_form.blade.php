@extends('components.master')
@include('components.nav')

<div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="card-header w-100 m-1 text-center">Upload Image</h2>
    </div>
    <div class="row justify-content-center">
  
        <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
{{--                <label for="name">File Name</label>--}}
                <input type="text" class="form-control" id="name" placeholder="Enter file Name" name="name" >
            </div>
            <div class="form-group">
                <label for="image">Choose Image</label>
                <input id="image" type="file" name="image[]" multiple/>
            </div>
            <button type="submit" class="btn btn-primary d-block w-75 mx-auto">Upload</button>
        </form>
    </div>
    @include('components.errors')
</div>
