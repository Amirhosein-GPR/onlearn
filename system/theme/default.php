<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/<?php $indexTool = IndexTool::getInstance(); echo $indexTool->getUpperCategory() . '/' . $indexTool->getUpperCategory(); ?>.css">
    <link rel="stylesheet" href="/assets/css/<?php echo $indexTool->getRoute() ?>.css">
    <title>Onlearn</title>
</head>
<body>
<div id="main-layout">
    <div id="user-panel-container">
        <div id="user-panel">
            <img src="/assets/svg/main/bell.svg" alt="">
            <div id="user-options-container">
                <img onclick="showUserOptions()" src="/assets/svg/main/user-circle.svg" alt="">
                <div id="user-options">
                    <div class="triangle-up"></div>
                    <div>
                        <img onclick="showUserOptions()" src="/assets/svg/main/university.svg" alt="">
                        <span>کلاس ها</span>
                    </div>
                    <div>
                        <img onclick="showUserOptions()" src="/assets/svg/main/users.svg" alt="">
                        <span>اساتید</span>
                    </div>
                    <div>
                        <img onclick="showUserOptions()" src="/assets/svg/main/user-cog.svg" alt="">
                        <span>حساب</span>
                    </div>
                    <div>
                        <img onclick="showUserOptions()" src="/assets/svg/main/sign-in-alt.svg" alt="">
                        <span>ورود</span>
                    </div>
                </div>
            </div>
            <div>
                <span>: نام کاربری</span>
                <span>Amirhosein_GPR&nbsp;</span>
                <span>: سطح</span>
                <span>مدیر کل&nbsp;</span>
            </div>
        </div>
    </div>
    <div id="header">
        Header
    </div>
    <div id="nav-bar">
        Nav-bar
    </div>
    <div id="main-content">
        <?php
        echo $innerPage;
        ?>
    </div>
    <div id="footer">
        <span>طراحی و برنامه نویسی سایت : Amirhosein_GPR</span>
        <span>Version : 0.0.4 - Alpha</span>
    </div>
</div>
<script src="/assets/js/ToolBox.js"></script>
</body>
</html>