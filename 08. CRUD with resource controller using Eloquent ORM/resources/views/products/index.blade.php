@extends("layouts.main")

@section("content")

    <div>
        <h2>All Products</h2>

        <a href="{{ route("products.create")}}">add new product</a>

        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="{{ route("products.edit", $product->id) }}">Update</a>
                            {{-- <a href="{{ route("products.destroy", $product->id) }}">Delete</a> --}}
                            <form action="{{ route("products.destroy", $product->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

