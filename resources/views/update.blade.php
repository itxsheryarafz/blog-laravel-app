<html>

<body>
    <h2>Update Albums</h2>
    <form action="{{ route('update-blog-data') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Album Name</label>
            <input type="text" class="form-control" name="name" id="inputEmail4" value="{{$blog['name']}}">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Album Description</label>
            <input type="text" class="form-control" name="description" id="inputPassword4" value="{{$blog['description']}}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
            <input type="hidden" name="userid" value="{{$blog['id']}}">
        </div>
    </form>
</body>

</html>
