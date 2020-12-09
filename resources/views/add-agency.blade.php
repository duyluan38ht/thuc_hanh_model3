<!doctype html>
<html lang="en">
<head>
    <title>Thêm mới</title>
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
<form style="margin-top: 50px" action="{{route('agency.store')}}" method="post">
    @csrf
    <table align="center" class="table" style="width: 700px; border: 1px solid black">
        <thead class="thead-dark">
        <tr>
            <th style="border-radius: 5px" colspan="2"><h1>Thêm mới đại lý phân phối</h1></th>
        </tr>
        <tr>
{{--            <td>--}}
{{--                <label>Mã số đại lý</label><br>--}}
{{--                <input type="number" name="id" required>--}}
{{--            </td>--}}
            <td rowspan="2">
                <label>Địa chỉ</label><br>
                <input type="text" name="address" class="form-control @error('address') border-danger @enderror()" style="height: 120px">
                <div class="error-message">
                    @if ($errors->any())
                        <p style="color:red">{{ $errors->first('address') }}</p>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label>Tên đại lý</label><br>
                <input type="text" class="form-control @error('name_agencies') border-danger @enderror()" name="name_agencies">
                <div class="error-message">
                    @if ($errors->any())
                        <p style="color:red">{{ $errors->first('name_agencies') }}</p>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label>Điện Thoại</label><br>
                <input type="number" class="form-control @error('phone') border-danger @enderror()"  name="phone">
                <div class="error-message">
                    @if ($errors->any())
                        <p style="color:red">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
            </td>
            <td>
                <label>Tên người quản lý</label><br>
                <input type="text" class="form-control @error('name_manager') border-danger @enderror()" name="name_manager">
                <div class="error-message">
                    @if ($errors->any())
                        <p style="color:red">{{ $errors->first('name_manager') }}</p>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label><br>
                <input type="text" class="form-control @error('email') border-danger @enderror()" name="email">
                <div class="error-message">
                    @if ($errors->any())
                        <p style="color:red">{{ $errors->first('email') }}</p>
                    @endif
                </div>
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
                <button type="submit" class="btn btn-info">Thêm</button>
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
