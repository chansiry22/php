<?php 
    include("../Link-Header/Link.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/CSS/Admin-Dashboard.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image_text">
                <span class="image">
                    <img src="/Public/IMG/logogold.jpg" alt="">
                </span>
                <div class="text header_text">
                    <span class="name">Kloem Chan</span>
                    <span class="profession">Web Developer</span>
                </div>
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        </header>
        <div class="menu_bar">
            <div class="menu">
                <li class="search_box">
                    <i class="bx bx-search icon"></i>
                    <input class="search_input" type="search" name="" id="" placeholder="Search...">
                </li>
                <ul class="menu_links">
                    <li class="nav_link">
                        <a href="../Admin-Dashboard/Item-Master.php">
                            <i class="bx bx-store icon"></i>
                            <span class="text nav-text item_master">Item Masters</span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a href="../Admin-Dashboard/Receive_Items.php">
                            <i class="bx bx-package icon"></i>
                            <span class="text nav-text receive_item">Receive Items</span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a href="">
                            <i class="bx bx-package icon"></i>
                            <span class="text nav-text transfer_item">Transfer Items</span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a href="">
                            <i class="bx bx-barcode icon"></i>
                            <span class="text nav-text convert_serial">Convert To Serial</span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a href="">
                            <i class="bx bx-barcode icon"></i>
                            <span class="text nav-text assign_serial">Assign Serial</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom_content">
                <li class="">
                    <a href="">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text logout">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon_sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode_text text">Dark Mode</span>
                    <div class="toggle_switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <div class="switch_language">
        <span class="language"></span>
        <select class="select_language" onclick="Language()">
            <option value="ENGLISH">English</option>
            <option value="KHMER">Khmer</option>
        </select>
    </div>
    <script src="/Public/JS/Admin-Dashboard.js"></script>
</body>
</html>