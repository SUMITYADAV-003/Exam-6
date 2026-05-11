<!DOCTYPE html>
<html>
<body id="body">

<h2 id="myText">Hello! Change my color!</h2>
<button onclick="changeBg()">Change Background</button>
<button onclick="changeText()">Change Text</button>

<script>
function changeBg() {
    document.getElementById('body').style.backgroundColor = "lightblue";
}
function changeText() {
    document.getElementById('myText').style.color = "red";
    document.getElementById('myText').innerHTML = "Text Changed!";
}
</script>

</body>
</html>