<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Google Fonts -->
    <style>
        body {
            margin-top: 20px;
            background: #FFF5EE;
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .avatar.sm {
            width: 2.25rem;
            height: 2.25rem;
            font-size: .818125rem;
        }

        .table-nowrap .table td,
        .table-nowrap .table th {
            white-space: nowrap;
        }

        .table>:not(caption)>*>* {
            padding: 0.75rem 1.25rem;
            border-bottom-width: 1px;
        }

        table th {
            font-weight: 600;
            background-color: #eeecfd !important;
        }

        .fa-arrow-up {
            color: #00CED1;
        }

        .fa-arrow-down {
            color: #FF00FF;
        }
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-5">
                <div class="position-relative card table-nowrap table-card">
                    <div class="card-header align-items-center">
                        <h5 class="mb-0">QUẢN LÝ CHI TIÊU</h5>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm chi tiêu</button>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Hiển thị thông báo thành công -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="small text-uppercase bg-body text-muted">
                                <tr>
                                    <th>ID</th>
                                    <th>Ngày</th>
                                    <th>Danh mục</th>
                                    <th>Số tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $value)
                                <tr class="align-middle">
                                    <td>
                                        {{ $value->id }}
                                    </td>
                                    <td>{{ $value->Date }}</td>
                                    <td>{{ $value->Title }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>
                                                @if($value->Money > 0)
                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                @else
                                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                                @endif
                                            </span>
                                            <span>{{ $value->Money }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"><i class="fa fa-pen"></i></a> |
                                        <form action="{{ route('qlct.destroy', $value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-total-money">Tổng tiền</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="{{ route('qlct.store') }}" method="post">
            @csrf()
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm chi tiêu</h5>
                            <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Danh mục
                            <input type="text" class="form-control" placeholder="Chọn danh mục" name="Title" aria-label="Username" aria-describedby="basic-addon1">

                        </div>

                        <div class="modal-body">Ngày
                        <input type="text" class="form-control" placeholder="" aria-label="Username" name="Date" aria-describedby="basic-addon1">
                        </div>
                        <div class="modal-body">Số tiền
                        <input type="text" class="form-control" placeholder="" aria-label="Username" name="Money" aria-describedby="basic-addon1">
                        </div>
                        <div class="modal-body">Ghi chú
                        <input type="text" class="form-control" placeholder="Ghi chú" aria-label="Username" name="Note" aria-describedby="basic-addon1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>Lưu</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--End Modal-->

        <!-- Modal -->
        <div class="modal fade" id="modal-total-money" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tổng tiền</h5>
                            <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ $totalMoney }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>Lưu</button>
                        </div>
                    </div>
                </div>
        </div>
        <!--End Modal-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn hành vi mặc định của form
        this.submit(); // Gửi form

        // Đóng modal
        var modal = document.getElementById('exampleModal');
        var modalInstance = mdb.Modal.getInstance(modal);
        modalInstance.hide();
    });
</script>
</html>
