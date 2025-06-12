<h2>Edit Product</h2>
<form method="POST" action="/products/edit/{{ $product->id }}">
    @csrf
    <input type="text" name="productName" value="{{ $product->productName }}" required>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->categoryName }}
            </option>
        @endforeach
    </select>
    <button type="submit">Update</button>
</form>