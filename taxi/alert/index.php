<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Firebase Hosting</title>
    <style media="screen">
      body {
        font-family: Roboto, Arial, sans-serif;
        background: #ECEFF1;
        color: rgba(0,0,0,0.87);
      }

      a {
        color: rgb(3,155,229);
      }

      #message {
        max-width: 400px;
        margin: 40px auto;
        box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
        border-radius: 2px;
        background: white;
        padding: 16px 24px;
      }

      #message h1 {
        font-size: 22px;
        font-weight: 500;
        text-align: center;
        margin: 0 0 16px;
      }

      #message h3 {
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        margin: 0 0 16px;
      }

      #message p {
        font-weight: 300;
        line-height: 150%;
      }

      #message ul {
        list-style: none;
        margin: 16px 0 0;
        padding: 0;
        text-align: center;
      }

      #message li a {
        display: inline-block;
        padding: 8px;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: 500;
        background: rgb(3,155,229);
        color: white;
        border: 1px solid rgb(3,155,229);
        border-radius: 3px;
        font-size: 14px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);
      }
    </style>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- firebase setting -->
    <script src="https://www.gstatic.com/firebasejs/3.5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.5.0/firebase-messaging.js"></script></script>
    
    
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
 
    
    
    
    
    <script>
      // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBbUdRyfXHCU7MzuOej7Pco4U87hXlBmxk",
    authDomain: "we-love-taxi.firebaseapp.com",
    databaseURL: "https://we-love-taxi.firebaseio.com",
    projectId: "we-love-taxi",
    storageBucket: "",
    messagingSenderId: "735683540189"
  };
  firebase.initializeApp(config);

      // Retrieve Firebase Messaging object.
      const messaging = firebase.messaging();
    </script>
  </head>
  <body>
    <div id="message">
      <h1>Hello Web FCM</h1>
      <p>Click on Subscribe button to hello world!</p>
      <ul>
        <li><a href="javascript:subscribeFCM()">Subscribe</a></li>
        <li><a href="javascript:showToken()">Show Token</a></li>
      </ul>
      <h3>Token</h3>
      <p id="token"></p>
    </div>

    <script type="text/javascript">
      function subscribeFCM() {
        messaging.requestPermission()
        .then(function() {
          console.log('Notification permission granted.');
        })
        .catch(function(err) {
          console.log('Unable to get permission to notify. ', err);
        });
      }

      function showToken() {
        // Get Instance ID token. Initially this makes a network call, once retrieved
        // subsequent calls to getToken will return from cache.
        messaging.getToken()
        .then(function(currentToken) {
          if (currentToken) {
            console.log("currentToken", currentToken);
            $("#token").html(currentToken);
          } else {
            // Show permission request.
            console.log('No Instance ID token available. Request permission to generate one.');
            $("#token").html("foo");
          }
        })
        .catch(function(err) {
          console.log('An error occurred while retrieving token. ', err);
        });
      }

      messaging.onTokenRefresh(function() {
        messaging.getToken()
        .then(function(refreshedToken) {
          console.log('Token refreshed.');
          $("#token").html(refreshedToken);
        })
        .catch(function(err) {
          console.log('Unable to retrieve refreshed token ', err);
        });
      });

      // Handle incoming messages. Called when:
      // - a message is received while the app has focus
      // - the user clicks on an app notification created by a sevice worker
      //   `messaging.setBackgroundMessageHandler` handler.
      messaging.onMessage(function(payload) {
        console.log("Message received. ", payload);
      });
    </script>
  </body>
</html>