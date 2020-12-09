<!doctype html>
<html lang="en">
<head>
    <title>Danh sách đại lý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<style>
    body {
        background-color: lightcyan;
    }
    .table {
        background-color: white;
        border-radius: 5px;
    }
</style>
<body>
<table align="center" class="table" style="width: 1000px">
    <tr>
        <td><a href="{{route('agency.create')}}" class="btn btn-success">+ Thêm mới</a></td>


        <td style="text-align: right">

            <form action="{{route('agency.search')}}" method="get">
                @csrf
                <input id="search" name="search" type="text" placeholder="Nhập nội dung tìm kiếm">
                <button type="submit" class="btn btn-info">Tìm kiếm</button>
            </form>
        </td>
    </tr>
</table>
<h1 align="center">Danh sách đại lý phân phối</h1>
<hr>
{{--<div class="card-header">--}}
{{--    <h3 style="color: red;text-align: center"><?php--}}
{{--        $message = Session::get('message');--}}
{{--        if ($message) {--}}
{{--            echo '<span class="text-alert">' . $message . '</span>';--}}
{{--            Session::put('message', null);--}}
{{--        }--}}
{{--        ?></h3>--}}
{{--</div>--}}
<table id="td" align="center" class="table" style="width: 1400px">
    <thead class="thead-dark">
    <tr style="text-align: center">
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Mã số đại lý</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Tên đại lý</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Điện thoại</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Email</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Địa chỉ</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Tên người quản lý</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Trạng thái</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @forelse($agencies as $key => $agency)
        <tr id="tr{{$agency->id}}">
            <td style="text-align: center; border: 1px solid black;">{{$agency->id}}</td>
            <td style="border: 1px solid black">{{$agency->name_agencies}}</td>
            <td style="border: 1px solid black">0{{$agency->phone}}</td>
            <td style="border: 1px solid black">{{$agency->email}}</td>
            <td style="border: 1px solid black">{{$agency->address}}</td>
            <td style="border: 1px solid black">{{$agency->name_manager}}</td>
            <td style="border: 1px solid black">{{$agency->status}}</td>
            <td style="text-align: center;border: 1px solid black">
                <a class="btn btn-warning" href="{{route('agency.edit',$agency->id)}}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                </a>
                <a class="btn btn-danger" onclick="return confirm('Bạn chắc chứ?')" href="{{route('agency.delete',$agency->id)}}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                </a>

            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7">No Data</td>
        </tr>
    @endforelse
    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

