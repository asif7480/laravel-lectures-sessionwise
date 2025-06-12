<h2>All Categories</h2>
<a href="/categories/create">Add Category</a>
<ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->categoryName }}
            <a href="/categories/edit/{{ $category->id }}">Edit</a>
            <a href="/categories/delete/{{ $category->id }}">Delete</a>
        </li>
    @endforeach
</ul>
