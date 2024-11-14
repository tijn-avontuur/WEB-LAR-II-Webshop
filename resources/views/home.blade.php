<x-head/>

<body>
    <x-header/>
    <h1>Games</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->description }}</td>
                    <td>{{ $game->price }}</td>
                    <td>{{ $game->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-footer/>
</body>