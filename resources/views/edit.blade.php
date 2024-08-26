@extends('layout.app')
@section('title')
    Edit
@endsection

<br><br>
<div class="text-center">
    <h2>Edit Item</h2>
</div>

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
    <form method="post" action="{{route('cards.update',$getCard->id)}}">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{$getCard->title}}">
        </div>
        <button type="submit" class="btn btn-info">Update</button>
    </form>
</div>
