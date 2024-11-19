<x-head/>

<body>
    <x-header/>

    <h3>ID: {{ $game->id }}</h3>
    <h1>Name: {{ $game->title }}</h1>
    <img src="{{ asset('storage/' . $game->image) }}" width="100">
    <p>Game description: {{ $game->description }}</p>
    <p>Price: {{ $game->price }}</p>
    <p>Category: {{ $game->category }}</p>

    <a href="{{ route('products.index') }}">Back to List</a>

    <x-footer/>
</body>