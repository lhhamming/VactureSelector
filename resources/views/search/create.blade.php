<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create page!</title>
</head>
<body>
    <h1>Welcome to the create page</h1>
@if(!empty($errormessage))
    <h1 style="color: red;"> {{ $errormessage }}</h1>
@endif
    <form action="/AddVac" method="POST">
        @csrf
        <input name="naam" type="text" placeholder="Functie van de baan" required> <br> <br>
        <input name="linknaar" type="text" placeholder="Link naar de vacature" required><br><br>
        <select name="soort" required>
            <option value="FED">Front end</option>
            <option value="BED">Back end</option>
            <option value="FSD">Full stack developer</option>
        </select><br><br>
        <input type="submit" value="Zet hem in de database!">
    </form>
</body>
</html>