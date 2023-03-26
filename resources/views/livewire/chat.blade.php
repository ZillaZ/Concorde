<div id="father">
    <div id="chats">
        
    </div>
    <div id="conversation">
        <div id="messages" wire:poll.1000ms="update">
            @foreach ($messages as $message)
                <div id="message">
                    <l id="usr"> {{$message->user_id}} </l>
                    <l id="val"> {{$message->message}} </l>
                </div>
            @endforeach
        </div>
        <div id="text-area">
            <form wire:submit.prevent="send" wire:submit="$emit('update')">
            <input wire:model="message" type="text" autocomplete="off"/>
            <button> Send </button>
            </form>
        </div>
    </div>
</div>
<style>
html {
    background-color: rgb(10, 10, 10);
}

/* Style for the father container */
#father {
  display: flex;
  flex-direction: row;
  height: 100%;
  width: 100%;
  background-color: #202225;
}

/* Style for the chat container */
#chats {
  display: flex;
  flex-direction: column;
  width: 20%;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  background-color: #2f3136;
}

/* Style for each chat user */
#chat-usr {
  display: flex;
  align-items: center;
  padding: 10px;
  color: #b9bbbe;
  cursor: pointer;
}

/* Style for the chat user name */
#c-usr {
  font-size: 16px;
  font-weight: 600;
  margin-left: 10px;
}

/* Style for the conversation container */
#conversation {
  display: flex;
  flex-direction: column;
  width: 80%;
  background-color: #36393f;
}

/* Style for the messages container */
#messages {
  display: flex;
  flex-direction: column;
  overflow-y: auto;
  height: calc(100vh - 90px);
}

/* Style for each message container */
#message {
  display: flex;
  flex-direction: row;
  padding: 10px;
}

/* Style for the user name in the message */
#usr {
  color: #43b581;
  font-weight: 700;
  margin-right: 5px;
}

/* Style for the value in the message */
#val {
  color: #b9bbbe;
}

/* Style for the text area container */
#text-area {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  background-color: #40444b;
}

/* Style for the input field */
#text-area input[type=text] {
  flex: 1;
  padding: 10px;
  background-color: #202225;
  color: #b9bbbe;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: 500;
  outline: none;
}

/* Style for the send button */
#text-area button {
  padding: 10px 20px;
  margin-left: 10px;
  background-color: #43b581;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  outline: none;
  transition: background-color 0.2s ease;
}

/* Style for the send button on hover */
#text-area button:hover {
  background-color: #3a913a;
}

</style>