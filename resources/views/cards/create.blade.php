@extends('layouts.app')

@section('titolo', 'cards shop')

@section('content')
    <div class="container">
        

        <form action=" {{route('cards.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="collezione">Collezione</label>
                <input type="text" class="form-control" id="collezione" name="collezione">
            </div>
            <div class="form-group">
                <label for="valutazione">Valutazione</label>
                <input type="text" class="form-control" id="valutazione" name="valutazione">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection