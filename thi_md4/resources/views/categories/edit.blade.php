<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<main id="main">
    <h1>Chỉnh sửa </h1>
    <form  action="{{route('category.update',[$categories->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" name="name" value='{{$categories->name}}' class="form-control">
        
        </div>
        <input type="submit" value="Cập nhật" class="btn btn-primary">
        <a href="{{route('category.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>