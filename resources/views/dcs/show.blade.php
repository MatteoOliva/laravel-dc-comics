@extends('layouts.app')
@section('main-content')
<section> 
    <div class="container py-4">
   <h1>Dettaglio comic {{$dc->id}}: {{$dc->title}} </h1>
</div>
</section>
@endsection
