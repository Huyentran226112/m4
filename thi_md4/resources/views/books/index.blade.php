<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="iq-search-bar">
                            <form action="#" class="searchbox">
                                <input name="key" type="text" class="text search-input" 
                                    placeholder="Vui lòng nhập từ cần tìm..">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                <button type="submit" class="btn btn-default bg-primary">Tìm kiếm</button>
                            </form>
                        </div>
    <div class="container-fluid px-4"><br>
    <a class="btn btn-primary" href="{{route('book.create')}}"><i class="bi bi-plus-circle">THÊM SÁCH</i></a>
    <table class="table" style="text-align:center">
   
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">TÊN SÁCH</th>
            <th scope="col">ISBN</th>
            <th scope="col">TÁC GIẢ</th>
            <th scope="col">THỂ LOẠI</th>
            <th scope="col">SỐ TRANG</th>
            <th scope="col">NĂM XUẤT BẢN</th>
            <th scope="col">HÀNG ĐỘNG </th>
        </tr>
    </thead>
    <tbody >
    @foreach ($danhsachs as $key => $danhsach)
        <tr>
            <td> {{ ++ $key}}</td>
            <td> {{$danhsach->name}}</td>
            <td> {{$danhsach->isbn}}</td>
            <td> {{$danhsach->author}}</td>
            <td> {{ isset($danhsach->category->name) ? $danhsach->category->name : 'Chưa phân loại '  }}</td>
            <td> {{$danhsach->pages}}</td>
            <td> {{$danhsach->publication_year}}</td>
            <td>
                    
                <form action="{{route('book.destroy',$danhsach->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa này không?');" class="btn btn-danger">xóa
                        <i class="bi bi-trash3"></i>
                    </button>
                </form>
                <a class="btn btn-primary" href="{{ route('book.edit',$danhsach->id) }}">sửa<i
                        class="bi bi-pencil-square"></i></a>
            </td>
                </tr>
               @endforeach
            </tbody>
        </table>

        <div class="col-6">
                <div class="pagination float-right">
                    {{ $danhsachs->onEachSide(3)->links() }}
                </div>
            </div>

