





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: red;}
#News {background-color: green;}
#Contact {background-color: blue;}
#About {background-color: orange;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'red')">Elementary School</button>
<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Middle School</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">High School</button>
<!-- <button class="tablink" onclick="openPage('About', this, 'orange')">About</button> -->

<div id="Home" class="tabcontent">
  <h3>Elementary School</h3>
  <p>Elementary School is where the heart is..</p>
</div>

<div id="News" class="tabcontent">
  <h3>Middle School</h3>
  <p>Some Middle School this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>High School</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 