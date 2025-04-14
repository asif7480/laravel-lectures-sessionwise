<h1>Add New Product</h1>

<a href="/products">See all products</a>

<form action="{{ url('/addProduct') }}" method="POST">
    @csrf
    <div>
        <input type="text" id="productName" name="productName" placeholder="Enter product name">
    </div>

    <div>
        <input type="number" id="price" name="price" placeholder="Enter price">
    </div>

    <div>
        <input type="number" id="quantity" name="quantity" placeholder="Enter product quantity">
    </div>

    <div>
        <select name="quality" id="quality">
            <option value="good">Good</option>
            <option value="average">Average</option>
            <option value="bad">Bad</option>
        </select>
    </div>

    <div>
        <input type="date" name="purchasedDate" id="purchasedDate" placeholder="Enter purchasedDate">
    </div>

    <div>
        <input type="submit" value="click to add product">
    </div>
</form>