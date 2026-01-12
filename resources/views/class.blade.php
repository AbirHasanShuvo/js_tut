<!DOCTYPE html>
<html>
<head>
    <title>My First Web Page</title>
</head>
<body>

<form action="" method="get">
<input type="text" class="userName" name="u1" value="{{ request()->u1 }}">
<input type="text" class="userName" name="u2" value="{{ request()->u2 }}">
<button type="submit">Submit</button>
</form>
<a href="{{ url('/') }}">Reset</a>

{{-- <script>
    let elements = document.getElementsByClassName("text");

    console.log(elements); // HTMLCollection

    // Access individual element
    console.log(elements[0].innerHTML);
</script> --}}


{{-- <script>
    let elements = document.querySelectorAll(".text");
    elements.forEach(function(el){
        console.log(el.innerHTML);
    });
</script> --}}

{{-- <script>
    let elements = document.getElementsByClassName("text");


    for(i=0; i<=elements.length;i++){
        elements[i].innerHTML = "changed!!";
    }
</script> --}}


<script>
  let inputs = document.getElementsByClassName('userName');

if(inputs[0].value){
    console.log(inputs[0].value);    // Abir Hasan Shuvo Sarker
}
if(inputs[1].value){
    console.log(inputs[1].value);    // Abir Hasan Shuvo Khan
}
if(!inputs[0].value || !inputs[1].value){
    console.log("Empty");
}


</script>

</body>
</html>
