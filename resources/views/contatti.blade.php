@extends('layouts.base')

@section('pageTitle')
Contatti
@endsection

@section('pageContent')
<h1>Contatti</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae illo placeat alias laboriosam asperiores et facilis soluta? Ipsa harum quibusdam ad, facilis esse doloremque minima eligendi, dolor ea perspiciatis ipsam.</p>
<ul>
    @foreach ($sedi as $sede)
    <li>
        <h4>{{$sede["citta"]}}</h4>
        <p>{{$sede["indirizzo"]}}</p>
    </li>
    @endforeach
</ul>
<form action="">
    <input type="text" placeholder="nome">
    <input type="text" placeholder="cognome">
    <button type="submit">Invia</button>
</form>
@endsection