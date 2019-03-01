<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
        
<body>
    <h1>Welcome to search bank!</h1>
    <a href="Search/create">Add an item to the dbd</a>
    <table>
            <tr>
                <th>Naam Vacture</th>
                <th>Link naar de Vacture</th>
                <th>Soort</th>
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
        </tr>
        <!--$Vacture->Type == "FSD"-->

        @endforeach
    </table>
</body>
</html>

