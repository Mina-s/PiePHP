

<h1>Hello <?php echo $_SESSION['lastname']; ?></h1>
<br>
<br>

<div class="informationsProfile">
    <h1><strong>Personal Details<strong></h1>
    <br>
    <p>Name : <?php echo $_SESSION['name']; ?></p>
    <p>Lastname : <?php echo $_SESSION['lastname']; ?></p>
    <p>Email : <?php echo $_SESSION['email']; ?></p>
<br>
<br>
<br>
<br>
<div class="container">

    <form method="POST" id="emailForm" action="<?php echo BASE_URI;?>/user/show">
      <label><b>Edit Email</b></label><br>
      <input type="text"  class="form-control"  name="newemail" value="<?php echo $_SESSION['email']; ?>">
      <label><b>Edit Name</b></label><br>
      <input type="text"  class="form-control"  name="newname" value="<?php echo $_SESSION['name']; ?>">
      <label><b>Edit lastname</b></label><br>
      <input type="text"  class="form-control"  name="newlastname" value="<?php echo $_SESSION['lastname']; ?>">
      <label><b>Edit passord</b></label><br>
      <input type="password" class="form-control"  placeholder="Last password" name="lastpass" required>
      <input type="password"  class="form-control" placeholder="new password" name="newpass" >
    
      <br>
      <br>
      <button type="submit" name="submit" class="btn btn-primary" value="psw">Edit</button> 
     
    </form>
    <br>

<br>
<br>
<br>
<br>
<br>

<form method="POST" id="delete" action="<?php echo BASE_URI;?>/user/show">
  <input class="btn btn-danger" type="submit" name="submitdelete" value="delete my account">
</form>

</div>