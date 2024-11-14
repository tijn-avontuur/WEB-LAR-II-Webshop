<x-head/>

<body>
    <x-header/>
    <h1>Edit Game</h1>

    <form action="{{ route('products.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $game->title }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $game->description }}</textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ $game->price }}" required>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ $game->category }}" required>

        <button type="submit">Update</button>
    </form>

    <x-footer/>
</body>