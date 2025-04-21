<h2>Add new product</h2>

<a href="/">All products</a>

<form action="/store" method="POST">
    @csrf

    <div>
        <input type="text" name="productName" id="productName" placeholder="Enter productName">
    </div>

    <div>
        <input type="text" name="price" id="price" placeholder="Enter price">
    </div>

    <div>
        <input type="number" name="quantity" id="quantity" placeholder="Enter quantity">
    </div>

    <div>
        <select name="quality" id="quality">
            <option value="good">Good</option>
            <option value="average">Average</option>
            <option value="bad">Bad</option>
        </select>
    </div>

    <div>
        <input type="submit" value="add product">
    </div>

</form>