<?php
// logpass
if(isset($_POST['logemail']) && isset($_POST['logpass'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $logemail = validate($_POST['logemail']);
    $logpass = validate($_POST['logpass']);

    if (empty($logemail)){
        header(("Location: index.php?error= email is required"));
    exit();

    }else if ( empty($logpass)){
        header(("Location: index.php?error= password is required"));
        exit();

    }else{
        echo "valida input";
    }

}
else{
    header("Location: index.php");    
}

