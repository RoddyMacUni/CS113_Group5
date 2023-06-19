<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/progressTracker.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<br>
<body>
<div class="skillContainer">
    <span>BASICS</span>
    <span>INTERMEDIATE</span>
    <span>ADVANCED</span>
</div>
<div class="lessonContainer">
    <span class="lessonTitle">Basics of HTML</span>
    <p class="lessonContent">Have you ever wondered <span class="highlightText">how</span> websites work?</p>
    <p class="lessonContent">In this lesson, we'll uncover the magic behind websites and discover the language that brings them to life: HTML</p>
    <p class="lessonContent">HTML is short for <span class="highlightText">Hyper Text Markup Language</span>  is the backbone of every website you visit. It's the secret code that tells your computer or device how to display a webpage. Just like the bricks in a building, HTML provides the structure and layout for all the amazing content you see online.</p>
    <p class="lessonContent">You can think of HTML as a set of instructions you give your computer. It helps you create headings, paragraphs, images, links and so much more. With HTML, you have the power to make your very own web pages!</p>

    <span class="lessonTitle">HTML Tags</span>
    <p class="lessonContent">HTML tags are "wrapped" around pieces of text and define how the website will display the text.</p>
    <p class="lessonContent">Elements are used to jazz up the text on your webpages<br>Want to make a big heading? Use the <span class="highlightText">&lt;h1&gt;</span> tag, for smaller ones there's <span class="highlightText">&lt;h2&gt;</span> and <span class="highlightText">&lt;h3&gt;</span></p>
    <p class="lessonContent">HTML lets you sprinkle your web pages with mesmerising colours. you can change colours, sizes, fonts and more! With the power of <span class="highlightText">CSS (Cascading Style Sheets)</span> you can make your text shimmer, dance or even glow like magic!</p>
    <p class="lessonContent">Want to transport your visitors to another page with just one click? HTML can do that with a link, the <span class="highlightText">&lt;a&gt;</span> tag - just specify the URL and your visitors will be transported there.</p>
    <p class="lessonContent">A picture is worth a thousand words! And just like the pictures on this page, HTML let's us display these with the <span class="highlightText">&lt;img&gt;</span> tag.</p>
    <p class="lessonContent">Just like an architect designs buildings, HTML helps you structure your web pages into flawless <span class="highlightText">sections, lists and tables.</span> You can create fun and functional designs for all to access.</p>
</div>
<div class="pageDivider">Watch This</div>
<div class="lessonContainer">
    <div class="videoContainer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ok-plXXHlWw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<div class="pageDivider">All finished?</div>
<div class="lessonContainer">
    <p class="lessonContent">If you have fully read and understood the above materials, check the box below...</p>
    <input type="checkbox" class="lessonCompleteCheckbox" name="htmlLessonCheckbox" id="htmlLessonCheckbox">
    <!--IN FUTURE THIS WILL BE MEASURED BY QUIZ RESULT, BUT NOT REQUIRED FOR THIS MILESTONE-->
    <div class="celebrationToast" id="celebrationToast"></div>
</div>
<?php include './php/templateFooter.php'; ?>
</body>
</html>