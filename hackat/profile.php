<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .profile-heading {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .profile-picture {
            max-width: 100px;
            border-radius: 50%;
            margin: 0 auto 15px;
        }

        .profile-item {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .connection-count {
            font-size: 18px;
            color: #4CAF50;
        }

        .file-input {
            margin-top: 15px;
            display: flex;
            justify-content: center;
        }

        .file-input input {
            margin-left: 5px;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-heading">Your Profile</div>
    <img class="profile-picture" src="img3.jpg" alt="Profile Picture">
    <div class="profile-item">Passing Year: 2020</div>
    <div class="profile-item">Current Job: Software Engineer</div>
    <div class="profile-item">Batchmates: 50</div>
    <div class="profile-item connection-count">Number of Connections: 150</div>
    
    <div class="file-input">
        <label for="profileImage">Upload Profile Picture:</label>
        <input type="file" id="profileImage" accept="image/*">
    </div>
</div>

</body>
</html>
