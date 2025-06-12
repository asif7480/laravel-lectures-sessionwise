<h2>Edit Category</h2>
<form method="POST" action="/categories/edit/{{ $category->id }}">
    @csrf
    <input type="text" name="categoryName" value="{{ $category->categoryName }}" required>
    <button type="submit">Update</button>
</form>
