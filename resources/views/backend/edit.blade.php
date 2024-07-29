<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer and Order Management</title>

</head>
<body>
    <h1>Sua thong tin khách hàng và đơn hàng</h1>

    <div class="form-container">
        <h2>Thêm khách hàng</h2>
        <form action="{{route('Customer.update',['id' => $khachhangs->id])}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Tên khách hàng" value="{{$khachhangs->name}}" required>
            <input type="email" name="email" placeholder=" Email" value="{{ $khachhangs->email}}" required>
            <input type="text" name="phone" placeholder="Điện thoại" value="{{$khachhangs->phone}}">
            <input type="text" name="address" placeholder="Địa chỉ" value="{{$khachhangs->address}}">
            <!-- ngay tao <input type="date" name="created_at">
            ngay cap nhat <input type="date" name="updated_at"> -->
            
            <button type="submit">Thêm khách hàng</button>
        </form>
    </div>

    
</body>
</html>
