@extends('layouts.app')

@section('titolo', 'cards shop')

@section('content')
<a href="{{route('cards.create')}}"> Aggiungi nuova carta</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Carta</th>
            <th>Collezione</th>
            <th>Valore</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($card as $carta)

            <tr>
                <td> {{$carta->nome}} </td>
                <td>{{$carta->collezione}}</td>
                <td>{{$carta->valutazione}} €</td>
                <td> <a href=" {{route('cards.show', [$carta->id])}} ">Dettagli</a> </td>
            </tr>
            
        @endforeach
    </tbody>
</table>
@endsection