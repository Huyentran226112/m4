<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<main id="main">
    <h1>Chỉnh sửa </h1>
    <form  action="{{route('book.update',[$danhsach->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" name="name" value='{{$danhsach->name}}' class="form-control">
        
        </div>
        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" name="isbn" value='{{$danhsach->isbn}}' class="form-control">
        
        </div>
        <div class="mb-3">
            <label class="form-label">TÁC GIẢ </label>
            <input type="text" name="author" value='{{$danhsach->author}}' class="form-control">
        
        </div>
        <div class="mb-3">
            <label class="form-label">THỂ LOẠI </label>
            <select name="category_id" id="" class="form-control">
                @foreach ($Categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
         </div>
        <div class="mb-3">
            <label class="form-label">SỐ TRANG </label>
            <input type="text" name="pages" value='{{$danhsach->pages}}' class="form-control">
        
        </div>
        <div class="mb-3">
            <label class="form-label">NĂM XUẤT BẢN</label>
            <input type="text" name="publication_year" value='{{$danhsach->publication_year}}' class="form-control">
        
        </div>
        <input type="submit" value="Cập nhật" class="btn btn-primary">
        <a href="{{route('book.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>