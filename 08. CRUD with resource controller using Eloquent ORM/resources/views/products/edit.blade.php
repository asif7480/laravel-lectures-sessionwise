@extends("layouts.main")

@section("content")

    <form action="{{ route("products.update", $product->id) }}" method="POST">
        @method("PUT")
        @csrf
        <div>
            <input type="text" name="productName" id="productName" value="{{ $product->productName}}" placeholder="Enter productName">
        </div>
        <div>
            <input type="number" name="price" id="price" value="{{ $product->price}}" placeholder="Enter price">
        </div>
        <div>
            <input type="number" name="quantity" id="quantity" value="{{ $product->quantity}}" placeholder="Enter quantity">
        </div>

        <div>
            <input type="submit" value="click to add product">
        </div>

    </form>

@endsection
