<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your custom styles if needed -->
    <link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
    $( function() {
        var dt = new Date();
        dt.setFullYear(new Date().getFullYear()-18);
        var year = (dt.getFullYear());
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-60:"+year,
            dateFormat: 'dd-mm-yy'
        });

        jQuery.validator.addMethod("noSpace", function(value, element) {
            return value.indexOf(" ") < 0 && value != "";
        }, "No space please and don't leave it empty");
    
    } );

/*    function sendSms() {
        if($('#mobile').val().length==10){
            var mobile = '91'+$('#mobile').val();
            $.post("sendSms.php",{mobile: mobile}, function(data, status){
                if(status=='success'){
                    $('#mobile-status').html(data);
                    $('#otp_block').show();
                }
            });
        }
    }*/

</script>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            /* Replace 'background-image.jpg' with your actual image path */
            background-size: cover;
            background-image:linear-gradient( rgba(10, 10, 11, 0.8), rgba(11, 11, 12, 0.8)),url(img1.jpg);
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
  .container {
            text-align: center;
            width: 300px; /* Adjust the width as needed */
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            
            padding: 20px;
            border-radius: 10px;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
        }
       

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #fff;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #fff;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Alumni Registration</h2>
        <form action="usersubmit.php" name="registration" method="POST">
             <?php
             if($_GET['status']==2){
                 $statusMsg='Mobile & Email already exist';
             }elseif($_GET['status']==3){
                 $statusMsg='Mobile already exist';
             }elseif($_GET['status']==4){
                 $statusMsg='Email already exist';
             }
             if($_GET['status']>1){
             ?>
             <div class="form-group form-group1">
                 <div class="col-sm-12">
                     <label><p class="error"><?=$statusMsg ?></p></label>
                 </div>
                 <div class="clearfix"> </div>
             </div>
             <?php } ?>
             
             <div class="form-group">
		      <label for="edit-name">Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text"  name="name" placeholder="Name" value="<?=$data['name']?>" size="20" maxlength="20" class="form-text required">
		    </div>
             <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" name="email" value="<?=$data['email'] ?>"size="60" maxlength="60"  placeholder="Email" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" name="pass" placeholder="Password" value="<?=$data['pass']?>" size="30" maxlength="30" class="form-text required">
		    </div>

		    <div class="age_select">
		      <label for="edit-pass">Date of Birth <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">

                    <input name="dob" class="form-text required" id="datepicker" value="<?=$data['dob']?>" placeholder="Date of birth" readonly>
                  <div class="clearfix"> </div>
                 </div>
              </div>
             <div class="form-group">
                 <label for="edit-name">Mobile <span class="form-required" title="This field is required.">*</span></label>
                 <input type="text" id="mobile" name="mobile" value="<?=$data['mobile']?>" placeholder="Mobile number" size="15" maxlength="15" class="form-text required">
                 <label id="mobile-status" class="success"></label>
             </div>

             <div class="form-group">
                 <label for="edit-name">Joining Year <span class="form-required" title="This field is required.">*</span></label>
                 <select id="joining" name="joining" class="form-text required">
                 <?php for($i=2000; $i<=2024; $i++){ ?>
                    <option value="<?=$i?>"><?=$i?></option>
                    <?php } ?>
                 </select>
             </div>

             <div class="form-group">
                 <label for="edit-name">Passing Year <span class="form-required" title="This field is required.">*</span></label>
                 <select id="passing_year" name="passing_year" class="form-text required">
                 <?php for($i=2000; $i<=2024; $i++){ ?>
                    <option value="<?=$i?>"><?=$i?></option>
                    <?php } ?>
                 </select>
             </div>

             <div class="form-group">
                 <label for="edit-name">Employablity Status <span class="form-required" title="This field is required.">*</span></label>
                 <input type="text" id="employablity" name="employablity" value="<?=$data['employablity']?>" placeholder="Employablity Status" class="form-text required">
                
             </div>

             <div class="form-group">
                 <label for="edit-name">USN (University Serial Number) <span class="form-required" title="This field is required.">*</span></label>
                 <input type="text" id="usn" name="usn" value="<?=$data['usn']?>" placeholder="University Serial Number"  class="form-text required">
                 
             </div>
              
			  <div class="form-actions">
			    <button type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">Register</button>
              </div>
		 </form>
    </div>
</body>
</html>
