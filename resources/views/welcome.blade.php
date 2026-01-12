<!DOCTYPE html>
<html>
<head>
    <title>My First Web Page</title>
</head>
<body>

    <h1>Welcome to My Page!</h1>

    <p id="demo">Javascript can change HTML content</p>

    <button type = "button" onclick = 'document.getElementById("demo").innerHTML = "Hello Javascript"'>Click Me</button>

    <p>Light on off in the below</p>

    <img id="onImage" src="{{ asset('images/on.png') }}" style="width:100px"></image>

    <button onclick="document.getElementById('onImage').src='images/on.png'">Turn On</button>
   <button onclick="document.getElementById('onImage').src='images/off.png'">Turn Off</button>
    <script src="{{ asset('js/app.js') }}">
        
        //this is for the alert message
        // alert("This is your first JavaScript");





         
    </script>
  

</body>
</html>
