<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>booktrack</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!---------stylesheet----->
    <link rel="stylesheet" href="{{ asset('/main.css') }}">

    {{-- <script src="script.js" defer></script> --}}
</head>

<body>
    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="bot.jpg" alt="logo_img" />
            </span>
            <span class="logo_name">BookTracker</span>
        </div>

        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <li class="item">
                        <a href="" class="link flex">
                            <i class="bx bx-home-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Book</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="indexbook" class="link flex">
                            <i class="bx bxs-magic-wand"></i>
                            <span>All Book</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="book" class="link flex">
                            <i class="bx bx-folder"></i>
                            <span>New Book Added</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Reader</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="indexreader" class="link flex">
                            <i class="bx bx-flag"></i>
                            <span>All Readers</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="reader" class="link flex">
                            <i class="bx bx-award"></i>
                            <span>New Reader Add</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">TakeOut</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="indextake" class="link flex">
                            <i class="bx bx-flag"></i>
                            <span>All TakeOut</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="takeout" class="link flex">
                            <i class="bx bx-award"></i>
                            <span>New Takeout Add</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar_profile flex">
                <span class="nav_image">
                    <img src="esa.jpg" alt="logo_img" />
                </span>
                <div class="data_text">
                    <span class="name">E-Sandhai</span>
                    <span class="email">esandhai@gmail.com</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar flex">
         <ul class="header_list">
            <li><a href="">Home</a></li>
            <li><a href="">Catogray</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admin</a></li>
            <li><a href="">About</a></li>
         </ul>
    </nav>
</body>

</html>




