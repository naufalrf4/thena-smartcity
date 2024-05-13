<div class="chatbot-container">
    <button class="chatbot-toggle-btn">Chat</button>
    <div class="chatbot-window">
        <div class="chatbot-header">
            <h3>Chatbot</h3>
            <button class="close-chatbot-btn">&times;</button>
        </div>
        <div class="chatbot-messages">
            <!-- Messages will be appended here -->
        </div>
        <div class="chatbot-input">
            <input type="text" placeholder="Type your message...">
            <button class="send-message-btn">Send</button>
        </div>
    </div>
</div>

<style>
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
}

.chatbot-window {
    display: none;
    position: absolute;
    bottom: 80px;
    right: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 300px;
    max-height: 400px;
    overflow-y: auto;
}

.chatbot-header {
    padding: 10px;
    border-bottom: 1px solid #ccc;
    display: flex;
    justify-content: space-between;
}

.chatbot-header h3 {
    margin: 0;
}

.close-chatbot-btn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #999;
}

.close-chatbot-btn:hover {
    color: #333;
}

.chatbot-messages {
    padding: 10px;
}

.chatbot-input {
    display: flex;
    align-items: center;
    padding: 10px;
    border-top: 1px solid #ccc;
}

.chatbot-input input {
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
}

/* Existing CSS */

/* New CSS for Bubble Chat */
.chatbot-messages {
    overflow-y: auto;
    max-height: 300px; /* Limit height to create a scrolling effect */
}

.message {
    max-width: 70%; /* Limit message width */
    margin-bottom: 10px;
    padding: 8px 12px;
    border-radius: 12px;
    background-color: #007bff;
    color: #fff;
}


.message.user {
    align-self: flex-end;
    background-color: #ccc; /* User message color */
    color: #333; /* Text color for user messages */
}

/* End of New CSS */

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    // Toggle chat window
    $('.chatbot-toggle-btn').click(function() {
        $('.chatbot-window').toggle();
    });

    // Close chat window
    $('.close-chatbot-btn').click(function() {
        $('.chatbot-window').hide();
    });

    // Send message
    $('.send-message-btn').click(function() {
        var message = $('.chatbot-input input').val();
        if (message.trim() !== '') {
            $('.chatbot-messages').append('<div class="message user">' + message + '</div>');
            $('.chatbot-input input').val('');
            // Scroll to bottom
            $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);
            // Simulate AI response (replace with actual API call)
            setTimeout(function() {
                $('.chatbot-messages').append('<div class="message">AI: This is a response from the AI.</div>');
                // Scroll to bottom
                $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);
            }, 1000);
        }
    });
});

</script>
