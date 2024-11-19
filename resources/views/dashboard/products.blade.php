<x-head/>

<body>
    <x-header/>
    <h1>Games</h1>

    <a href="{{ route('products.create') }}">Create New Game</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td><img src="{{ asset('storage/' . $game->image) }}" width="100"></td>
                    <td>{{ $game->description }}</td>
                    <td>{{ $game->price }}</td>
                    <td>{{ $game->category }}</td>
                    <td>
                        <a href="{{ route('products.show', $game->id) }}">View</a>
                        <a href="{{ route('products.edit', $game->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $game->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-footer/>
</body>