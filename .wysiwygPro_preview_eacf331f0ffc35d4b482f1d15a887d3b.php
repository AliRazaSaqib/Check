<?php
if ($_GET['randomId'] != "h7aKRmvJ9VvnEU6fPCylwOdHeo_YHkPNz5ICqMxOv4bBP5xKGX6AE7mRAGGp84kM") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
