<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylese.css">
    <title>Sign In/Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="s"></script>
    <div class="container">
        <div class="form-box" id="login-form">
            <h1>Sign In</h1>
            <form action="uservalidate.php" name="login" method="post">
       <?php
       if($_GET['status']==1 || $_GET['status']==3){
           ?>
           <div class="form-group form-group1">
               <div class="col-sm-12">
                   <?php
                   if($_GET['status']==3){
                   ?>
                   <label><p class="success">Password send to your email id</p></label>
                   <?php }else{ ?>
                   <label><p class="error">Invalid user</p></label>
                   <?php } ?>
               </div>
               <div class="clearfix"> </div>
           </div>
       <?php } ?>
  	    <div class="input-field">
          <i class="fas fa-user"></i><input type="text" name="email" value=""  placeholder="Username" class="form-text required">
        </div>
	    <div class="input-field">
        <i class="fas fa-lock"></i><input type="password" name="password" placeholder="Password" class="form-text required">
        </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
	    </div>
	   </form>
             <p><!-- ... Your existing HTML code ... -->

               
                    <!-- ... Your existing login form ... -->
                    <button onclick="googleSignIn()" type="button" class="google-signin-btn">Sign In with Google</button>
                   
                
                <div class="form-box" id="signup-form" style="display: none;">
                    <!-- ... Your existing signup form ... -->
                    <p>Already have an account? <a href="#" onclick="showSignUp()">Sign In</a></p>
                </div>
                <!-- ... Your existing HTML code ... -->
                </p>
        </div>

        <div class="form-box" id="signup-form" style="display: none;">
            <h1>Sign Up</h1>
            <form>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <button type="su    bmit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="#" onclick="showSignIn()">Sign In</a></p>
        </div>
    </div>
    <script>
        function showSignUp(){
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('signup-form').style.display = 'block';
        }

        function showSignIn(){
            document.getElementById('signup-form').style.display = 'none';
            document.getElementById('login-form').style.display = 'block';

        }
    </script>
    <script>
        function onSignIn(googleUser) {
            // Access user information from the signed-in user
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());
            
            // You can use this information to authenticate the user in your application
        }
    
        function googleSignIn() {
            gapi.auth2.getAuthInstance().signIn().then(
                function(googleUser) {
                    onSignIn(googleUser);
                },
                function(error) {
                    console.log('Google Sign-In failed: ' + error);
                }
            );
        }
    </script>
    
    <!-- Add this script to initialize the Google Sign-In API -->
    <script>
        function startGoogleSignIn() {
            gapi.load('auth2', function() {
                gapi.auth2.init({
                    client_id: '666251746442-05ua2ir99pjpmc8re3hk1gsshf6jee24.apps.googleusercontent.com'
                });
            });
        }
    
        // Initialize Google Sign-In API
        startGoogleSignIn();
    </script>
    
</body>
</html>
