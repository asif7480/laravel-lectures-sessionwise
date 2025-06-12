<h2>Create Category</h2>
<form method="POST" action="/categories/create">
    @csrf
    <input type="text" name="categoryName" placeholder="Category Name" required>
    <button type="submit">Create</button>
</form>
