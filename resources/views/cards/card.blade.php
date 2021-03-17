@extends('layouts.app')

@section('titolo', 'carta')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Carta</th>
            <th>Collezione</th>
            <th>Valore</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td> {{$carta->nome}} </td>
                <td>{{$carta->collezione}}</td>
                <td>{{$carta->valutazione}} €</td>
                <td> <a href=" {{route('cards.index')}} ">back to shop</a> </td>
            </tr>
    </tbody>
</table>
@endsection