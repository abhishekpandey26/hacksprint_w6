<?php
session_start();
include_once("classes/model.php");
if(!isloggedin()){
  header("location:/hackat/login.php");
}
$id=$_SESSION['id'];
$user = getUsers($id);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Final</title>
  </head>
  <body>
    <!-- Header Starts -->
    <div class="header">
      <div class="header__left">
        <img src="img1.png" alt="" />
        <div class="header__search">
          <i class="material-icons"> search </i>
          <input type="text" />
        </div>
      </div>

     
    <!-- Header Ends -->

    <!-- Main Body Starts -->
    <div class="body__main">
      <!-- Sidebar Starts -->
      <div class="header__right">
       
        <div class="headerOption">
          <i class="material-icons headerOption__icon"> home </i>
        <a href="/hackat/index.php"><h3>Home</h3></a>
        </div>
        <div class="headerOption">
          <i class="material-icons headerOption__icon"> supervisor_account </i>
          <a href="/hackat/groups.php">
            <h3>Groups</h3></a>
        </div>
        <div class="headerOption">
          <i class="material-icons headerOption__icon"> business_center </i>
          <h3>Recruitment</h3>
        </div>
        <div class="headerOption">
          <i class="material-icons headerOption__icon"> chat </i>
          <a href="/hackat/message.php"><h3>Messaging</h3></a>
        </div>
        <div class="headerOption">
          <i class="material-icons headerOption__icon"> notifications </i>
                 <a href="/hackat/notification.php"><h3>Notifications</h3></a>
        </div>
        <div class="headerOption">
          <i class="material-icons headerOption__icon"> account_circle </i>
               <a href="/hackat/profile.php"><h3>Me</h3></a>
        </div>
        <div class="headerOption">
            <i class="material-icons headerOption__icon"> account_circle </i>
            <a href="/hackat/search.php"> <h3>Search Alumni</h3></a>
          </div>
          <div class="headerOption">
            <i class="material-icons headerOption__icon"> account_circle </i>
            <a href="/hackat/donate.php"> <h3>donation</h3></a>
          </div>
          <div class="headerOption">
            <i class="material-icons headerOption__icon"> logout </i>
            <a href="/hackat/logout.php"> <h3>Logout</h3></a>
          </div>
      </div>
    </div>
      <div class="sidebar">
        <div class="sidebar__top">
          <img src="https://images.unsplash.com/photo-1579546929518-9e396f3cc809?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&w=1080" alt="" />
          <i class="material-icons sidebar__topAvatar"> account_circle </i>
          <h2><?=$user['name']; ?></h2>
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
            <p>linkdin profile</p>
            <p class="sidebar__statNumber"></p>
          </div>
          <div class="sidebar__stat">
            <p><?=$user['mobile']; ?> </p>
            <p class="sidebar__statNumber"></p>
          </div>
        </div>

        <div class="sidebar__bottom">
          <p>batchmates</p>
          <div class="sidebar__recentItem">
            <span class="sidebar__hash">-</span>
            <p></p>
          </div>
          
         
          
          <div class="sidebar__recentItem">
            <span class="sidebar__hash">-</span>
            <p>Started my own business</p>
          </div>
        </div>
      </div>
      <!-- Sidebar Ends -->

      <!-- Feed Starts -->
      <div class="feed">
        <div class="feed__inputContainer">
          <div class="feed__input">
           
            <i class="material-icons"> create </i>
            <input placeholder="post">
            <form>
              <input type="text" />
              <button type="submit">Send</button>
            </form>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: #70b5f9" class="material-icons"> insert_photo </i>
              <h4>Photo</h4>
            </div>
            
            <div class="inputOption">
              <i style="color: #c0cbcd" class="material-icons"> event_note </i>
              <h4>Event</h4>
            </div>
            <div class="inputOption">
              <i style="color: #7fc15e" class="material-icons"> calendar_view_day </i>
              <h4>Write Article</h4>
            </div>
          </div>
        </div>

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Abhishek</h2>
              <p>web dev</p>
            </div>
          </div>

          <div class="post__body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio quisquam sapiente illum, expedita velit dolor error minima, aliquam sunt earum! Incidunt fuga asperiores, assumenda, tempora mollitia, quisquam recusandae beatae atque quidem quia laudantium. Quaerat veritatis, sapiente laudantium accusamus repellendus unde quam mollitia eaque, provident tempora rem vitae, quas voluptas. </p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Vishal Singh</h2>
              <p>Manager</p>
            </div>
          </div>

          <div class="post__body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque facilis aspernatur obcaecati! Optio laudantium quia illo corrupti distinctio repellat consectetur.</p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Somanath Goudar</h2>
              <p>Job Description</p>
            </div>
          </div>

          <div class="post__body">
            <p>Message here</p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Somanath Goudar</h2>
              <p>Job Description</p>
            </div>
          </div>

          <div class="post__body">
            <p>Message here</p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Somanath Goudar</h2>
              <p>Job Description</p>
            </div>
          </div>

          <div class="post__body">
            <p>Message here</p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Somanath Goudar</h2>
              <p>Job Description</p>
            </div>
          </div>

          <div class="post__body">
            <p>Message here</p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->

        <!-- Post Starts -->
        <div class="post">
          <div class="post__header">
            <i class="material-icons sidebar__topAvatar"> account_circle </i>
            <div class="post__info">
              <h2>Somanath Goudar</h2>
              <p>Job Description</p>
            </div>
          </div>

          <div class="post__body">
            <p>Message here</p>
          </div>

          <div class="feed__inputOptions">
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> thumb_up </i>
              <h4>Like</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> comment </i>
              <h4>Comment</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> share </i>
              <h4>Share</h4>
            </div>
            <div class="inputOption">
              <i style="color: gray" class="material-icons"> send </i>
              <h4>Send</h4>
            </div>
          </div>
        </div>
        <!-- Post Ends -->
      </div>
      <!-- Feed Ends -->

      <!-- Widgets Starts -->
      

      <!-- Widgets Ends -->
    </div>
    <!-- Main Body Ends -->
  </body>
</html>