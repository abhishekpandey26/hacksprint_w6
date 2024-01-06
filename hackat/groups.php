<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Groups</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f2f2f2;
        }

        #group-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .chat-group {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .group-name {
            font-size: 18px;
            font-weight: bold;
        }

        .group-messages {
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            height: 150px;
            overflow-y: scroll;
        }

        .message-input {
            margin-top: 10px;
            display: flex;
        }

        .message-input input {
            flex-grow: 1;
            padding: 8px;
            margin-right: 10px;
        }

        .message-input button, .message-input input[type="file"] {
            padding: 8px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .message-input button {
            background-color: #4CAF50;
            color: #fff;
        }

        input[type="file"] {
            display: none;
        }
    </style>
</head>
<body>

<div id="group-container">
    <div class="chat-group">
       
        <div class="group-name">2020 batch</div>
       
        <div class="message-input">
           
            <input type="file" id="fileInput" accept=".txt, .pdf, .docx">
            <button onclick="sendMessage('group1-messages')">join</button>
            
        </div>
    </div>

    <div class="chat-group">
        <div class="group-name">2023 batch</div>
        <div class="message-input">
           
            <input type="file" id="fileInput" accept=".txt, .pdf, .docx">
            <button onclick="sendMessage('group1-messages')">join</button>
            
        </div>
        
    </div>
    <div class="chat-group">
       
        <div class="group-name">2019 batch</div>
       
        <div class="message-input">
           
            <input type="file" id="fileInput" accept=".txt, .pdf, .docx">
            <button onclick="sendMessage('group1-messages')">join</button>
            
        </div>
    </div>
    <div class="chat-group">
       
        <div class="group-name">2021 batch</div>
       
        <div class="message-input">
           
            <input type="file" id="fileInput" accept=".txt, .pdf, .docx">
            <button onclick="sendMessage('group1-messages')">join</button>
            
        </div>
    </div>
    <div class="chat-group">
       
        <div class="group-name">2028 batch</div>
       
        <div class="message-input">
           
            <input type="file" id="fileInput" accept=".txt, .pdf, .docx">
            <button onclick="sendMessage('group1-messages')">join</button>
            
        </div>
    </div>
    <div class="chat-group">
       
        <div class="group-name">2025 batch</div>
       
        <div class="message-input">
           
            <input type="file" id="fileInput" accept=".txt, .pdf, .docx">
            <button onclick="sendMessage('group1-messages')">join</button>
            
        </div>
    </div>


    <!-- Add more chat groups as needed -->

</div>

<script>
    function sendMessage(groupId) {
        const messageInput = document.querySelector(`#${groupId} + .message-input input[type="text"]`);
        const message = messageInput.value.trim();

        if (message !== '') {
            const groupMessages = document.getElementById(groupId);
            const newMessage = document.createElement('div');
            newMessage.textContent = message;
            groupMessages.appendChild(newMessage);
            messageInput.value = '';
        }
    }

    function uploadFile(groupId) {
        const fileInput = document.querySelector(`#${groupId} + .message-input input[type="file"]`);
        const file = fileInput.files[0];

        if (file) {
            const groupMessages = document.getElementById(groupId);
            const newMessage = document.createElement('div');
            newMessage.textContent = `File Uploaded: ${file.name}`;
            groupMessages.appendChild(newMessage);
            fileInput.value = '';
        }
    }
</script>

</body>
</html>
