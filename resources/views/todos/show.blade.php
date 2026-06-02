<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <title>{{ $todo->content }}</title>
</head>
<body>

<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <p><a href="/todos/{{ $todo->id }}/edit">Rediģēt šo ierakstu</a></p>

  <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf
    @method('DELETE')
    <button type="submit">Dzēst šo uzdevumu</button>
  </form>
</x-layout>
               
</body>
</html>