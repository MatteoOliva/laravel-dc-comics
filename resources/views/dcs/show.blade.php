@extends('layouts.app')
@section('main-content')
<section> 
    <div class="container py-4">
    <a href="{{route('dcs.index')}}">torna ai comics</a>

   <h1>Dettaglio comic {{$dc->id}}: {{$dc->title}} </h1>
   <p>descrizione: {{$dc->description}}</p>
   <p>series: {{$dc->series}}</p>
   <p>earnings: {{$dc->earnings}}</p>

   
</div>
</section>
@endsection
