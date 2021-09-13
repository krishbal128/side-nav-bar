<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>
 <body>
 <div class="top">
     <a href="#home"><span class="fas fa-chevron-up"></span></a>
   </div>
   <div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>
   <div class="side-bar">
     <div class="close-btn">
       <i class="fas fa-times"></i>
     </div>
     <div class="menu">
     <div class="item"><a href="#home"><i class="fas fa-home"></i>Home</a></div>
       <div class="item"><a href="dashboard.php" target="_blank"><i class="fas fa-desktop"></i>Dashboard</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-user-graduate"></i>Student<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#std" class="sub-item">Student Registration</a>
         </div>
       </div>
       <div class="item">
        <a class="sub-btn"><i class="fas fa-chalkboard-teacher"></i>Staff<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="#staff" class="sub-item">Details</a>
        </div>
      </div>
      <div class="item">
         <a class="sub-btn"><i class="fas fa-running"></i>Sports Events<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sports Day</a>
           <a href="#" class="sub-item">Zonal</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
     </div>
   </div>
   <section class="main" id="home">
     <h1>Creative World</h1>
   </section>
   
   
   <!-- Login -->
   <section id="std">
     <h1 class="r">Registration Form</h1>
    <div class="container">
      <div class="myform">
         <form method="POST" action="" >
             <div class ="row">
                 <div class="form-group col-12">
                  <label>First Name</label>
                  <input type="text" name="name" autocomplete="nope" class="form-control" placeholder="First Name" required>
                 </div>
                 <div class="form-group col-12">
                  <label>Roll Number</label>
                  <input type="text" name="roll" autocomplete="nope" class="form-control" placeholder="Roll Number"  required>
                 </div>
                 <div class="form-group col-12">
                  <label>Email</label>
                  <input type="email" name="email"  class="form-control" placeholder="Email Id"  required>
                 </div>
                 <div class="form-group col-12">
                  <label>Department</label>
                  <input type="text" name="dept" class="form-control" placeholder="Example:BE/CSE" required>
                 </div>
                 <div class="form-group col-12">
                  <label>College</label>
                  <input type="text" name="coll" class="form-control" placeholder="College Name" required>
                 </div>
             </div></br>
             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
             
         </form>
         </div>
  
  </div>
   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
   </section>

   

   <script type="text/javascript">
   $(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });
   </script>

   
   <!-- PHP for registration -->
   <?php
   if(isset($_POST["submit"]))
   {
     
   $conn=mysqli_connect("localhost:3306","root","","college");
   mysqli_select_db($conn,"college");
   $Name=$_POST['name'];
   $RollNumber=$_POST['roll'];
   $Email=$_POST['email'];
   $Department=$_POST['dept'];
   $College=$_POST['coll'];
   $sql="INSERT INTO student(name,rollnumber,email,dept,college) values('$Name','$RollNumber','$Email','$Department','$College')";
   $query=mysqli_query($conn,$sql);
   
   
  }
   ?>
   <!-- ####PHP### -->

 </body>
</html>
      