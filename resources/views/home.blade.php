<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <style>
        .ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="home.blade.php">Trang chu</a></li>
        <li><a href="intro.blade.php">Gioi thieu</a></li>
        <div class="dropdown">
            <li><a href="product.blade.php">San pham</a>
                <ul>
                    <div class="dropdown-content">
                        <li><a href="table.blade.php">Ban</a></li>
                        <li><a href="chair.blade.php">Ghe</a></li>
                    </div>
                </ul>
        </div>
        </li>
        <li><a href="about.blade.php">Lien he</a></li>
    </ul>
</body>

</html>