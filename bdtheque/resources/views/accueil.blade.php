@extends('template')

@section('titre')
    Accueil
@endsection

@section('contenu')
    
    <h2>Liste des BD</h2>

    
    @foreach($bd as $bd)
            
        <p>{{ $bd->bd_titre }}</p>
        
    @endforeach
    
@endsection