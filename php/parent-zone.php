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
        <img src="../images/monster1.png" alt="" class="parentZoneImg">
        <p class="parentZoneText">Parent FAQ</p>
    </div>

    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="" class="parentZoneImg">
        <p class="parentZoneText">Check my kids progress</p>
    </div>

    <div class="parentZoneItem">
        <img src="../images/monster1.png" alt="" class="parentZoneImg">
        <p class="parentZoneText">Report an issue</p>
    </div>
</div>
<div class="pageDivider" style="margin-bottom: 10px;">&nbsp;</div>
<!--THIS WILL BE POPULATED DYNAMICALLY DEPENDING ON WHAT LINK IS SELECTED ABOVE, IN FUTURE MILESTONES-->
<div class="aboutUsParentContainer">
    <div class="aboutUsContainer">
        <img src="../images/logo.png" alt="" class="aboutUsImg">
        <p class="aboutUsText">The content here will be dynamically generated, depending on the button selected above. For now it is Lorem Ipsum.<br><br>
            Sed quis rutrum risus, at egestas orci. Mauris congue est metus, in vestibulum sapien iaculis a. 
            Donec bibendum mi et urna porttitor, vitae tempor libero condimentum. Fusce urna arcu, molestie in lorem iaculis, consectetur tincidunt dui. 
            Nam consectetur lacus non ex gravida efficitur. Donec vehicula ullamcorper laoreet. Cras elit ipsum, accumsan vitae velit eget, varius accumsan nisl.
            Sed quis rutrum risus, at egestas orci. Mauris congue est metus, in vestibulum sapien iaculis a. 
            Donec bibendum mi et urna porttitor, vitae tempor libero condimentum. Fusce urna arcu, molestie in lorem iaculis, consectetur tincidunt dui. 
            Nam consectetur lacus non ex gravida efficitur. Donec vehicula ullamcorper laoreet. Cras elit ipsum, accumsan vitae velit eget, varius accumsan nisl.
            Sed quis rutrum risus, at egestas orci. Mauris congue est metus, in vestibulum sapien iaculis a. 
            Donec bibendum mi et urna porttitor, vitae tempor libero condimentum. Fusce urna arcu, molestie in lorem iaculis, consectetur tincidunt dui. 
            Nam consectetur lacus non ex gravida efficitur. Donec vehicula ullamcorper laoreet. Cras elit ipsum, accumsan vitae velit eget, varius accumsan nisl.
            </p>
    </div>
</div>
<div class="pageDivider"></div>
<?php include 'templateFooter.php'; ?>
</body>
</html>