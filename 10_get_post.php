<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit']) ){
    echo $_POST['username'];
    echo $_POST['age'];
    
}

// if (isset($_POST['submit'])) {
//   // echo '<h3>' . $GET['username'] . '</h3>';
//   echo '<h3>' . $_POST['username'] . '</h3>';
// }
 ?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Abdullah&age=30">Link</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
    <label for='username'>Name: </label>
    <input type="text" name="username">
    </div>

    <div>
    <label for='age'>Age: </label>
    <input type="text" name="age">
         </div>

    <input type="submit" value="Submit" name="submit">

</form>

<br><br>

<!-- Pass data through a form 
<form action="<?php

// echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
-->