@extends('layout.app')
@section('title')
    Cards page
@endsection
<br><br><br>
<div class="text-center">
    <a href="{{route('cards.create')}}" class="btn btn-success">Create New</a>
</div><br>
<div style="width: 90%; margin-left: 80px;margin-right: 80px">
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($cards as $card)
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('public/images/'.$card['image']) }}" class="card-img-top"/>
            <div class="card-body">
                <h5 class="card-title">{{$card->title}}</h5>
                <p class="card-text">
                    <a href="{{route('cards.edit',$card->id)}}" class="btn btn-primary" >Update</a>&nbsp;&nbsp;
                    <a href="{{route('cards.destroy',$card->id)}}" class="btn btn-danger" >Delete</a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
