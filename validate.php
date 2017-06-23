<!DOCTTYPE html>
<html>
<head>
<script>
function validateform()
 {
 var x=document.forms["myform"]["fname"].value; 
 if(x=="")
 {
 alert("Text not filled out");
 return false;
 }
 }
</script>
</head>
<body>
<form name="myform" action="test3.php" method="post">
Name:<input type="text" name="fname" />
<input type="submit" value="submit" />
</body>
</html>