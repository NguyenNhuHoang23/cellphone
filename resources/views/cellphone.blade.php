<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/cellphone.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
        <div class="search">
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
        <div class="bg">
            <div class="baner">
                <img src="baner/0.webp" alt="">
            </div>
            <div class="contenr">
                <div class="auto">
                    <a href="tt.html"><img src="baner/1.webp" alt="" id="image"></a>
                    <p>Galaxy Z Flip4 <br>
                        Phụ: 1.9 inch, Chính: 6.7 inch, Dynamic AMOLED 2X, FHD+, 1080 x 2636 Pixels
                    </p>
                    <h3>4.900.000đ</h3>
                </div>

                    <div class="khac">
                        <img src="baner/2.webp" alt="">
                        <img src="baner/3.webp" alt="">
                        <img src="baner/4.webp" alt="">
                        <h4>Tin Khuyến Mại</h4>
                    </div>
            </div>
        </div>
        <div class="inphone">
            <div class="container text-center">
                <div class="text">
                    <h1>KHUYẾN MÃI HOT</h1>
                </div>

                <div class="row">
                        @foreach ($specialOffer as $value)
                        <div class="col">

                            <img src="{{asset('/sp/'.$value->image)}}" alt="">
                                <h1><a href="/productdetails/{{$value -> id}}">{{ $value->name }}</a></h1>
                                <del>{{$value->original_price}}đ</del>
                                <h5>{{$value-> discount_price}}đ</h5>
                                <p>Giảm ngay {{$value -> sale}} qua Kredivo</p>
                                <input type="hidden" name="product_id" value="{{ $value->id }}">
                                <input type="number" name="quantity" value="1">

                                <input type="button" value="Mua ngay"><a href="/cartCellphone/{{$value -> id}}"><input type="button" value="Giỏ hàng"></a>
                            </div>

                        @endforeach
                    </div>
                </div>

            </div>

                    <div class="bannerdt">
                        <img src="baner/1.jpg" alt="">
                    </div>

            </div>
            <div class="iphone">
            <div class="container text-center">
                <div class="text2">
                    <h1>ĐIỆN THOẠI NỔI BẬT</h1>
                </div>

                <div class="row">

                     @foreach ($typeiphone as $value)
                    <div class="col">
                    <img src="{{asset('/sp/'.$value->image)}}" alt="">
                    <h1><a href="/productdetails/{{$value -> id}}">{{ $value->name }}</a></h1>
                    <del>{{number_format($value->original_price)}}đ</del>
                    <h5>{{number_format($value-> discount_price)}}đ</h5>
                    <p>Giảm ngay {{$value -> sale}} qua Kredivo</p>
                    <input type="hidden" name="product_id" value="{{ $value->id }}">
                    <input type="number" name="quantity" value="1">

                    <input type="button" value="Mua ngay"><a href="/cartCellphone/{{$value -> id}}"><input type="button" value="Giỏ hàng"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

                <div class="banner_pc">
                    <img src="baner/2.jpg" alt="">
                </div>

            <div class="laptop">
                <div class="container text-center">
                <div class="text2">
                    <h1>LAPTOP BÁN CHẠY</h1>
                </div>
                <div class="row">
                @foreach ($typelaptop as $value)
                <div class="col">
                            <img src="{{asset('/sp/'.$value->image)}}" alt="">

                            <h1><a href="/productdetails/{{$value -> id}}">{{ $value->name }}</a></h1>
                                <del>{{$value->original_price}}đ</del>
                                <h5>{{$value-> discount_price}}đ</h5>
                                <p>Giảm ngay {{$value -> sale}} qua Kredivo</p>
                                <input type="hidden" name="product_id" value="{{ $value->id }}">
                                <input type="number" name="quantity" value="1">

                                <input type="button" value="Mua ngay"><a href="/cartCellphone/{{$value -> id}}"><input type="button" value="Giỏ hàng"></a>
                            </div>
                @endforeach
                </div>
            </div>
        </div>

                    <div class="banneripad">
                        <img src="baner/3.png" alt="">
                    </div>

                <div class="cellipad">
                    <div class="container text-center">
                    <div class="text2">
                        <h1>IPAD HOT NHẤT</h1>
                    </div>
                    <div class="row">
                    @foreach ($typeipad as $value)
                    <div class="col">
                            <img src="{{asset('/sp/'.$value->image)}}" alt="">
                            <h1><a href="/productdetails/{{$value -> id}}">{{ $value->name }}</a></h1>
                                <del>{{$value->original_price}}đ</del>
                                <h5>{{$value-> discount_price}}đ</h5>
                                <p>Giảm ngay {{$value -> sale}} qua Kredivo</p>
                                <input type="hidden" name="product_id" value="{{ $value->id }}">
                                <input type="number" name="quantity" value="1">

                                <input type="button" value="Mua ngay"><a href="/cartCellphone/{{$showCart -> id}}"><input type="button" value="Giỏ hàng"></a>
                            </div>
                    @endforeach
                </div>
                </div>
                </div>
                <div class="advertisement">
            <div class="container text-center">
                <div class="row">
                    <div class="col"><img src="baner/7.webp" alt=""></div>
                    <div class="col"><img src="baner/8.webp" alt=""></div>
                    <div class="col"><img src="baner/9.webp" alt=""></div>
            </div>
        </div>
            <div class="fooder">

                    <p>@2021 Nguyễn Như Hoàng-PH34867-WE18327</p>

            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
<script src="main.js"></script>

</html>
