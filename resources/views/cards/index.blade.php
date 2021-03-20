@extends('layouts.app')

@section('titolo', 'cards shop')

@section('content')
    <div class="container">
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
                        <td> 
                            <a class="btn btn-primary" href=" {{route('cards.show', [$carta->id])}} ">Dettagli</a>
                            <a class="btn btn-secondary" href=" {{route('cards.edit', [$carta->id])}} ">Modifica</a>
                            
                        </td>
                        <td>
                            <form method="post" action="{{route('cards.destroy', $carta->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">CANCELLA</button>
                            </form>
                        </td>
                </tr>
            
        @endforeach
    </tbody>
</table>
    </div>
@endsection