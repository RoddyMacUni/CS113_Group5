<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn</title>
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/progressTracker.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<br>
<body>
<div class="learnContainer">
    <div class="learnItem">
        <span class="learnItemTitle">HTML</span>
        <br>
        <img src="../images/html5.png" alt="" class="learnItemImg">
        <span class="learnItemLinksTitle">HTML Quick Links:</span>
        <ul>
            <li class="learnItemLink"><a href=html-lesson.php>Lesson 1</a></span>
            <li class="learnItemLink">Lesson 2</span>
            <li class="learnItemLink">Lesson 3</span>
            <li class="learnItemLink">Lesson 4</span>
        </ul>
    </div>

    <div class="learnItem">
        <span class="learnItemTitle">CSS</span>
        <br>
        <img src="../images/css3.png" alt="" class="learnItemImg">
        <span class="learnItemLinksTitle">CSS Quick Links:</span>
        <ul>
            <li class="learnItemLink"><a href=css-lesson.php>Lesson 1</a></span>
            <li class="learnItemLink">Lesson 2</span>
            <li class="learnItemLink">Lesson 3</span>
            <li class="learnItemLink">Lesson 4</span>
        </ul>
    </div>
</div>
<div class="pageDivider">Watch This</div>
<div class="lessonContainer">
    <div class="videoContainer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/BpgAzeU0w-s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<div class="pageDivider"></div>
<?php include 'templateFooter.php'; ?>
</body>
</html>