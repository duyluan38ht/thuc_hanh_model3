<!doctype html>
<html lang="en">
<head>
    <title>Kết quả tìm kiếm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<h1 align="center">Kết quả tìm kiếm</h1>
<a class="btn btn-info" href="{{route('agency.index')}}">Trở về</a>
<hr>
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
        <tr>
            <td style="text-align: center; border: 1px solid black;">{{$agency->id}}</td>
            <td style="border: 1px solid black">{{$agency->name_agencies}}</td>
            <td style="border: 1px solid black">{{$agency->phone}}</td>
            <td style="border: 1px solid black">{{$agency->email}}</td>
            <td style="border: 1px solid black">{{$agency->address}}</td>
            <td style="border: 1px solid black">{{$agency->name_manager}}</td>
            <td style="border: 1px solid black">{{$agency->status}}</td>
            <td style="text-align: center;border: 1px solid black">
                <a class="btn btn-warning" href="{{route('agency.edit', $agency->id)}}">Edit</a>
                <a class="btn btn-danger" onclick="return confirm('Are your sure?')"
                   href="{{route('agency.delete', $agency->id)}}">Delete</a>
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
