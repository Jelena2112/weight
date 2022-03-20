@extends('layout')

@section('content')
    <form method="post" action="{{route('addWeight.post')}}">
        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <small style="color: red;">{{ $error }}</small>
        @endforeach

        <label for="users">Choose user:</label>
        <select name="user_id" id="users">
            @foreach(\App\Models\User::all() as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>

        <label for="current_weight">Weight:</label>
        <input value="{{ old('weight') }}"  type="text" id="weight" name="current_weight" placeholder="Your current weight"><br>

        <input type="submit" value="Submit">
    </form>
@endsection
