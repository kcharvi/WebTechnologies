<?php 
include '19bce7002_connect.php';
?>
<?php
session_unset();
session_destroy();
?>
<script language="javascript">
document.location="login.php";
</script>