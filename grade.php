<?php include 'control/searchStudent.php.php'; ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="style/common/basic.css"/>
    <link rel="stylesheet" href="style/home/basic.css"/>
    <link rel="stylesheet" href="style/class/students.css"/>
    <link rel="stylesheet" href="style/class/list.css"/>
    <script src="script/classutil.js"></script>
    <script src="script/domutil.js"></script>
    <script src="script/listutil.js"></script>
    <script src="script/ajax.js"></script>
    <script src="script/student.js"></script>
    <script>
        window.onload = function(){
            students= <?php echo json_encode($result_students);?>;
//            students=[
//                {
//                    name: "Avater",
//                    id:304,
//                    homework1:89
//                },
//                {
//                    name:"Bock",
//                    id:504,
//                    homework1:79
//                },
//                {
//                    name:"Calie",
//                    id:402,
//                    homework1:85
//                }
//            ];
            showStudents(students);
        };
    </script>
    <title></title>
</head>
<body>

<!--台头标题-->
<header>
    <h1>
        成绩列表
    </h1>
</header>
    <!-- 左侧导航栏-->
<div id="wrapper">
    <aside>
        <div id="logo">
            <img src="image/book.jpg">
            <h1>TAS</h1>
            <h3>TeachingAssistantSystem</h3>
        </div>
        <div id="nav">
            <ul>
                <li>
                    <a href="#"><img src="image/book.jpg">个人信息</a>
                </li>
                <li>
                    <a href="#"><img src="image/book.jpg">我的班级</a>
                </li>
            </ul>
        </div>
        <div id="logout">
            <ul>
                <li>
                    <a href="#"><img src="image/book.jpg">退出</a>
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
                <li class="maplast"><p>成绩查询</p></li>
            </ul>
        </div>
            <div id="functional-panel">
                <?php if($type>1){
                    ?>

                    <?php
                }
                ?>
                <div class="button add-grade-button" onclick="">添加成绩栏</div>
                <form>
                    <input type="text" name="keyword" placeholder="搜索" onchange="searchStudents(this.value)">
                </form>
            </div>
        <div id="main">
            <div id="students"></div>
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