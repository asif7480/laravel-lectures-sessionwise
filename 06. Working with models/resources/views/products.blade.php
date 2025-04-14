<div>
    <h1>All Products</h1>
    {{-- <pre>
        {{ print_r($products)}}
    </pre> --}}

    <a href="/addProduct">Add New product</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>ProductName</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Quality</th>
                <th>Purchased Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->quality }}</td>
                    <td>{{ $product->purchasedDate }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
