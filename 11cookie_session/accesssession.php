    <?php
    // Starting session
    session_start();
    // Accessing session data
    if (isset($_SESSION["firstname"]) && isset($_SESSION["lastname"])){
    echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
    }else{echo "No SESSION";}
    ?>
