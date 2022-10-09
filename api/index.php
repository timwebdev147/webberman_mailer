

<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
    <?php
    phpinfo();

    if(isset($_REQUEST['submit']))
    {

    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $numbers = $_POST['number'];
    $comments = $_POST['comment'];
    // other variables and validation here

        $to = "akinsanmidev@gmail.com";
         $subject = "Client Alert";
         
         $message = "<b>".$comments. "</b>";
         $message .= "<h1>From ".$fname." phone number: ". $numbers." To Webber Man.</h1>";
         
         $header = "From:".$email. "\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
   
    header("Location: https://webberman.vercel.app/", true, 301);
    exit();
    }
         
      ?>
      
   </body>
</html>



