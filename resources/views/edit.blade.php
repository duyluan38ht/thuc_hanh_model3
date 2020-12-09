<!doctype html>
<html lang="en">
<head>
    <title>Sửa thông tin</title>
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
    table {
        background-color: white;
    }
</style>
<body>
<form style="margin-top: 50px" action="{{route('agency.update',$agency->id)}}" method="post">
    @csrf
    <table align="center" class="table" style="width: 700px; border: 1px solid black">
        <thead class="thead-dark">
        <tr>
            <th style="border-radius: 5px" colspan="2"><h1>Chỉnh sửa đại lý phân phối</h1></th>
        </tr>
        <tr>

            <td rowspan="2">
                <label>Địa chỉ</label><br>
                <input type="text" name="address" value="{{$agency->address}}" style="height: 120px" >
            </td>
        </tr>
        <tr>
            <td>
                <label>Tên đại lý</label><br>
                <input type="text" value="{{$agency->name_agencies}}" name="name_agency" >
            </td>
        </tr>
        <tr>
            <td>
                <label>Điện Thoại</label><br>
                <input type="number" name="phone" value="{{$agency->phone}}" >
            </td>
            <td>
                <label>Tên người quản lý</label><br>
                <input type="text" name="name_manager" value="{{$agency->name_manager}}" >
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label><br>
                <input type="email" name="email" value="{{$agency->email}}" >
            </td>
            <td>
                <label>Trạng thái</label><br>
                <select name="status">
                    <option value="Hoạt động">Hoạt động</option>
                    <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="text-align: right" colspan="2">
                <a href="{{route('agency.index')}}" class="btn btn-danger">cancel</a>
                <button type="submit" class="btn btn-info">Cập nhật</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
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
