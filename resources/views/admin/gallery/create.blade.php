<h1>Upload Image</h1>
<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <label for="url">Image:</label>
        <input type="file" name="url" id="url" required>
    </div>
    <div>
        <label for="status">Status:</label>
        <input type="checkbox" name="status" id="status" value="1">
    </div>
    <button type="submit">Upload</button>
</form>