@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create page!</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <p class="title is-1 is-spaced">Welcome to the create page</p>
@if(!empty($errormessage))
    <h1 style="color: red;"> {{ $errormessage }}</h1>
@endif
    <form action="/AddVac" method="POST">
        @csrf
        <div class="field">
            <div class="control">
                <input name="naam" class="input is-warning" type="text" style="width:200px;" placeholder="Functie van de baan" required> <br> <br>
                <input name="linknaar" class="input is-warning" type="text" style="width:200px;" placeholder="Link naar de vacature" required><br><br>
            </div>
        </div>
        <div class="field">
            <div class="control">
              <div class="select is-warning">
                <select name="soort" required>
                    <option value="FED">Front end</option>
                    <option value="BED">Back end</option>
                    <option value="FSD">Full stack developer</option>
                </select><br><br>
              </div>
            </div>
        </div>
        <input class="button is-warning" type="submit" value="Zet hem in de database!">
    </form>
</body>
</html>
@endsection