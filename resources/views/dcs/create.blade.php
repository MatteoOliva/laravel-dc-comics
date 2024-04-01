@extends('layouts.app')

@section('main-content')

<section>
    <div class="container py-4">
        <a href="{{route('dcs.index')}}">torna ai comics</a>
    

    <form action="{{ route('dcs.store' )}}" class="row" method="POST">
        @csrf


        <div>
            <label for="title">Titolo</label>
            <input id="title" name="title" type="text">
        </div>

        <div>
            <label for="description">descrizione</label>
            <input id="description" name="description" type="text">
        </div>

        <div>
        <label for="series">e' una serie?</label>
            <select  id="series" name="series">
                <option value="yes">si</option>
                <option value="not">no</option>
            </select>
        </div>

        <div>
            <label for="earnings">guadagno</label>
            <input id="earnings" name="earnings" type="number">
        </div>

        </div>
        <button>Salva</button>
        

        
    </form>
</div>
</section>
@endsection

