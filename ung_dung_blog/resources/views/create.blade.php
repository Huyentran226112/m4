<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<main id="main">
    <h1>Thêm danh mục</h1>
    <form action="{{route('blogs.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên :</label>
            <input type="text" id="fname" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả:</label>
            <input type="text" id="fname" name="description" class="form-control">
        </div>

        <input type="submit" value="Lưu" class="btn btn-success">
        <a href="{{route('blogs.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>
