<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicamie uzdevumi</title>
</head>
<body>

    <x-layout>
    <h1>Visi veicamie uzdevumi</h1>

    <ul>
     @foreach ($todos as $todo)
        <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
    @endforeach
    </ul>
    
</x-layout>


</body>
</html>