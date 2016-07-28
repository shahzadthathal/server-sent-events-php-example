<!DOCTYPE html>
<html>
<body>

<h1>Getting server updates</h1>
<div id="result"></div>

<script>

var n;

 if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
// Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var options = {
      body: "Warm Welcome!!!",
      icon: "img/rock.jpg"
  }
    n = new Notification("Hi there!",options);
  }
  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        n = new Notification("Hi there!");
      }
    });
  }

  var n;

  function spawnNotification(theBody,theIcon,theTitle) {
  var options = {
      body: theBody,
      icon: theIcon
  }
   n = new Notification(theTitle,options);
}


if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("server.php");
    source.onmessage = function(event) {
    	//var msg = $.parseJSON(event.data);
    	spawnNotification(event.data,'img/ok.png','New Notification');
    	
    	n.close.bind(n);

        document.getElementById("result").innerHTML += event.data + "<br>";
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>



</body>
</html>


