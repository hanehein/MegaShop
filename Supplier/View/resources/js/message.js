$(document).ready(function () {
    let currentChatUser;
    //show message
    $(".user-lists li").each(function (index, user) {
        $(user).click(function () {
            $(".alert-message").addClass("hidden");
            $(".current-user-chat").removeClass("hidden");
            currentChatUser = user.querySelector(".user-id").value;
            showMessages(currentChatUser)
        })
    });

    // send message
    $(".send-btn").click(function(){
        const message = $(".message-input").val();
        $(".message-input").val(" ");
        //send message into database
        $.ajax({
            url: "../../Controller/message/sendMessageController.php",
            type: "POST",
            data: {
                currentChatUser : currentChatUser,
                message : message,
                from_send_message: ''
            },
            success: function (results) {
                showMessages(currentChatUser);
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    })


    function showMessages(currentUserID){
        $.ajax({
            url: "../../Controller/message/currentChatController.php",
            type: "POST",
            data: {
                currentUserID: currentUserID,
                from_message: ''
            },
            success: function (results) {
                let messages = JSON.parse(results);
                $(".current-user-name").text("")
                $(".current-user-name").text(messages[0].cus_name);
                $('.current-messages').empty();
                $(messages).each(function (index, message) {
                    const whoSend = message.from_to == 0 ? "justify-items-end" : "justify-items-start";
                    $('.current-messages').append(`
                        <div class="chat-message mb-2">
                            <div class="grid ${whoSend}">
                                <p class="max-w-[500px] p-3 bg-slate-200 rounded-md">
                                    ${message.message}
                                </p>
                            </div>
                        </div>
                    `);
                })
    
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    }

});
