<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdminCss/adminNavCss.css">
</head>

<body>

    <div class="navigation-bar">
        <div id="menu" onclick="onClickMenu()">
            <div class="bar" id="bar1"></div>
            <div class="bar" id="bar2"></div>
            <div class="bar" id="bar3"></div>
        </div>
        <div class="navigation-bar-left-side">
            <div class="user-name">
                <p style="color: white;">Hello,Admin</p>
            </div>
            <div class="expand-icon">
            <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </div>
    <script src="AdminJs/adminNavBar.js"></script>
</body>

</html>