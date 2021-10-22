<?php include('header.php') ?>
    <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown">
        <?php if(isset($_SESSION['login'])){?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user">Account</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="logout.php">Log out</a>
        </div>
        <?php } else{ ?>
          <a href="login.php" class="nav-link"><i class="fa fa-user"></i>login</a>
        <?php } ?>
        
      </li>
    </ul>
  </div>
</nav>
<div class="d-flex"style="height:500px;background:linear-gradient(-45deg,navy 50%,transparent 50%)">
<div class="container-fluid my-auto">
    <div class="row">
        <div class="col-lg-6 my auto">
            <h1 class="display-3 font-weight-bold">School Management System</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius perspiciatis porro ipsam consectetur enim ad nulla voluptatem! Illo voluptatem, laborum rerum molestiae odit vel, eius placeat totam praesentium non unde?</p>
            <a href="" class="btn btn-lg btn-primary">Call to Action</a>
        </div>
        <div class="col-lg-6">
            <div class="col-lg-8 mx-auto card shadow-lg">
                <div class="card-body">
<form action="" method="post">
    <h3>Admission Form</h3>
    <!-- Material input -->
<div class="md-form">
  <input type="text" id="form1" class="form-control">
  <label for="form1">Your Name</label>
</div>
<div class="md-form">
  <input type="text" id="email" class="form-control">
  <label for="email">Your Email</label>
</div>
<div class="md-form">
  <input type="text" id="mobile" class="form-control">
  <label for="mobile">Your Mobile</label>
</div>
<div class="md-form">
  <input type="text" id="class" class="form-control">
  <label for="class">Your Class</label>
</div>
<button class="btn btn-dark btn-block">Submit Form</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
<h2 class="font-weight-bold">About<br>School Management System</h2>
<div class="pr-5">
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic, labore explicabo. Mollitia quisquam ipsa odio excepturi sequi odit aperiam explicabo reiciendis totam vero repudiandae placeat esse amet tenetur, numquam assumenda!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vel distinctio enim cupiditate tempora fuga dicta voluptas vero. Dolor dignissimos assumenda eius hic cupiditate, officiis a voluptatibus quia commodi eaque?</p>
</div>
<a href="about-us.php"class="btn btn-secondary">Know More</a>
      </div>
      
      <div class="col-lg-6">
        <img src="./assets/images/school.jpg"class="img-fluid">
      </div>
    </div>
  </div>
</section>
<section class="py-5 bg-light">
<div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Courses</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eligendi vel facilis illum provident.</p>
</div>
<div class="container">
    <div class="row">
      <?php for($i=0;$i<12;$i++){?>
        <div class="col-lg-3">
            <div class="card">
            <div>
            <img src="./assets/images/school.jpg" alt="" class="img-fluid rounded-top">
            </div>
                <div class="card-body">
                <b>Web Designing & Development</b>
                    <p class="card-text">
                    <b>Duration:</b>45 hours<br>
                    <b>Price:</b>4000/-Rs
</p>
<button class="btn btn-block btn-primary">Enroll Now</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</section>
<section class="py-5">
<div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Teachers</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eligendi vel facilis illum provident.</p>
</div>
<div class="container">
  <div class="row">
    <?php for($i=0;$i<8;$i++){ ?>
    <div class="col-lg-3 my-4">
      <div class="card">
      <div class="col-7 position-absolute"style="top:-50px">
            <img src="./assets/images/placeholder.png" class="mw-100 border rounded-circle">
            </div>
        <div class="card-body pt-5 mt-4">
            <h4 class="card-title mb-0">Teachers Name</h4>
            <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
            <p class="card-text">
              <b>Courses:</b>5 <br>
              <b>Rating:</b> 5
</p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</section>
<section class="py-5 text-white" style="background:#7F94E9">
<div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 pr-5">
      <h2>Achivements</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis id libero ipsa nemo, illo commodi maxime minus natus optio animi reiciendis tempora, ipsam nisi ullam, aut voluptatum omnis quibusdam voluptatem!</p>
<img src="./assets/images/school.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 my-auto">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="border rounded">
            <div class="card-body text-center">
              <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
              <h2 class="my-2 font-weight-bold h1">334</h2>
              <hr class="border-warning">
              <h3>Graduates</h3>
    </div>
    </div>
    </div>
    <div class="col-lg-6 mb-4">
    <div class="border rounded">
            <div class="card-body text-center">
              <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
              <h2 class="my-2 font-weight-bold h1">334</h2>
              <hr class="border-warning">
              <h3>Graduates</h3>
    </div>
    </div>
    </div>
    <div class="col-lg-6 mb-4">
    <div class="border rounded">
            <div class="card-body text-center">
              <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
              <h2 class="my-2 font-weight-bold h1">334</h2>
              <hr class="border-warning">
              <h3>Graduates</h3>
    </div>
    </div>
    </div>
    <div class="col-lg-6 mb-4">
    <div class="border rounded">
            <div class="card-body text-center">
              <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
              <h2 class="my-2 font-weight-bold h1">334</h2>
              <hr class="border-warning">
              <h3>Graduates</h3>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
    </section>
    <section class="py-5">
      <div class="text-center mb-5">
        <h2>What People Says</h2>
        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, omnis. Aliquam cumque nobis, dolorum sed accusamus iusto totam rem? Excepturi officiis distinctio ea delectus quisquam pariatur minus nam nihil impedit?</p>
    </div>
    <div class="container">
      <div class="row">
    <div class="col-6">
      <div class="border rounded position-relative">
      <div class="p-4 text-center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, aut laudantium ipsa similique nostrum eveniet nobis? Ducimus itaque, unde similique, impedit nesciunt deleniti molestiae pariatur a dignissimos reiciendis sapiente error.
    </div>
    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem;left:.5rem;opacity:.2"></i>
    </div>
    <div class="text-center mt-n2">
    <img src="./assets/images/placeholder.png "class="rounded-circle border" width="100" height="100">
    <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
    <p><i>Designation</i></p>
    </div>
    </div>
    <div class="col-6">
      <div class="border rounded position-relative">
      <div class="p-4 text-center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, aut laudantium ipsa similique nostrum eveniet nobis? Ducimus itaque, unde similique, impedit nesciunt deleniti molestiae pariatur a dignissimos reiciendis sapiente error.
    </div>
    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem;left:.5rem;opacity:.2"></i>
    </div>
    <div class="text-center mt-n2">
    <img src="./assets/images/placeholder.png "class="rounded-circle border" width="100" height="100">
    <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
    <p><i>Designation</i></p>
    </div>
    </div>
    </div>
    </section>
    <footer class="py-5 text-white"style="background:#7F94E9")>
      <div style="background:#0000008">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <h5>Useful Links</h5>
            <ul class="fa-ul">
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>as bullets</a></li>
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
    </ul>
    </div>
    <div class="col-lg-4">
            <h5>Social Presence</h5>
          <div>
            <span class="fa-stack fa-lg">
            <i class="fab fa-facebook-square fa-stack-2x"></i>
            <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
    </span>
    </div>
    </div>
    <div class="col-lg-4">
            <h5>Useful Links</h5>
            <ul class="fa-ul">
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>as bullets</a></li>
              <li><a class="text-light"><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </footer>
<?php include('footer.php')  ?>
