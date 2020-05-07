<!DOCTYPE html>
<html>
<head>
    <?php 
    $title = "Feedback";
    require_once "blocks/head.php" 
    ?>
    
  <script type="text/javascript" src="javascript/jquery-2.2.3.min.js"></script>
  <script>
   $(document).ready (function () {
    $("#done").click (function () {
     $('#messageShow').hide ();
     var name = $("#name").val ();
     var email = $("#email").val ();
     var subject = $("#subject").val ();
     var message = $("#message").val ();
     var fail = "";
     if (name.length < 3) fail = "Numele: nu mai puțin de 3 simboluri";
     else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
      fail = "Nu ați introdus un email valid";
     else if (subject.length < 5)
      fail = "Tema mesajului: Numele: nu mai puțin de 5 simboluri ";
     else if (message.length < 25)
      fail = "Mesaj prea scurt : nu mai puțin de 25 simboluri";
     if (fail != "") {
      $('#messageShow').html (fail + "<div class='clear'><br></div>");
      $('#messageShow').show ();
      return false;
     }
        
     $.ajax ({
      url: '/ajax/feedback.php',
      type: 'POST',
      cache: false,
      data: {'name': name, 'email': email, 'subject': subject, 'message': message},
      dataType: 'html',
      success: function (data) {
       $('#messageShow').html (data + "<div class='clear'><br></div>");
       $('#messageShow').show ();
      }
     });
    });
   });
  </script>
</head>
<body>
    <!--unim la blocul header.php-->
    <?php require_once "blocks/header.php" ?> 
   
    <div id="wrapper">
    <div id="leftCol">
        <input type="text" placeholder="Nume" id="name" name="name"><br />
        <input type="text" placeholder="Email" id="email" name="email"><br />
        <input type="text" placeholder="Tema Mesajului" id="subject" name="subject"><br />
        <textarea name="message" id="message" placeholder="Scrieți mesajul aici"></textarea><br />
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" value="Trimite"><br />
        </div>
    <?php require_once "blocks/rightCol.php" ?> <!--unim coloana drepata la blocul respectiv-->
    </div>
    <?php require_once "blocks/footer.php"?> <!--unim la blocul footer.php-->
    </body>
    </html>