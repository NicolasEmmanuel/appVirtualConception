@extends('layouts.app')
@section('content')

<section class="formation">
  <div class="container">
    <h1 class="first-h1">Développez vos compétences dans le numérique, choissisez celle qui vous convient</h1>
      <ul class="cards">
        @foreach ($formations as $formation)
        <li>
            <a href="{{ route('formation_detail', $formation->nom) }}" class="card" title="Voir le détail de la formation">
              <img src="assets/image/033291a5a8fb1fd56071e57774fc630c.jpg" class="card__image" alt="" />
              <div class="card__overlay">
                <div class="card__header">
                  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                
                  <div class="card__header-text">
                    <h3 class="card__title">{{ $formation->nom }}</h3>            
                    <span class="card__status">{{ $formation->duree }}</span>
                  </div>
                  
                </div>
                <p class="card__description">{{ $formation->description }}</p>
              </div>
            </a>
        </li>
        @endforeach
      </ul>
  </div>
  </section>
    
@endsection

        <!-- <script type="text/javascript" src="assets/background.js"></script> -->