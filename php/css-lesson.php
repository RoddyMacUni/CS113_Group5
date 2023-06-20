<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Lesson 1</title>
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/progressTracker.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<body>
<div class="skillContainer">
    <span class="skillBarItem">BASICS</span>
    <span class="skillBarItem">INTERMEDIATE</span>
    <span class="skillBarItem">ADVANCED</span>
</div>
<div class="lessonContainer">
    <span class="lessonTitle">Basics of CSS</span>
    <p class="lessonContent">CSS, also known as <span class="highlightText">Cascading Style Sheets</span> tell the web browser how to style our website.</p>
    <p class="lessonContent">We use CSS because it allows us to create 'classes' that we can apply to any HTML element to give it styles, meaning we don't have to spend time styling each individual component</p>
    <p class="lessonContent">Styles can be applied to an HTML element either <span class="highlightText">inline</span> or <span class="highlightText">external</span></p>
    <p class="lessonContent"><span class="highlightText">External</span> stylesheets are created in another file, usually within a CSS folder and linked in the <span class="highlightText">&lt;head&gt;</span> tag, while inline styles are defined on the element itself inside the <span class="highlightText">style</span> attribute</p>

    <span class="lessonTitle">Common CSS properties</span>
    <p class="lessonContent">If you want to change the color of the text within an element, you would use the <span class="highlightText">color</span> property. eg:</p>
    <p class="lessonContent" style="font-family: 'Source Code Pro'; color: white; background-color: rgb(49, 93, 151); width: fit-content; padding: 10px; border-radius: 5px">h1 {<br>color: white<br>}</p>
    <p class="lessonContent">The above CSS code will make every <span class="highlightText">&lt;h1&gt;</span> tag have white text</p>
    <p class="lessonContent">padding is another useful css property, which allows you to add extra space to each side of an element.</p>
    <div style="background-color: rgb(49, 93, 151); padding: 10px; color: white; border-radius: 10px; text-align: center; width: 25%;">Padding 10px</div>
    <br><br>
    <div style="background-color: rgb(49, 93, 151); padding: 25px; color: white; border-radius: 10px; text-align: center; width: 25%;">Padding 25px</div>
</div>
<div class="pageDivider">Watch This</div>
<div class="lessonContainer">
    <div class="videoContainer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OEV8gMkCHXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<div class="pageDivider">All finished?</div>
<div class="lessonContainer">
    <p class="lessonContent">If you have fully read and understood the above materials, check the box below...</p>
    <input type="checkbox" class="lessonCompleteCheckbox" name="cssLessonCheckbox" id="cssLessonCheckbox">
    <!--IN FUTURE THIS WILL BE MEASURED BY QUIZ RESULT, BUT NOT REQUIRED FOR THIS MILESTONE-->
    <div class="celebrationToast" id="celebrationToast"></div>
</div>
<?php include 'templateFooter.php'; ?>
</body>
</html>