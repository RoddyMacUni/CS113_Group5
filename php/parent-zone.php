<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parent Zone</title>
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/progressTracker.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <?php include 'templateHeader.php'; ?>
</head>
<br>
<body>
<div class="parentZoneContainer">
    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="Cartoon monster icon" class="parentZoneImg">
        <p class="parentZoneText">Parent FAQ</p>
    </div>

    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="Cartoon monster icon" class="parentZoneImg">
        <p class="parentZoneText">Check my kids progress</p>
    </div>

    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="Cartoon monster icon" class="parentZoneImg">
        <p class="parentZoneText">Report an issue</p>
    </div>
</div>
<div class="pageDivider" style="margin-bottom: 10px;">&nbsp;</div>
<!--THIS WILL BE POPULATED DYNAMICALLY DEPENDING ON WHAT LINK IS SELECTED ABOVE, IN FUTURE MILESTONES-->
<div class="aboutUsParentContainer">
    <div class="aboutUsContainer">
        <img src="../images/logo.png" alt="Company logo" class="aboutUsImg">
        <p class="aboutUsText">
            The Parent Zone is your dedicated space to support and monitor your child's coding journey.
            Check your child's progress, report issues, and find answers in our Parent FAQ section.
            We're here to ensure a safe and enriching experience for your child's learning. Join us and be an active
            part of their coding adventure!
    </div>
</div>
<div class="pageDivider"></div>
<?php include 'templateFooter.php'; ?>
</body>
</html>