<?php
include "partials/header.php"?>

<h1 style="text-align:center; color:#81D8D0" >USER PAGE</h1>

<div class ="container d-flex justify-content-center align-content-center">
    <form method = "POST" class=  "mt-5 w-10">

<div class="mb-3">
  <label class ="form-label">First Name</label>
    <input name="firstname"type="text" class="form-control" required>

<div class="mb-3">
    <label class="form-label">Last Name</label>
    <input name="lastname" type="text" class="form-control"required>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input name="email" type="email" class="form-control"required>
  
<div class="mb-3">
    <label class="form-label">Password</label>
    <input name="password"type="password" class="form-control"required>
 
  </div>

  <button name="submit" type = "submit"class="btn btn-primary">Submit</button>

</form>

<?php include "partials/footer.php"?>