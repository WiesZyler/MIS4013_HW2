<?php
$PageTitle = "Get";
include "view-header.php";
?>
    <h1>Post</h1>
<form method = "get" action = "get-result.php">
  <input type="text" name = 'my-name'>
  <input type ="submit" value = "Get Data" style="color: black;">
  </form>
<?php
include "view-footer.php";
?>
