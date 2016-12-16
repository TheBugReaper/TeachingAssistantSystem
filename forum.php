<?php
//输入输出相关参数参考ListItems.php
?>
<?php
//require 'control/ListItems.php';
//require 'control/ListHomework.php';
//require 'control/ListMatirial.php';
//require 'control/ListNotice.php';
//$result=ListItems("post");

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
    <link rel="stylesheet" href="style/class/forum.css"/>
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
                <li class="maplast"><p>论坛</p></li>
            </ul>
        </div>
        <!--功能按钮区-->
        <div class="functional-panel">
            <?php if($type>1){
                ?>
                <div class="button add-post-btn" ><a href="publishpost.php">发帖</a></div>
                <?php
            }
            ?>
        </div>
        <div id="main">
            <!--资料条目-->
            <div class="list">
                <div class="post title row">T
                    <div class="post title name">主题</div>
                    <div class="post title update-time">最后回复</div>
                    <div class="post title userID">发帖人</div>
                </div>

                <?php
                foreach($result as $post) {
                    echo "<div class=\"post row\">";
                    echo "<a class=\"post name\" href=\"" . $post->url . "\">" . $post->name . "</a>";
                    echo "<span class=\"update-time\">" . $post->update_time . "</span>";
                    echo "<span class=\"userID\">" . $post->userID. "</span>";
                    if ($type>1){
                        echo "<a class=\"button delete-button\" href=\"" . "\">删除</a>";     //删帖部分链接待补充
                        echo "<a class=\"button delete-button\" href=\"" . "\">置顶</a>";     //置顶部分链接待补充
                    }

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
