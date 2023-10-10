<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="cart">
    <div class="logo">
        <a href="index.html"><img src="sp/logo_FRT_text_trang_5f1035d2a3.jpg" alt=""></a>
    </div>
    <form action="">
        <input type="text" placeholder="Nhập tên điện thoại, Máy tính....">
        <button type="submit">Tìm Kiếm</button>
    </form>

    <div class="ll">
        <ul>
            <li><a href="#">Thông tin hay</a></li>
            <li><a href="#">Thanh toán $ tiện ích</a></li>
            <li><a href="#">Tài khoản của tôi</a></li>
            <li><a href="#">Giỏ Hàng</a></li>
        </ul>
    </div>
</div>
<div class="function">
    <ul>
        <li><a href="index.html">Trang Chủ</a></li>
        <li><a href="ttt.html">Tin Tức</a></li>
        <li><a href="sp.html">Điện Thoại</a></li>
        <li><a href="#">Apple</a></li>
        <li><a href="#">Máy Tính</a></li>
        <li><a href="#">Máy Tinh Bảng</a></li>
        <li><a href="#">Khuyến Mãi</a></li>

    </ul>
</div>
<form action="{{ url('/cartCellphone') }}" method="POST" name = "pay">
    @csrf
<div class="details">
    <div class="text">
    <p>Danh sách sản phẩm</p>
    </div>

    @foreach($cartItems as $item)
    <div class="checkbox"><input type="checkbox" value="" name="checkbox" id=""></div>
    <div class="image"><img src="{{asset('/sp/'.$item->image)}}" alt=""></div>
    <div class="name"><h1>{{$item->name}}</h1></div>
    <div class="price"><p>{{$item->price}}</p></div>
    <div class="quantity"><input type="number" name="quantity" id="" value=">1"></div>
    <div class="delete"><img src="{{asset('sp/delete.png')}}" alt="" name="delete" type="button"></div>
    <div class="save"><img src="{{asset('sp/save.jpg')}}" alt="" name="save" type="button"></div>
@endforeach


<div class="buy-more">
    <div class="pay">
        <div class="home"><button>Đi tới trang chủ</button></div>
        <div class="product"><button>Chọn thêm sản phẩm</button></div>
    </div>
</div>
<div class="totalMoney">
    <div class="total">
        <h1>Tổng tiền: </h1>
        <p>10.000.000 đ</p>
    </div>
</div>
<div class="user">
    <div class="title">
        <p>Thông tin khách hàng</p>
    </div>
    <div class="client">

            <p>Tên khách hàng</p>
            <input type="text" name="user-name" placeholder="user-name">
            <p>Telephone</p>
            <input type="text" name="telephone" placeholder="telephone">
            <p>Address</p>
            <input type="text" name="address" placeholder="address">
            <p>Email</p>
            <input type="text" name="email" placeholder="Nhập Email"><br>

            <button value="cance" type="button">Hủy</button><button value="complete" type="submit">Thanh toán</button>



    </div>
</div>
</form>
<div class="fooder">

    <p>@2021 Nguyễn Như Hoàng-PH34867-WE18327</p>

</div>




</div>
</body>
</html>
