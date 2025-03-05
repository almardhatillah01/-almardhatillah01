<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almardhatillah Design</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            color: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color: white;
            padding: 15px 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #555;
            padding: 10px 20px;
            margin: 0 5px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }
        .navbar a:hover {
            color: #ff6b81;
        }
        .info {
            margin: 30px auto;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            background: white;
            display: inline-block;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .products {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 150px;
        }
        .quantity {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .quantity button {
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            background: #ff6b81;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }
        .quantity button:hover {
            background: #e63950;
        }
        .price {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">ALMARDHATILLAH DESIGN</div>
    <div class="navbar">
        <a href="#home">HOME</a>
        <a href="#product">PRODUCT</a>
        <a href="#contact">CONTACT</a>
        <a href="#company-profile">COMPANY PROFILE</a>
        <a href="#login">LOG IN</a>
    </div>
    <div class="info">INFO TERKINI</div>
    <div class="products">
        <div class="product">
            <div>BAJU</div>
            <div class="quantity">
                <button>-</button>
                <span>0</span>
                <button>+</button>
            </div>
            <div class="price">RM30</div>
        </div>
        <div class="product">
            <div>BAJU</div>
            <div class="quantity">
                <button>-</button>
                <span>0</span>
                <button>+</button>
            </div>
            <div class="price">RM30</div>
        </div>
        <div class="product">
            <div>BAJU</div>
            <div class="quantity">
                <button>-</button>
                <span>0</span>
                <button>+</button>
            </div>
            <div class="price">RM30</div>
        </div>
        <div class="product">
            <div>BAJU</div>
            <div class="quantity">
                <button>-</button>
                <span>0</span>
                <button>+</button>
            </div>
            <div class="price">RM30</div>
        </div>
    </div>
</body>
</html>