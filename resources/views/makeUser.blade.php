@extends('layout')

@section('content')
    <form action="{{route('createUser')}}" method="post">
        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <small style="color: red;">{{ $error }}</small>
        @endforeach

        <label for="name">Name:</label>
        <input value="{{ old('name') }}"  type="text" id="name" name="name" placeholder="Your name"><br>

        <label for="password">Password:</label>
        <input value="{{ old('password') }}"  type="password" id="password" name="password" placeholder="Your password"><br>

        <label for="email">Email:</label>
        <input value="{{old('email')}}"  type="text" id="email" name="email" placeholder="Your email"><br>

        <label for="weight">Weight:</label>
        <input value="{{ old('weight') }}"  type="text" id="weight" name="weight" placeholder="Your current weight"><br>

        <label for="aiming_weight">Aiming Weight:</label>
        <input value="{{ old('aiming_weight') }}"  type="text" id="aiming_weight" name="aiming_weight" placeholder="Your aiming weight"><br>

        <label for="units">Units:</label>
        <input value="{{ old('units') }}"  type="text" id="units" name="units" placeholder="Units"><br>

        <label for="gender">Gender:</label>
        <input value="{{ old('gender') }}"  type="text" id="units" name="gender" placeholder="Gender"><br>

        <input type="submit" value="Submit">

    </form>
@endsection

@section('title')
    Novi korisnik
@endsection

