@extends('layout')

@section('content')

  @foreach($users as $user)
      <p>{{ $user->name }}</p>
      <a href="{{ route('showUser',[$user->id]) }}">Pogledaj korisnika</a>
  @endforeach

@endsection
