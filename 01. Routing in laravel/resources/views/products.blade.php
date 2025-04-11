<div>
    <ul>

    </ul>
    @foreach($products as $key=>$product)
        <li>key: {{ $key }} - Value: {{ $product }}</li>
    @endforeach
</div>
