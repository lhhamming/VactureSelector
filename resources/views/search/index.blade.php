@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title></title>
</head>

<body>
    <p class="title is-1 is-spaced">Welcome to the search bank!</p>


    @if(!empty($AllowAdd))
    <div align="center" style="padding-left:350px;">
      <a href="Search/create" class="button is-dark">Add an item to the dbd</a>
    </div>
    @endif
<div class="columns is-mobile is-centered">
    <div class="column is-half" align="center">
        
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>Naam Vacture</th>
                            <th>Link naar de Vacture</th>
                            <th>Soort</th>
                            @if(!empty($AllowAdd))
                            <th>Delete</th>
                            @endif
                        </tr>
                    </thead>
                    @foreach ($Vactures as $Vacture)
                    <tr>
                        <td>{{$Vacture->Name}}</td>
                        <td><a href="{{$Vacture->Link}}"> Link to</a></td>
                        @switch($Vacture->Type)
                        @case("FSD")
                            <td>FullStack Developer</td>
                            @break
                        @case("FED")
                            <td>Front End Developer</td>
                            @break

                        @case("BED")
                            <td>Back End Developer</td>
                            @break
                        @default
                            
                    @endswitch
                    @if(!empty($AllowAdd))

                    <td>
                        <form method="POST" action="Search/{{$Vacture->id}}">
                            @csrf
                            @method("DELETE")
                            <button class="far fa-trash-alt" style="width:50px;" type="submit"></button>
                        </form>
                    </td>
                    @endif
                    <td>
                    </tr>
                    <!--$Vacture->Type == "FSD"-->

                    @endforeach
                </table>
        </div>
  </div>
</body>
</html>
@endsection