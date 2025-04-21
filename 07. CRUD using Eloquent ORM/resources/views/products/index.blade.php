@extends('main')

@section("content")
    <h2>All post</h2>

    <a href="/create">Add new Product</a>
    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Product Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Quality</td>
                <td>Actions</td>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->quality }}</td>
                    <td>
                        <a href="{{ url("edit/$product->id")}}">Update</a>
                        <a href="{{ url("delete/$product->id")}}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection