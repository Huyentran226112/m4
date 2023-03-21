<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<main id="main">
    <h1>Thêm danh mục</h1>
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên :</label>
            <input type="text" id="fname" name="name" class="form-control">
        </div>
        <input type="submit" value="Lưu" class="btn btn-success">
        <a href="{{route('category.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>
