<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="header">
        <div class="insert">
        <h1>FROM CREATE NEW</h1>
        <form action="{{ url('/insert') }}" method="POST" name = "insert">

        @csrf
            <p>Product ID</p>
            <input type="text" name = "product_id">
            <p>Image</p>
            <input type="file" name = "image">
            <p>Name</p>
            <input type="text" name = "name" placeholder="name">
            <p>Original_price</p>
            <input type="text" name = "original_price" placeholder="original_price">
            <p>Discount_price</p>
            <input type="text" name = "discount_price" placeholder="discount_price">
            <p>Sticky</p>
            <input type="checkbox" name="sticky" id="" value="0">0
            <input type="checkbox" name="sticky" id="" value="1">1
            <p>Type</p>
            <input type="text" name = "type_name" placeholder="type">
            <p>sale</p>
            <input type="text" name = "sale" placeholder="Sale">
            <p>special_offer</p>
            <input type="checkbox" name="special_offer" id="" value="0">0
            <input type="checkbox" name="special_offer" id="" value="1">1
    </div>



    <div class="case1">
        <h1>Case 1</h1>
            <p>Color</p>
            <select name="color">
                <option value="">Chọn tủy chọn</option>
                <option value="red">Red</option>
                <option value="black">Black</option>
                <option value="green">Grenn</option>
            </select>
            <p>Size</p>
            <select name="size">
                <option value="">Chọn tủy chọn</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
            </select>
            <p>Image_color</p>
            <input type="file" name = "image_color">
            <p>GB</p>
            <select name="gb">
                <option value="">Chọn tủy chọn</option>
                <option value="128GB">128GB</option>
                <option value="245GB">245GB</option>
                <option value="528GB">528GB</option>
                <option value="824GB">824GB</option>
                <option value="1000GB">1000GB</option>
            </select>
            <p>Ram</p>
            <select name="ram">
                <option value="">Chọn tủy chọn</option>
                <option value="8GB">8GB</option>
                <option value="16GB">16GB</option>
                <option value="24GB">24GB</option>
            </select>
    </div>




    <div class="case2">
        <h1>Case 2</h1>
            <p>Color</p>
            <select name="color1">
                <option value="">Chọn tủy chọn</option>
                <option value="red">Red</option>
                <option value="black">Black</option>
                <option value="green">Grenn</option>
            </select>
            <p>Size</p>
            <select name="size1">
                <option value="">Chọn tủy chọn</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
              </select>
            <p>Image_color</p>
            <input type="file" name = "image_color1">
            <p>GB</p>
            <select name="gb1">
                <option value="">Chọn tủy chọn</option>
                <option value="128GB">128GB</option>
                <option value="245GB">245GB</option>
                <option value="528GB">528GB</option>
                <option value="824GB">824GB</option>
                <option value="1000GB">1000GB</option>
            </select>
            <p>Ram</p>
            <select name="ram1">
                <option value="">Chọn tủy chọn</option>
                <option value="8GB">8GB</option>
                <option value="16GB">16GB</option>
                <option value="24GB">24GB</option>
            </select>
    </div>





    <div class="case3">
        <h1>Case 3</h1>
            <p>Color</p>
            <select name="color2">
                <option value="">Chọn tủy chọn</option>
                <option value="red">Red</option>
                <option value="black">Black</option>
                <option value="green">Grenn</option>
            </select>
            <p>Size</p>
            <select name="size2">
                <option value="">Chọn tủy chọn</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
              </select>
            <p>Image_color</p>
            <input type="file" name = "image_color2">
            <p>GB</p>
            <select name="gb2">
                <option value="">Chọn tủy chọn</option>
                <option value="128GB">128GB</option>
                <option value="245GB">245GB</option>
                <option value="528GB">528GB</option>
                <option value="824GB">824GB</option>
                <option value="1000GB">1000GB</option>
            </select>
            <p>Ram</p>
            <select name="ram2">
                <option value="">Chọn tủy chọn</option>
                <option value="8GB">8GB</option>
                <option value="16GB">16GB</option>
                <option value="24GB">24GB</option>
            </select>




            <input type="submit" value = "Insert Student">
        </form>
    </div>
    </div>
</body>
</html>
