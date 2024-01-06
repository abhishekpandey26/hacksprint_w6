<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram-like Chat</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      background-color: #f3f2ef;
    }

    .message-page {
      display: flex;
      align-items: stretch;
    }

    .users-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    .user-box {
      margin-bottom: 20px;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .user-box:hover {
      transform: scale(1.05);
    }

    .user-avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
    }

    .user-name {
      margin-top: 10px;
      font-size: 14px;
      font-weight: 600;
    }

    .chat-container {
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: white;
    }

    .chat-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }

    .chat-header img {
      width: 30px;
      height: 30px;
      margin-right: 10px;
    }

    .chat-header h2 {
      font-size: 14px;
      font-weight: 600;
      margin: 0;
    }

    .chat-messages {
      padding: 10px;
      overflow-y: auto;
      max-height: 300px;
    }

    .message {
      padding: 8px;
      margin-bottom: 8px;
      border-radius: 4px;
      word-wrap: break-word;
    }

    .message.sent {
      background-color: #0095f6;
      color: #fff;
      align-self: flex-end;
    }

    .message.received {
      background-color: #fff;
      color: #000;
      align-self: flex-start;
    }

    .chat-input {
      display: flex;
      align-items: center;
      padding: 10px;
    }

    #messageInput {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 8px;
      resize: none;
      font-size: 14px;
    }

    button.send-button {
      margin-left: 10px;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background-color: #0095f6;
      color: #fff;
      cursor: pointer;
      outline: none;
    }

    button.send-button:hover {
      background-color: #0080d4;
    }

    button.previous-button {
      margin-top: 10px;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background-color: #ccc;
      color: #fff;
      cursor: pointer;
      outline: none;
    }

    button.previous-button:hover {
      background-color: #999;
    }

    .user-dropdown {
      margin-top: 20px;
      width: 100%;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="message-page">
    <div class="users-container">
      <div class="user-box" onclick="changeUser('Vishal Singh')">
        <img class="user-avatar" src="https://tse3.mm.bing.net/th?id=OIP.wNf-KDpM38whsOWcHeH1EgHaJQ&pid=Api&P=0&h=220" alt="Vishal Singh">
        <div class="user-name">Vishal Singh</div>
      </div>
      <div class="user-box" onclick="changeUser('Abhishek Kumar Pandey')">
        <img class="user-avatar" src="https://media.licdn.com/dms/image/D5603AQEXAyWJUngy6g/profile-displayphoto-shrink_400_400/0/1684313531269?e=1709769600&v=beta&t=2TubEpJ8uynfnha_y0E_hBAUfy6gEgI67U5HNmEQNpc" alt="Abhishek Kumar Pandey">
        <div class="user-name">Abhishek Kumar Pandey</div>
      </div>
      <div class="user-box" onclick="changeUser('Divyansh Gupta')">
        <img class="user-avatar" src="https://media.licdn.com/dms/image/C4E03AQEpapLFscoRMg/profile-displayphoto-shrink_800_800/0/1658853902583?e=1709769600&v=beta&t=5t0de7vK0lmiIoT4bhAszMIihm7oWW22Cn7zHUxxVrs" alt="Divyansh Gupta">
        <div class="user-name">Divyansh Gupta</div>
      </div>
    </div>

    <div class="chat-container">
      <div class="chat-header">
        <img id="userAvatar" src="https://tse3.mm.bing.net/th?id=OIP.wNf-KDpM38whsOWcHeH1EgHaJQ&pid=Api&P=0&h=220" alt="Instagram Logo">
        <h2 id="userName">Vishal Singh</h2>
      </div>
      <div class="chat-messages" id="chatMessages">
        <!-- Messages will be displayed here -->
      </div>
      <div class="chat-input">
        <textarea id="messageInput" placeholder="Type your message..."></textarea>
        <button class="send-button" onclick="sendMessage()">Send</button>
      </div>
    </div>

    <button class="previous-button" onclick="showPreviousMessage()">Previous Message</button>
  </div>

  <script>
    const users = {
      'Vishal Singh': {
        name: 'Vishal Singh',
        avatar: 'https://tse3.mm.bing.net/th?id=OIP.wNf-KDpM38whsOWcHeH1EgHaJQ&pid=Api&P=0&h=220',
        messages: [
          { content: 'Hi there!', sender: 'Vishal Singh', type: 'received' },
          { content: 'Hello!', sender: 'You', type: 'sent' },
          { content: 'How are you?', sender: 'Vishal Singh', type: 'received' },
          { content: "I'm good, thanks!", sender: 'You', type: 'sent' },
          { content: 'What are you up to?', sender: 'Vishal Singh', type: 'received' },
          { content: 'Just working on some coding projects.', sender: 'You', type: 'sent' },
          // Add more messages as needed
        ],
      },
      'Abhishek Kumar Pandey': {
        name: 'Abhishek Kumar Pandey',
        avatar: 'https://media.licdn.com/dms/image/D5603AQEXAyWJUngy6g/profile-displayphoto-shrink_400_400/0/1684313531269?e=1709769600&v=beta&t=2TubEpJ8uynfnha_y0E_hBAUfy6gEgI67U5HNmEQNpc',
        messages: [
          { content: 'नमस्ते!', sender: 'Abhishek Kumar Pandey', type: 'received' },
          { content: 'नमस्ते!', sender: 'You', type: 'sent' },
          { content: 'कैसे हो?', sender: 'Abhishek Kumar Pandey', type: 'received' },
          { content: 'मैं ठीक हूँ, धन्यवाद!', sender: 'You', type: 'sent' },
          { content: 'तुम क्या कर रहे हो?', sender: 'Abhishek Kumar Pandey', type: 'received' },
          { content: 'कुछ कोडिंग पर काम कर रहा हूँ।', sender: 'You', type: 'sent' },
          // Add more messages as needed
        ],
      },
      'Divyansh Gupta': {
        name: 'Divyansh Gupta',
        avatar: 'https://media.licdn.com/dms/image/C4E03AQEpapLFscoRMg/profile-displayphoto-shrink_800_800/0/1658853902583?e=1709769600&v=beta&t=5t0de7vK0lmiIoT4bhAszMIihm7oWW22Cn7zHUxxVrs',
        messages: [
          { content: 'ಹಲೋ!', sender: 'Divyansh Gupta', type: 'received' },
          { content: 'ನೀವು ಹೇಗಿದ್ದೀರಾ?', sender: 'You', type: 'sent' },
          { content: 'ನಾನು ಚೆನ್ನಾಗಿದ್ದೇನೆ, ಧನ್ಯವಾದಗಳು!', sender: 'Divyansh Gupta', type: 'received' },
          { content: 'ನೀವು ಏನು ಮಾಡುತ್ತಿದ್ದೀರಾ?', sender: 'You', type: 'sent' },
          { content: 'ಕೆಲಸ ನಿರ್ವಹಿಸುತ್ತಿದ್ದೇನೆ ಮತ್ತು ಕೆಲಸಗಳನ್ನು ಪೂರೈಸುತ್ತಿದ್ದೇನೆ।', sender: 'Divyansh Gupta', type: 'received' },
          // Add more messages as needed
        ],
      },
    };

    let currentUser = 'Vishal Singh'; // Default user
    let currentMessageIndex = users[currentUser].messages.length - 1;

    function changeUser(username) {
      currentUser = username;
      currentMessageIndex = users[currentUser].messages.length - 1;

      const userAvatar = document.getElementById('userAvatar');
      const userName = document.getElementById('userName');
      const chatMessages = document.getElementById('chatMessages');

      userAvatar.src = users[currentUser].avatar;
      userName.textContent = users[currentUser].name;

      // Clear previous messages
      chatMessages.innerHTML = '';

      // Display previous messages
      users[currentUser].messages.forEach(message => {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', message.type);
        messageElement.textContent = message.content;
        chatMessages.appendChild(messageElement);
      });
    }

    function sendMessage() {
      const messageInput = document.getElementById('messageInput');
      const chatMessages = document.getElementById('chatMessages');

      if (messageInput.value.trim() !== '') {
        const message = document.createElement('div');
        message.classList.add('message', 'sent');
        message.textContent = messageInput.value;
        chatMessages.appendChild(message);

        users[currentUser].messages.push({
          content: messageInput.value,
          sender: 'You',
          type: 'sent',
        });

        messageInput.value = '';
        currentMessageIndex = users[currentUser].messages.length - 1;
      }
    }

    function showPreviousMessage() {
      const chatMessages = document.getElementById('chatMessages');

      if (currentMessageIndex >= 0) {
        const previousMessage = document.createElement('div');
        previousMessage.classList.add('message', users[currentUser].messages[currentMessageIndex].type);
        previousMessage.textContent = users[currentUser].messages[currentMessageIndex].content;
        chatMessages.appendChild(previousMessage);

        currentMessageIndex--;
      }
    }
  </script>
</body>
</html>
