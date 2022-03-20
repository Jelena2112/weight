@extends('layout')
@section('content')

  <p>Name: {{ $user->name }}</p>
  <p>Starting Weight: {{ $user->weight }}</p>
  <p>Aiming Weight: {{ $user->aiming_weight }}</p>

    <div>
        @foreach($user->userWeights as $weight)
            <p>Weight: {{ $weight->current_weight }} , Date: {{ $weight->created_at }}</p>
            <p>Remaining weight to lose: {{ $weight->current_weight - $user->aiming_weight }}</p>
        @endforeach
    </div>


@endsection
