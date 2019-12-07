<!DOCTYPE html>
<html>
<head>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 20px;
}
#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.3s, fadeout 0.3s 2.0s;
    animation: fadein 0.3s, fadeout 0.3s 2.0s;
}
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}
@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}
@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 20; opacity: 0;}
}
@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
</head>
<body>
<div id="snackbar">1 Row Inserted!!</div>
<script>
function mFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}
</script>
        <form method="POST">
                <p>
        Description:<input type="text" name="oid" required><br>
         </p>
         <p>
         Owner ID:<input type="text" name="name" required><br>
         </p>
                <input onclick="mFunction();myFunction();"  type="submit" name="submit" value="INSERT"><br>
        </form>
<script type="text/javascript">
    function myFunction() {
<?php
$nid=$_POST['oid'];
$name=$_POST['name'];
$sta="a";
//echo $nid.$name.$age.$sid.$ph.$mail;
//INSERT INTO `example` (`id`, `name`) VALUES ('1', 'Adithya');
$link=MySQLi_connect('localhost', 'root', '');
$db=MySQLi_select_db($link, 'apartment_management_system');
$sql="INSERT INTO `issue` (`description`, `ownerid`) VALUES ('$nid', '$name')";
$record=MySQLi_query($link, $sql);
?>
}
</script>
</body>
</html>
