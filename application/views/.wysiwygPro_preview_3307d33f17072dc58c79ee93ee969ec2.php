<?php
if ($_GET['randomId'] != "oF0y0i3oHcgZ4cOoFdbdK5fZ2VhyK_CTLCZ4LVxMPoQEEX7J7QC0mOw_MGhYuDkE") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
