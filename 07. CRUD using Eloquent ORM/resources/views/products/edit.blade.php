<h2>Add new product</h2>

<a href="/">Edit products</a>

<form action="{{ url("update/$product->id")}}" method="POST">
    @csrf
    @method("PUT")

    <div>
        <input type="text" name="productName" id="productName" placeholder="Enter productName" value={{$product->productName}}>
    </div>

    <div>
        <input type="text" name="price" id="price" placeholder="Enter price" value={{$product->price}}>
    </div>

    <div>
        <input type="number" name="quantity" id="quantity" placeholder="Enter quantity" value={{$product->quantity}}>
    </div>

    <div>
        <select name="quality" id="quality">
            <option value="good" {{ $product->quality == "good" ? "selected": "" }}>Good</option>
            <option value="average" {{ $product->quality == "average" ? "selected": "" }}>Average</option>
            <option value="bad" {{ $product->quality == "bad" ? "selected": "" }}>Bad</option>
        </select>
    </div>

    <div>
        <input type="submit" value="edit product">
    </div>

</form>