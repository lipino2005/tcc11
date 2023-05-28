<!DOCTYPE html>
<html>
<head>
    <title>Chatbot GPT</title>
    <style>
        .container {
            width: 400px;
            margin: auto;
            margin-top: 100px;
            border: 2px solid black;
            padding: 10px;
            font-family: Arial;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .message-container {
            margin-bottom: 10px;
        }

        .user-message {
            background-color: #007bff;
            color: white;
            float: right;
            padding: 10px;
            border-radius: 10px;
            margin-right: 10px;
        }

        .bot-message {
            background-color: #e4e4e4;
            color: black;
            float: left;
            padding: 10px;
            border-radius: 10px;
            margin-left: 10px;
        }

        .text-input {
            width: 100%;
            padding: 10px;
            border: 2px solid black;
            border-radius: 5px;
            margin-top: 10px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message-container">
            <div class="bot-message">Olá! Sou o Chatbot GPT, em que posso ajudar você?</div>
        </div>

        <div class="input-container">
            <input type="text" id="text-input" placeholder="Digite sua mensagem...">
            <button id="submit-button" class="submit-button">Enviar</button>
        </div>
    </div>

    <script>
        const chatContainer = document.querySelector(".container");
        const textInput = document.querySelector("#text-input");
        const submitButton = document.querySelector("#submit-button");

        submitButton.addEventListener("click", function() {
            const userMessage = textInput.value;
            appendMessage(userMessage, "user");

            // Aqui você pode adicionar a lógica do chatbot GPT
            const botMessage = "Desculpe, eu não sou um verdadeiro chatbot GPT. Isso é apenas um exemplo básico.";
            appendMessage(botMessage, "bot");

            textInput.value = ""; // Limpa a caixa do input
        });

        function appendMessage(message, sender) {
            const messageContainer = document.createElement("div");

            if (sender === "user") {
                messageContainer.innerHTML = `<div class="user-message">${message}</div>`;
            } else {
                messageContainer.innerHTML = `<div class="bot-message">${message}</div>`;
            }

            chatContainer.insertBefore(messageContainer, chatContainer.lastChild);
        }
    </script>
</body>
</html>