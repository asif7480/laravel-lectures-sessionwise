<form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>


<img src="{{ asset('storage/'. $path) }}" alt="uploaded Image">
