@extends('layouts.base')

@section('pageTitle')
Chi Siamo
@endsection

@section('pageContent')
<h1>Chi Siamo</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae illo placeat alias laboriosam asperiores et facilis soluta? Ipsa harum quibusdam ad, facilis esse doloremque minima eligendi, dolor ea perspiciatis ipsam.</p>
<ul>
    @foreach ($team as $item)
        <li>{{$item["nome"]}} {{$item["cognome"]}}</li>
    @endforeach
</ul>
@endsection