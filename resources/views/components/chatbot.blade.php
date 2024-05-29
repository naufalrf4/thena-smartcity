<div class="chatbot-container">
    <button class="chatbot-toggle-btn">
        <span class="material-icons">smart_toy</span>
    </button>
    <div class="chatbot-overlay"></div>
    <div class="chatbot-window">
        <div class="chatbot-header">
            <h3>Chatbot Semapor</h3>
            <button class="close-chatbot-btn">&times;</button>
        </div>
        <div class="chatbot-messages">
            <div class="message">Halo! Saya adalah Chatbot Semapor. Ada yang bisa saya bantu?</div>
        </div>
        <div class="chatbot-input-container">
            <input type="text" placeholder="Ketik pesan..." class="chatbot-input">
            <button class="send-message-btn">
                <span class="material-icons">send</span>
            </button>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');

    .chatbot-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .chatbot-toggle-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        font-size: 24px;
        cursor: pointer;
        outline: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .material-icons {
        font-size: 32px;
    }

    .chatbot-overlay {
        display: hidden;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
        z-index: 999;
    }

    .chatbot-window {
        display: hidden;
        position: fixed;
        bottom: 85px;
        right: 20px;
        width: 350px;
        height: 75%;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px 8px 0 0;
        overflow-y: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .chatbot-header {
        padding: 10px;
        border-bottom: 1px solid #ccc;
        display: flex;
        justify-content: space-between;
        background-color: #007bff;
        color: #fff;
        border-radius: 8px 8px 0 0;
    }

    .chatbot-header h3 {
        margin: 0;
        font-size: 18px;
    }

    .close-chatbot-btn {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #fff;
    }

    .close-chatbot-btn:hover {
        color: #333;
    }

    .chatbot-messages {
        padding: 10px;
        flex: 1;
        overflow-y: auto;
    }

    .chatbot-input-container {
        display: flex;
        align-items: center;
        padding: 10px;
        border-top: 1px solid #ccc;
        background-color: #fff;
    }

    .chatbot-input {
        flex: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 5px;
    }

    .send-message-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .message {
        max-width: 70%;
        margin-bottom: 10px;
        padding: 8px 12px;
        border-radius: 12px;
        background-color: #007bff;
        color: #fff;
    }

    .message.user {
        align-self: flex-end;
        background-color: #ccc;
        color: #333;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function generateChatId() {
            return 'chat-' + Math.random().toString(36).substr(2, 9);
        }

        var chatId = localStorage.getItem('chatId');
        if (!chatId) {
            chatId = generateChatId();
            localStorage.setItem('chatId', chatId);
        }

        $('.chatbot-window').hide();
        $('.chatbot-overlay').hide();

        $('.chatbot-toggle-btn').click(function() {
            $('.chatbot-window').toggle();
            $('.chatbot-overlay').toggle();
        });
        
        $(document).click(function(event) {
            if (!$(event.target).closest('.chatbot-window, .chatbot-toggle-btn').length) {
                $('.chatbot-window').hide();
                $('.chatbot-overlay').hide();
            }
        });

        $('.chatbot-window').click(function(event) {
            event.stopPropagation();
        });

        $('.close-chatbot-btn').click(function() {
            $('.chatbot-window').hide();
            $('.chatbot-overlay').hide();
        });

        $('.send-message-btn').click(sendMessage);
        $('.chatbot-input').keypress(function(e) {
            if (e.which == 13) {
                sendMessage();
            }
        });

        function sendMessage() {
            var message = $('.chatbot-input').val();
            if (message.trim() !== '') {
                $('.chatbot-messages').append('<div class="message user">' + message + '</div>');
                $('.chatbot-input').val('');
                $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);

                $.ajax({
                    url: 'https://api-chat.nrfdev.site/',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        chatId: chatId,
                        message: message
                    }),
                    success: function(response) {
                        $('.chatbot-messages').append('<div class="message">' + response.response + '</div>');
                
                        $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);
                    },
                    error: function() {
                        $('.chatbot-messages').append('<div class="message">Error: Unable to get a response from the AI.</div>');
                        $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);
                    }
                });
            }
        }
    });
</script>
