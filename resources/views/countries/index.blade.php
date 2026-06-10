<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset("style.css") }}">
        <title>Countries</title>
</head>
<body>

<x-layout>
    <x-slot:title>
        Countries
    </x-slot:title>

    <h1>Countries</h1>
    <p>Vias valstis</p>

    <ul>
        @foreach ($countries as $country)
            <li><a href="/countries/{{ $country->id }}">{{ $country->name }}</a></li>
        @endforeach
    </ul>

</x-layout>
               
</body>
</html>
