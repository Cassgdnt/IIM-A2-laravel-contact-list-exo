<!-- TODO Etendre le layout "app" -->
@extends('layouts.app')
<!-- TODO Dans la séction "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->

<div class="container">
<ul>
@forelse($user as $user)
<li><p>{{$user->name}} a {{$user->contacts->count()}}<p></li>
@empty
<li>Il n'y a pas de contact'</li>
@endforelse
</ul>
</div>
