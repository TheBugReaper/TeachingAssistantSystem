<?php //$course_id=$_SESSION["course_id"];?>

<?php //require "control/ListNotice.php"?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style/common/basic.css"/>
    <link rel="stylesheet" href="style/class/list.css"/>
    <link rel="stylesheet" href="style/class/publishnotice.css"/>
    <script src="script/utils.js"></script>
    <script src="script/notice.js"></script>
    <title></title>
</head>
<body>

<!--台头标题-->
<header>
    <h1>
        发布通知
    </h1>
</header>

<div id="wrapper">

    <!-- 左侧导航栏-->
    <aside>
        <div id="logo">
            <img src="pic/book.jpg">
            <h1>TAS</h1>
            <h3>TeachingAssistantSystem</h3>
        </div>
        <div id="nav">
            <ul>
                <li>
                    <a href="#"><img src="pic/book.jpg">个人信息</a>
                </li>
                <li>
                    <a href="#"><img src="pic/book.jpg">我的班级</a>
                </li>
            </ul>
        </div>
        <div id="logout">
            <ul>
                <li>
                    <a href="#"><img src="pic/book.jpg">退出</a>
                </li>
            </ul>
        </div>
    </aside>

    <!--右侧内容-->
    <article>
        <!-- 导航栏-->
        <div id="map">
            <ul>
                <li><a href="myclasses.php">我的课程</a></li>
                <li><a href="class.php"><?php $course->name ?></a></li>
                <li><a href="motices.php">课程通知</a></li>
                <li class="maplast"><p>发布通知</p></li>
            </ul>
        </div>
        <!--功能框-->
        <div id="functional-panel">

        </div>

        <!--添加通知-->
        <div id="main">
            <form id="notice-form" class="form" action="addNotice" method="post">
                <p>主题：</p>
                <input id="notice-name" type="text" name="name">
                <p>正文：</p>
                <textarea id="notice-text" name="message"></textarea>
                <button id="notice-submit"value="提交">提交</button>
            </form>
        </div>

        </div>

    </article>
</div>

<!--底部声明-->
<footer>
    <div>
        <h3>tas</h3>
    </div>
</footer>

</body>
</html>