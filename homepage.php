<?php echo file_get_contents("testhomepage.html");
    session_start();
    if (isset($_SESSION['user']) && $_SESSION['user'] == 1)
    {
        header("Location: testhomepage.html");
        
    }
    else if(isset($_SESSION['user']) && $_SESSION['user'] == 2)
    {
        header("Location: testadmin.php");
    }
    else{
        header("Location: index.php");
        die();
       
    }
    
?>