<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <h1>Chi tiết sản phẩm điện thoại: {{ $phone->name }}</h1>

        <div>
            <!-- Hiển thị ảnh của sản phẩm -->
            <img id="phoneImage" src="{{ $phone->image_url }}" alt="{{ $phone->name }}">
        </div>

        <div>
            <!-- Danh sách các màu sắc -->
            @foreach ($colors as $color)
                <button class="colorButton" data-color="{{ $color->id }}">{{ $color->name }}</button>
            @endforeach
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            // Sử dụng jQuery để thay đổi ảnh khi chọn màu sắc
            $(document).ready(function () {
                $(".colorButton").click(function () {
                    var colorId = $(this).data("color");
                    var phoneId = {{ $phone->id }};
                    $.ajax({
                        url: '/change-color/' + phoneId + '/' + colorId,
                        method: 'GET',
                        success: function (data) {
                            // Cập nhật đường dẫn ảnh
                            $("#phoneImage").attr("src", data.image_url);
                        },
                        error: function () {
                            alert("Đã xảy ra lỗi khi thay đổi màu sắc.");
                        },
                    });
                });
            });
        </script>
    @endsection
</body>
</html>
