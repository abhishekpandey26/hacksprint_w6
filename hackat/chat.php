<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f2f2f2;
        }

        #chat-container {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        #chat-messages {
            padding: 10px;
            height: 300px;
            overflow-y: scroll;
            background-color: #fff;
        }

        #input-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #fff;
        }

        #message-input {
            flex-grow: 1;
            padding: 8px;
            margin-right: 10px;
        }

        #send-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="chat-container">
    <div id="chat-messages"></div>
    <div id="input-container">
        <input type="text" id="message-input" placeholder="Type your message...">
        <button id="send-button">Send</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chatMessages = document.getElementById('chat-messages');
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');

        sendButton.addEventListener('click', function () {
            const message = messageInput.value.trim();
            if (message !== '') {
                const newMessage = document.createElement('div');
                newMessage.textContent = message;
                chatMessages.appendChild(newMessage);
                messageInput.value = '';
            }
        });
    });
</script>

</body>
</html>
