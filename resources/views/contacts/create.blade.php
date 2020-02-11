@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                    <!-- TODO mise en place de la form pour créer un contact -->
        <form method="POST" action="/blogs" class='formulaire'>
            {{csrf_field()}}
            <input type="name" name="name" placeholder="Entrez votre nom">
            <input type="email" name="email" placeholder="Email">
            <input type="tel" name="tel" placeholder="Numéro de téléphone"></input>  
            <input type="submit" value="envoi" class="envoi">
            </form>
            </div>
        </div>
    </div>
@endsection
