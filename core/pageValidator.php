<? ob_start ?>
<?php
function validateUseraccess($redirectPage)
{
//check if vistor have access if yes allow page else redirect to login page
    if(isset($_SESSION['username'])==false){
    header('Location: '.$redirectPage);
    }
}
?>
<? ob_flush ?>