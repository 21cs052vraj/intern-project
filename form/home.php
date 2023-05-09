<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
.nav {
  background-color: rgb(174, 174, 130); 
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 20px;
}
#rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 20px; 
  width: 200px;
  height: 300px;  
}
</style>
</head>
<body>
<div class="nav">
<ul class="">
    
  <a href="index.php" id="rcorners1">DATA ENTRY</a>
  <a href="display/display-index.php"  id="rcorners1">DISPLAY DATA</a>
  <a href="#clients"  id="rcorners1">UPDATE DATA</a>
  <a href="#contact"  id="rcorners1">DELETE DATA</a>
  <a href="logout.php"  id="rcorners1">LOGOUT</a>

</ul>
</div>
</body>
</html>


