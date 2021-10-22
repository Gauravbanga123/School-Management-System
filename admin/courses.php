<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $category = $_POST['category'];
   $duration = $_POST['duration'];
   $image = $_POST['thumbnail'];
   $today = date('Y-m-d');
    mysqli_query($db_conn,"INSERT INTO courses(name,category,duration,date,image) VALUES('$name','$category','$duration','$today','$image')") or die(mysqli_error($db_conn));
} ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Courses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <?php
        if(isset($_REQUEST['action'])){?>
<div class="card">
            <div class="card-header py-2">
              <h3 class="card-title">
                Add New Course
              </h3>
            </div>
            <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" name="name" placeholder="Course Name" required class="form-control">
        </div>
        <div class="form-group">
                <label for="category">Course Category</label>
                <select name="category" id="category" class="form-control">
                  <option value="">Select Category</option>
                  <option value="web-design-and-development">Web Design and Development</option>
                  <option value="app-development">App Development</option>
        </div>
        <div class="form-group">
        <label for="duration">Course Duration</label>
               <input type="text" name="duration" id="duration" class="form-control" placeholder="Course Duration" required>
        </div>
        <div class="form-group">
               <input type="file" name="thumbnail" id="thumbnail" required>
        </div>
        <button name="submit" class="btn btn-success">
          Submit
                </button>
        </form>
            </div>
          </div>
        <?php } else { ?>
 <!-- Info boxes -->
 <div class="card">
   <div class="card-header">
     <h3 class="card-title">
       Classes
        </h3>
        <div class="card-tools">
          <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-1"> </i>Add New</a>
        </div>
     <div class="card-body">
       <div class="table-responsive bg-white">
     <table class="table table-bordered">
 <thead>
   <tr>
     <th>S no.</th>
     <th>Image</th>
     <th>Name</th>
     <th>Category</th>
     <th>Duration</th>
     <th>Date</th>
</tr>
</thead>
<tbody>
  <?php
$count=1;
$curse_query=mysqli_query($db_conn,'SELECT * FROM courses');
                while($course=mysqli_fetch_object($curse_query)){?>
                <tr>
                  <td><?=$count++?></td>
                  <td><img src="<?=$course->image?>"height="100"></td>
                  <td><?=$course->name?></td>
                  <td><?=$course->category?></td>
                  <td><?=$course->duration?></td>
                  <td><?=$course->date?></td>
                </tr>
                <?php }  ?>
        </tbody>
          </table>
        </div>
        </div>
        </div>
        </div>
          <?php } ?>
          </div>
        </section>
<?php include('footer.php') ?>