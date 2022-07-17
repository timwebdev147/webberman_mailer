<?php



//     $fullname = htmlspecialchars($_POST['fullname']);
// 	// $last_name = htmlspecialchars($_POST['last_name']);
// 	$email = $_POST['email'];
//     $phoneNumber = $_POST['number'];
// 	// $url = htmlspecialchars($_POST['url']);
// 	$message = json_decode( htmlspecialchars($_POST['note']) );



include ('db.php');
mysqli_select_db($conn,"sql11506563");

// mysqli_select_db($link,"personal_info");
if(isset($_REQUEST['submit']))
{
    $errorMessage = "";
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $numbers = $_POST['number'];
    $comments = $_POST['comment'];
    // other variables and validation here
    if ($errorMessage != "" ) {
        echo "<p class='message'>" .$errorMessage. "</p>" ;
    }
    else{
        //Inserting record in table using INSERT query
        $insertTB="INSERT INTO `sql11506563`.`MyClients`
        (`fullname`, `Email`, `numbers`, `comments`) VALUES ('$fname', '$email', '$numbers', '$comments')";
        //mysqli_query($insertTB);
        mysqli_query($conn,$insertTB) or die(mysqli_error($conn));
    }
    header("Location: https://webberman.vercel.app/", true, 301);
exit();
}
?>