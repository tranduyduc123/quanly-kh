<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer and Order Management</title>

</head>
<body>
    <h1>Quản lý khách hàng và đơn hàng</h1>

    <div class="form-container">
        <h2>Thêm khách hàng</h2>
        <form action="{{route('AddCustomer.store')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Tên khách hàng" required>
            <input type="email" name="email" placeholder=" Email" required>
            <input type="text" name="phone" placeholder="Điện thoại">
            <input type="text" name="address" placeholder="Địa chỉ">
            <!-- ngay tao <input type="date" name="created_at">
            ngay cap nhat <input type="date" name="updated_at"> -->
            
            <button type="submit">Thêm khách hàng</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <!-- <th>ngay tao</th>
                <th>ngay cap nhat</th> -->
                <th>Actions </th>
               
            </tr>
        </thead>
        <tbody>
           @foreach ($khachhangs as $khachhang)
           <tr>
                <!-- <td>{{ $khachhang->id }}</td> -->
                <td>{{ $khachhang->name }}</td>
                <td>{{ $khachhang->email }}</td>
                <td>{{ $khachhang->phone }}</td>
                <td>{{ $khachhang->address }}</td>
                <td><a href="{{route('Customer.edit',['id' => $khachhang->id])}}">Edit</a>
                    <a href="{{route('Customer.delete',['id' => $khachhang->id])}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="form-container">
        <h2>Thêm đơn hàng</h2>
        <form action="add.php" method="POST">
            <!-- <select name="customer_id" required>
                <option value="">chọn khách hàng</option>
               
            </select> -->
            <input type="text" name="product" placeholder="Sản Phẩm" required>
            <input type="number" name="quantity" placeholder="Số lượng" required>
            <input type="number" step="0.01" name="price" placeholder="Giá" required>
            <input type="date" name="order_date" required>
            <button type="submit">Thêm đơn hàng</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <!-- <th>Order ID</th> -->
                <th>Tên Khách hàng</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Ngày đặt hang</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .form-container input {
            margin-right: 10px;
        }
    </style>
</body>
</html>
