@extends('layouts.app')

@section('main-content')
  <section>
    <div class="container py-4">
   <h1>comics</h1>

   <table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">description</th>
            <th scope="col">series</th>
            <th scope="col">earnings</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dcs as $dc)
        <tr>
            <td>{{ $dc->title }}</th>
            <td>{{ $dc->description }}</td>
            <td>{{ $dc->series }}</td>
            <td>{{ $dc->earnings }}</td>
            <td>
                <a href="{{ route('dcs.show', $dc) }}">show</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
  </section>
@endsection
