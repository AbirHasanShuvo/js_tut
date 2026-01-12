<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <p id="id01">Id 01</p>
    <p id="id02">Id 02</p>
    <p id="id03">This is the three</p>

    <p id="demo"></p>

    <p id="change">this is the change of an HTML</p>

    <button id = "myButton"></button>

    {{-- for the Jquery --}}
    {{-- <script>
        $(document).ready(function(){
            var myElements = $("#id01");
            $("#demo").text("the text from the id03 paragraph is : "+myElements[0].innerHTML)

        })
        </script> --}}

{{-- for the Javascript --}}
{{-- <script>
    const myElement = document.getElementById("id01");
    document.getElementById("demo").innerHTML = "the text from the id01 is " + myElement.innerHTML;
</script> --}}

{{-- finding by tag name --}}

{{-- <script>
    $(document).ready(function(){
        var myElements = $("p");
        $("#demo").text("the text in the first paragraph is "+ myElements[0].innerHTML)
    })
</script> --}}


{{-- in below i write to the id01, i mean re-write --}}

{{-- <script>
$(document).ready(function() {
  var myElement = $("#id01");
  myElement.text("Hello Sweden!");
});
</script> --}}

{{-- for hiding something --}}

{{-- <script>
    $(document).ready(function name() {
        $("#id03").hide();
        
    })
</script> --}}


{{-- <script>
$(document).ready(function() {
  $("#id03").show();   // hide it
  
});
</script> --}}

{{-- <script>
document.getElementById("demo").style.fontSize = "80px";
</script> --}}

<script>
    $(document).ready(function(){
        $("#id01").remove();
    })
</script>

<script>
const button = ducument.getElementById("myButton");
button.addEventListener("click", function() {
    
    this.innerHTML = "you clicked me!";
})

</script>

    </body>
</html>