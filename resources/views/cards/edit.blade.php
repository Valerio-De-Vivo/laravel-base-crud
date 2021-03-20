@extends('layouts.app')

@section('titolo', 'cards shop')

@section('content')
    <div class="container">
        

        <form action=" {{route('cards.update', $carta->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$carta->nome}}">
            </div>
            <div class="form-group">
                <label for="collezione">Collezione</label>
                <input type="text" class="form-control" id="collezione" name="collezione" value="{{$carta->collezione}}">
            </div>
            <div class="form-group">
                <label for="valutazione">Valutazione</label>
                <input type="text" class="form-control" id="valutazione" name="valutazione" value="{{$carta->valutazione}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection