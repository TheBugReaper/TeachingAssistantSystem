<?php require "control/ListNotice.php"?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style/common/basic.css"/>
    <link rel="stylesheet" href="style/class/list.css"/>
    <script src="script/utils.js"></script>
    <script src="script/notice.js"></script>
    <title></title>
</head>
<body>

<!--台头标题-->
<header>
    <h1>
        通知列表
    </h1>
</header>

<div id="main">

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
        <div id="map">
            <ul>
                <li><a href="myclasses.php">我的课程</a></li>
                <li><a href="class.php"><?php $course->name ?></a></li>
                <li class="maplast"><p>课程通知</p></li>
            </ul>
        </div>
        <!--添加按钮及搜索框-->
        <div id="function-panel">
            <?php $type=$_SESSION["type"];
                if($type>1){
                    ?>
            <div id="add-notice-button" class="button" ><a href="publishnotice.php?course_id=<?php $course_id;?>"发布通知</div>
             <?php   }?>
        </div>

        <!--通知条目-->
        <div class="notices">
            <div class="list">
                <div class="title row">
                    <div class="title">主题</div>
                    <div class="title">日期</div>
                </div>
                <?php
                foreach ($result as $notice){
                    ?>
                    <div class="row">
                        <div class="name"><a href="notice.php?notice_id=<?php echo $notice->id; ?>"<?php echo $notice->name; ?></div>
                        <div class="date"><?php echo $notice->pub_date; ?></div>
                    </div>
                    <?php
                }
                ?>
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