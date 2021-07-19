@extends('layouts.index')
@section('content')

    @foreach ($outils as $outil)
    <h1>Element du tableau</h1>
        <h3 class="text-primary ">{{ $outil}}</h3>
    @endforeach
@endsection