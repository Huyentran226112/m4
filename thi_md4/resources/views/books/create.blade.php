<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<main id="main">
    <h1>Thêm danh mục</h1>
    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên :</label>
            <input type="text" id="fname" name="name" class="form-control">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">ISBN :</label>
            <input type="text" id="fname" name="isbn" class="form-control">
            @error('isbn')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">TÁC GIẢ :</label>
            <input type="text" id="fname" name="author" class="form-control">
            @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">THỂ LOẠI :</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($Categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
                @endforeach
            </select>
           
        </div>
           
        <div class="mb-3">
            <label class="form-label">SỐ TRANG :</label>
            <input type="text" id="fname" name="pages" class="form-control">
            @error('pages')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">NĂM XUẤT BẢN:</label>
            <input type="text" id="fname" name="publication_year" class="form-control">
            @error('publication_year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <input type="submit" value="Lưu" class="btn btn-success">
        <a href="{{route('book.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>