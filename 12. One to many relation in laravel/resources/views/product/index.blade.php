<h2>Product List</h2>
<a href="/products/create">Add New</a>
<ul>
    @foreach ($products as $product)
        <li>
            {{ $product->productName }} - {{ $product->price }} ({{ $product->category->categoryName }})
            <a href="/products/edit/{{ $product->id }}">Edit</a>
            <a href="/products/delete/{{ $product->id }}">Delete</a>
        </li>
    @endforeach
</ul>