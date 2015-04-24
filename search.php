<html>
<head>
<script>
function search(str) {
	
    if (str == "") {
        document.getElementById("searchResults").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("searchResults").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","query.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<input type=text name=searchText></text>
<input type=button name="searchButton" value="search" onClick="search(this.form.searchText.value)">
</form>
<br>
<div id="searchResults"></div>

</body>
</html>