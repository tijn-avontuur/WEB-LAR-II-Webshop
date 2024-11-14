<x-head/>

<body>
    <x-header/>
    <h1>Create New Game</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('products.index') }}">Back to List</a>

    <x-footer/>
</body>