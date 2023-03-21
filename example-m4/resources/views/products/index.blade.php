
    <main class="page-content">
        <h1>Danh sách sản phẩm</h1>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tên</th>
                        {{-- <th adta-breakpoints="xs">Quản lí</th> --}}
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach ($products as $key => $team)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $team->name }}</td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-6">
                <div class="pagination float-right">
                </div>
            </div>
    </main>
