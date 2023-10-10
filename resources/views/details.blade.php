<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="search">
            <div class="logo">
                <a href="index.html"><img src="{{asset('/sp/logo_FRT_text_trang_5f1035d2a3.jpg')}}" alt=""></a>
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
        <div class="container text-center">
            <div class="row">
              <div class="col"><p>Trang Chủ</p></div>
              <div class="col"><p>Tin Tức</p></div>
              <div class="col"><p>Điện Thoại</p></div>
              <div class="col"><p>Apple</p></div>
              <div class="col"><p>Máy Tính</p></div>
              <div class="col"><p>Máy Tinh Bảng</p></div>
              <div class="col"><p>Khuyến Mãi</p></div>
            </div>
        </div>

        <div class="page">
            <p>Trang Chủ / Điện Thoại / Apple(iPhone)</p>
        </div>

        <div class="titleproduct">
                <h1><b>{{$details->name}}</b></h1>
                <p>5* 1000 Đánh Giá | 1500 Hỏi & Đáp | + So Sánh</p>
        </div>
        <div class="detail">
            <div class="img">
                <img src="{{ asset('/sp/'.$details->image) }}" alt="Product Image" id="product-image">
                <p>Xem thêm</p>
                <p>Video review</p>
                <p>Xem Feedback</p>
                <div class="parameter"  >
                    <h5>Thông số của điện thoại: {{$details->name}}</h5>
                    <ul>
                        <li>Color is:</li>
                        <li>Size is:</li>
                        <li>Gb is:</li>
                        <li>Ram is:</li>
                    </ul>
                    <ul>
                        <li id="details-1">{{$attributes['black']['color']}}</li>
                        <li id="details-2">{{$attributes['black']['size']}}</li>
                        <li id="details-3">{{$attributes['black']['gb']}}</li>
                        <li id="details-4">{{$attributes['black']['ram']}}</li>
                    </ul>
                    <h3>* Kiểm tra thông số máy</h5>
                    <h3>* Xem thêm</h5>
                    <h3>* Dùng thử</h5>
                </div>
                <div class="ship">
                    <div class="delivery">
                        <img src="{{asset('/sp/shipper-la-gi.jpg')}}" alt="">
                        <p>Giao hàng toàn quốc</p>
                    </div>
                    <div class="achievements">
                        <img src="{{asset('/sp/logo_FRT_text_trang_5f1035d2a3.jpg')}}" alt="">
                        <p>Thương hiệu toàn quốc</p>
                    </div>
                </div>
            </div>
            <div class="detailproduct">
                <div class="price">
                <h1>{{number_format($details->discount_price)}}$</h1>
                <del>{{number_format($details->original_price)}}$   </del>
                <p>Giảm ngay{{$details->sale}}qua Kredivo</p>
                </div>
                <div class="color">
                    <div class="row">
                        <div class="col">
                            <button id="change-image"><img src="{{ asset('/sp/'.$attributes['red']['image_color'])}}" alt=""></button>

                        </div>
                        <div class="col">
                            <button id="change-image1"><img src="{{ asset('/sp/'.$attributes['black']['image_color'])}}" alt=""></button>

                        </div>
                        <div class="col">
                            <button id="change-image2"><img src="{{ asset('/sp/'.$attributes['green']['image_color'])}}" alt=""></button>

                        </div>
                <script>
                    $(document).ready(function() {
                        // Lắng nghe sự kiện click nút "Thay đổi ảnh"
                        $("#change-image").click(function(){
                            // Đổi đường dẫn ảnh

                             $("#product-image").attr("src", "{{ asset('/sp/'.$attributes['red']['image_color'])}}");
                             $("#details-1").text("{{$attributes['red']['color']}}")
                             $("#details-2").text("{{$attributes['red']['size']}}")
                             $("#details-3").text("{{$attributes['red']['gb']}}")
                             $("#details-4").text("{{$attributes['red']['ram']}}")
                        });
                        $("#change-image1").click(function(){
                            // Đổi đường dẫn ảnh

                            $("#product-image").attr("src", "{{ asset('/sp/'.$attributes['black']['image_color'])}}");
                            $("#details-1").text("{{$attributes['black']['color']}}")
                             $("#details-2").text("{{$attributes['black']['size']}}")
                             $("#details-3").text("{{$attributes['black']['gb']}}")
                             $("#details-4").text("{{$attributes['black']['ram']}}")
                        });
                        $("#change-image2").click(function(){
                            // Đổi đường dẫn ảnh

                            $("#product-image").attr("src", "{{ asset('/sp/'.$attributes['green']['image_color'])}}");
                            $("#details-1").text("{{$attributes['green']['color']}}")
                             $("#details-2").text("{{$attributes['green']['size']}}")
                             $("#details-3").text("{{$attributes['green']['gb']}}")
                             $("#details-4").text("{{$attributes['green']['ram']}}")

                        });
                    });
                </script>


                    </div>
                </div>
                <div class="promotion">
                    <p>Chọn 1 trong 2 khuyến mãi sau</p>
                    <p>Giảm ngay {{$details->sale}} áp dụng đến 12/12</p>
                    <p>Trả góp 0%</p>
                    <p>Ưu đái thêm</p>
                    <p>Giảm ngay {{$details->sale}} hệ sinh thái apple xem chi tiết</p>
                    <p>Thu cũ đổi mới trợ giá ngay đến 2 triệu (SmartExchange)</p>
                    <p>Xem chi tiết</p>
                </div>
                <div class="buy">

                        <div class="row">
                          <div class="col-sm-10"><button class="buy-now">Mua ngay <br> Giao hàng miễn phí nhận hàng tại shop</button></div>

                        </div>
                        <div class="row">

                          <div class="col-sm"><button class="installment">Trả góp 0% <br> Duyệt nhanh qua điện thoại</button></div>
                          <div class="col-sm"><button class="atm">Trả góp qua thẻ <br> BIDV,VPBank,Techcombank</button></div>
                        </div>

                </div>
                <div class="holine">
                    <p>Gọi 0395792950 để được tư vấn mua hàng (Miễn phí)</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>@2021 Nguyễn Như Hoàng-PH34867-WE18327</p>
        </div>
</body>
</html>
