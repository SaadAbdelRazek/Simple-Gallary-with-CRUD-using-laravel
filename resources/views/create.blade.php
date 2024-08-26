@extends('layout.app')
@section('title')
    Cards page
@endsection

<br><br>
<div class="text-center">
    <h2>Create New</h2>
</div>

<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div style="width:80%; margin-left: 50px">
<form method="post" enctype="multipart/form-data" action="{{route('cards.store')}}">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control"  placeholder="Enter Title">
    </div>
    <div class="form-group">
        <input type="file"  name='image' class="form-control" placeholder="Upload Image">
    </div>
    <button type="submit" class="btn btn-success">Share</button>
</form>
</div>
