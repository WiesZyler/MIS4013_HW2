<?php
$PageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>

<?php
if (isset($_POST['my-name']))
{
?>
<p>The Value Sent is: </p>
<?php
  echo $_POST['mmy-name'];
}
else
{
?>

<p>Nothing Posted to the page!</p>
<?php

  
}



include "view-footer.php";
?>
