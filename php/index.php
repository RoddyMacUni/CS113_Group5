<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<body>
    <br>

    <div class="parentZoneContainer">
        <a href="html-lesson.php">
            <div class="parentZoneItem">
                <img src="../images/monster1.png" alt="" class="parentZoneImg">
                <p class="parentZoneText">Build a website</p>
            </div>
        </a>

        <a href="html-lesson.php">
            <div class="parentZoneItem">
                <img src="../images/monster1.png" alt="" class="parentZoneImg">
                <p class="parentZoneText">What is HTML?</p>
            </div>
        </a>

        <a href="css-lesson.php">
            <div class="parentZoneItem">
                <img src="../images/monster1.png" alt="" class="parentZoneImg">
                <p class="parentZoneText">What is CSS?</p>
            </div>
        </a>
    </div>
    <br>
    <div class="pageDivider">&nbsp;</div>
    <br>
    <div class="quicklinks">
        <img src="../images/placeholder.jpg">
    </div>
    <br>
    <div class="pageDivider">&nbsp;</div>
    <div class="homepageLoginContainer" name="homepage-login-section">
        Already a member?
        <button class="lessonQuizSubmit" type="button"><a href="login.php">Log in</a> </button>
    </div>
    <div class="pageDivider">&nbsp;</div>
    <div class="quicklinks">
        <span>Got a question?</span>
        <button href="about-us.php">FAQ</button>
    </div>


    <?php include 'templateFooter.php'; ?>
</body>
</html>