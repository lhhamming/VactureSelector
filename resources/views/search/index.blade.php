@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title></title>
</head>

<body>
    <p class="title is-1 is-spaced">Welcome to the search bank!</p>



<div class="columns is-mobile is-centered">
    <div class="column is-4" style="">
                <table>
                        <tr>
                            <th>Naam Vacture | </th>
                            <th>Link naar de Vacture | </th>
                            <th>Soort | </th>
                            @if(!empty($AllowAdd))
                            <th>Delete</th>
                            @endif
                            
                        </tr>
                    @foreach ($Vactures as $Vacture)
                    <tr>
                        <td>{{$Vacture->Name}}</td>
                        <td>{{$Vacture->Link}}</td>
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
                            <input type="submit" value="Delete from database" />
                        </form>
                    </td>
                    @endif
                    <td>
                    </tr>
                    <!--$Vacture->Type == "FSD"-->

                    @endforeach
                </table>
        </div>
        <div class="column is-one-quarter is-centered" style="">
            @if(!empty($AllowAdd))
            <a href="Search/create">Add an item to the dbd</a>
            @endif
          </div>
  </div>


</body>
</html>
@endsection