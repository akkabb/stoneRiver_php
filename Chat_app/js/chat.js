let chat = {}

chat.fetchMessages = function () {
    $.ajax({
        url: 'ajax/chat.php',
        type: 'post',
        data: {method: 'fetch'},
        success: function(data) {
            $('.chat.messages').html(data);
        }
    })
}

chat.throwMessage = function (message) {
    if ($.trim(message).length != 0) {
        $.ajax({
            url: 'ajax/chat.php',
            type: 'post',
            data: {method: 'throw', message : 'message'},
            success: function(data) {
                chat.fetchMessages();
                chat.entry.val('');
            }
        })
    }
}

chat.entry = $('.chat .entry');
chat.entry.bind('keydown', function(e) {
    if (e.keyCode === 13 && e.shiftKey === false) {
        console.log(e.keyCode);
        chat.throwMessage($(this).val());
        // Throw message
        e.preventDefault();
    }
});

chat.interval = setInterval(chat.fetchMessages, 8000);
chat.fetchMessages();