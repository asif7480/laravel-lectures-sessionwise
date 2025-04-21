@extends("layouts.main")

@section("content")

    <form action="{{ route("products.store") }}" method="POST">
        @csrf
        <div>
            <input type="text" name="productName" id="productName" placeholder="Enter productName">
        </div>
        <div>
            <input type="number" name="price" id="price" placeholder="Enter price">
        </div>
        <div>
            <input type="number" name="quantity" id="quantity" placeholder="Enter quantity">
        </div>

        <div>
            <input type="submit" value="click to add product">
        </div>

    </form>

@endsection
