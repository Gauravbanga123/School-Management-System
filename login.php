<?php include('header.php') ?>
<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
<div class="card">
    <div class="card-body">
        <div class="text-center"><span class="fa-stack fa-2x">
  <i class="fa fa-circle text-white fa-stack-2x border rounded-circle"></i>
  <i class="fa fa-user fa-stack-1x text-light"></i>
</span></div>
        <form action="actions/login.php" method="POST">
        <div class="md-form">
  <input type="email" id="email" class="form-control" name="email">
  <label for="email">Your Email</label>
</div>
<div class="md-form">
  <input type="password" id="password" class="form-control" name="password">
  <label for="password">Your password</label>
</div>
<div class="text-center">
<button class="btn-secondary" name="login">Login</button>
</div>
</form>
    </div>
</div>
    </div>
</section>
<?php include('footer.php')  ?>