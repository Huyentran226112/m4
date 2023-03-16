<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container-fluid px-4"><br>
    <a class="btn btn-primary" href="{{route('category.create')}}"><i class="bi bi-plus-circle">thêm</i></a>
    <table class="table" style="text-align:center">
    <thead>
        <tr>
            <th scope="col">Số thứ tự</th>
            <th scope="col">Tên</th>
            <th scope="col">Công cụ</th>
        </tr>
    </thead>
    <tbody >
    @foreach ($Categories as $key => $category)
        <tr>
            <td> {{ ++ $key}}</td>
            <td> {{$category->name}}</td>
            <td>
                    <td>
                <form action="{{route('category.destroy',$category->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa này không?');" class="btn btn-danger">xóa
                        <i class="bi bi-trash3"></i>
                    </button>
                </form>
                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">sửa<i
                        class="bi bi-pencil-square"></i></a>
            </td>
                </tr>
               @endforeach
            </tbody>
        </table>