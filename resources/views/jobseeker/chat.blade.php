@extends('layouts.app')
@section('content')
@include('jobseeker.jobseeker_sidebar')
<div class="chat-container">
  <div class="chat-header">
    <h2>Chat Title</h2>
  </div>
  <div class="chat-body">
    <div class="message received">
      <div class="avatar"></div>
      <div class="message-content">
        <p>Hello!</p>
        <span class="message-time">10:00 AM</span>
      </div>
    </div>
    <div class="message sent">
      <div class="message-content">
        <p>Hi! How can I help you today?</p>
        <span class="message-time">10:01 AM</span>
      </div>
    </div>
    <div class="message received">
      <div class="avatar"></div>
      <div class="message-content">
        <p>I have a question about my account.</p>
        <span class="message-time">10:03 AM</span>
      </div>
    </div>
    <div class="message sent">
      <div class="message-content">
        <p>Sure, what's your question?</p>
        <span class="message-time">10:05 AM</span>
      </div>
    </div>
  </div>
  <div class="chat-footer">
    <input type="text" placeholder="Type your message...">
    <button>Send</button>
  </div>
</div>

<style>
body {
            background-image: url('../img/login.jpg');
            background-size: cover;
        }
        .chat-container {
  max-width: 800px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.chat-header {
  padding: 20px;
  background-color: #f2f2f2;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.chat-body {
  padding: 20px;
  overflow-y: scroll;
  height: 400px;
}

.message {
  display: flex;
  margin-bottom: 20px;
}

.received {
  align-self: flex-start;
}

.sent {
  align-self: flex-end;
}

.avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #ccc;
  margin-right: 10px;
}

.message-content {
  background-color: #f2f2f2;
  padding: 10px 15px;
  border-radius: 10px;
}

.message-content p {
  margin: 0;
  font-size: 14px;
}

.message-time {
  font-size: 12px;
  color: #777;
  margin-left: 10px;
}

.chat-footer {
  padding: 20px;
  display: flex;
  align-items: center;
}

.chat-footer input[type="text"] {
  flex: 1;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-right: 10px;
  font-size: 14px;
}

.chat-footer button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 15px;
  font-size: 14px;
  cursor: pointer;
}

.chat-footer button:hover {
  background-color: #0069d9;
}

    </style>
@endsection
