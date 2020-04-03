<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Object Properties</h2>


<p id="demo"></p>

<script>
var person = {
  firstname:"Abir",
  lastname:"karim",
  age:50,
  eyecolor:"blue",
  nationality:"Bangladeshi"
};

document.getElementById("demo").innerHTML =
person.firstname + " is " + person.nationality + ".";
</script>

</body>
</html>
