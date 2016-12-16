<?php
//输入输出相关参数参考ListItems.php
?>
<?php
//require 'control/ListItems.php';
//require 'control/ListHomework.php';
//require 'control/ListMatirial.php';
//require 'control/ListNotice.php';
//$result=ListItems("material");

//test
class M{
    public $name = "name";
    public $url = "url.docx";
    public $update_time = "2016";
    public $teacher1 = "li";
}
$result=array(new M);
$type = 1;
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style/common/basic.css"/>
    <link rel="stylesheet" href="style/class/list.css"/>
    <link rel="stylesheet" href="style/class/material.css"/>
    <title></title>
</head>
<body>

<!--台头标题-->
<header>
    <h1>
        资料列表
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
        <!--地址导航-->
        <div id="map">
            <ul>
                <li><a href="myclasses.php">我的课程</a></li>
                <li><a href="class.php"><?php $course->name ?></a></li>
                <li class="maplast"><p>资料列表</p></li>
            </ul>
        </div>
        <!--功能按钮区-->
        <div class="functional-panel">
            <?php if($type>1){
                ?>
                <div class="button add-material-btn" >上传资料</div>
                <?php
            }
            ?>
        </div>
        <div id="main">
            <!--资料条目-->
            <div class="list">
                <div class="material title row">
                    <div class="material title name">文件</div>
                    <div class="material title update-time">上传时间</div>
                    <div class="material title teacher">上传者</div>
                </div>

                <?php
                foreach($result as $material) {
                    echo "<div class=\"material row\">";
                    echo "<a class=\"material name\" href=\"" . $material->url . "\">" . $material->name . "</a>";
                    echo "<span class=\"update-time\">" . $material->update_time . "</span>";
                    echo "<span class=\"teacher\">" . $material->teacher1 . "</span>";
                    echo "<a class=\"button delete-button\" href=\"".$material->url."\">下载</a>";
                    echo "</div>";
            }
                ?>

            </div>
        </div>
    </article>

    <!--底部声明-->
    <footer>
        <div>
            <h3>tas</h3>
        </div>
    </footer>

</body>
</html>
