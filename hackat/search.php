<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PESCE</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

</head>
<body>
    <!-- ----------------------------------------NAVBAR----------------------------------------------------->
    <?php
       include_once('menu.php');
    ?>

<div class="main">
        <div class="main_content">
        <form action="search.php" name="search" method="POST">
        <div class="form-group">
                 <label for="edit-name">Passing Year <span class="form-required" title="This field is required.">*</span></label>
                 <select id="passing_year" name="passing_year" class="form-text required">
                 <option value="">Select Passing year</option>
                 <?php for($i=2000; $i<=2024; $i++){ ?>
                    <option value="<?=$i?>"><?=$i?></option>
                    <?php } ?>
                 </select>
                 
          </div>
          <div class="form-actions">
          <input type="hidden" name="search" value="Search"/>
			    <button type="submit" id="edit-submit" name="op" value="Search" class="btn_1 submit">Search</button>
          </div>
    
      </div></form>

      <div class="paid_people">
   <h1>Profiles</h1>
<?php
//only start display profiles if and only if search is triggered
if(isset($_POST['search'])){
$c_count = '1';
$result=search($_POST['passing_year']);
foreach ($result as $user){
  ?>
  <div class="sidebar__top">
          <h3><?=$user['name']; ?></h3>
          <h4>Passing year:<?=$user['passing_year']; ?></h4>
        </div>

        <div class="sidebar__stats">
            <div class="sidebar__stat">
                <p>currently working in oracl </p>
                <p class="sidebar__statNumber"></p>
              </div>
          <div class="sidebar__stat">
            <p><?=$user['email']; ?> </p>
            <p class="sidebar__statNumber"></p>
          </div>
          <div class="sidebar__stat">
            <p><?=$user['mobile']; ?> </p>
            <p class="sidebar__statNumber"></p>
          </div>
        </div>
  <?php }
}?>
  </div>
    
    <hr>
    <!-- --------------------------------------------FOOTER-------------------------------------------------------->
    <footer>
        <div class="pages"> 
            <a href="index.php"><img class="aimg" src="images/logo.png" width="250"></a> 
            <p>P. E. S. College of Engineering, Mandya was started in the year 1962 by People's Education Society®, Mandya under the leadership of Late Sri K. V. Shankara Gowda.</p>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="doc">
            <h3>Navigation</h3>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="donate.php">Donate</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="contact" target="_blank">PES College of Engineering,
                PES Engineering College Road,
                Mandya, Karnataka - 571 401.</a>
            <a href="tel: +910000000000">200-000-0000</a>
            <a href="mailto: ppppppp@gmail.com">admissions@pesce.ac.in</a>
        </div>
        <div class="social">
            <h3>Support</h3>
            <p>Help us shape a better future fot children all over the world</p>
            
            
        </div>
        <hr>
        <p>Copyright &copy; 2024 TEAM 404. All rights reserved.</p>
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzmY7HJmUEupsd8UBLj-aTxEsPcKQEWFYaxFA44IcIYrYCjanY1WcTF4zyKYXFQubtbTA/exec'
            const form = document.forms['submit-googlesheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks you for your valuable feedback!"))
                .catch(error => console.error('Error!', error.message))
            })
          
</script>
</body>
</html>