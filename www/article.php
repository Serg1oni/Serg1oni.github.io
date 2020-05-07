<!DOCTYPE html>
<html>
<head>
    <?php 
        require_once "functions/functions.php";
        $news = getNews(1, $_GET["id"]);
        $title = $news["title"];
        require_once "blocks/head.php";
  ?>
</head>
<body>
    <!--unim la blocul header.php-->
    <?php require_once "blocks/header.php" ?> 
    <div id="wrapper">
        <div id = "leftCol">
 <?php
        
        
            echo '<div id="bigArticle"><img src="/img/articles/'.$news["id"].'.jpg" alt ="articol '.$news["id"].'" title="Articol '.$news["id"].'">
            <h2>'.$news["title"].'</h2>
            <p>'.$news["full_text"].'</p>
       </div>';
     
    
            ?>

        </div>
  
    <?php require_once "blocks/rightCol.php" ?> <!--unim coloana drepata la blocul respectiv-->
    </div>
    <?php require_once "blocks/footer.php"?> <!--unim la blocul footer.php-->
    </body>
    </html>