<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<body>
    <br>

    <div class="image-container">
        <div class="image">
            <img class="image" src="../images/placeholder.jpg">
            <br>
            <p>Image</p>
        </div>
        <div class="image">
            <img class="image" src="../images/placeholder.jpg">
            <br>
            <p>Image</p>
        </div>
        <div class="image">
            <img class="image" src="../images/placeholder.jpg">
            <br>
            <p>Image</p>
        </div>
    </div>


    <div class="banner">
        <img class = "banner" src="../images/placeholder.jpg">
    </div>

    <div class="video-container">
        <video src="test.mp4" controls>
        </video>
    </div>

    <div name="homepage-login-section">
        Already a member?
        <button type="button"><a href="login.php">Log in</a> </button>
    </div>

    <div class="video-container">
        <img src="../images/placeholder.jpg">
    </div>

    <div name="homepage-FAQ-section">
        Got a question?
        <button type="button"><a href="faq.php">FAQ</a> </button>
    </div>


    <?php include 'templateFooter.php'; ?>
</body>
</html>