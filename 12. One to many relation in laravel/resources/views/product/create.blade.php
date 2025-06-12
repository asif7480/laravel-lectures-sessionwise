<h2>Create Product</h2>
<form method="POST" action="/products/create">
    @csrf
    <input type="text" name="productName" placeholder="Product Name" required>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
        @endforeach
    </select>
    <button type="submit">Create</button>
</form>
