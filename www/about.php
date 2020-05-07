<!DOCTYPE html>
<html>
<head>
    <?php 
    $title = "Despre noi";
    require_once "blocks/head.php" 
    ?>
</head>
<body>
    
    <?php require_once "blocks/header.php" ?> <!--unim la blocul header.php-->
   
    <div id="wrapper">
        <div id="leftCol">
            <div id="about_us">
                <h2>Informații despre noi</h2>
                What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
        <?php require_once "blocks/rightCol.php" ?> <!--unim coloana drepata la blocul respectiv-->
    </div>
    <?php require_once "blocks/footer.php"?> <!--unim la blocul footer.php-->
    </body>
    </html>