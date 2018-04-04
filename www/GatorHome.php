<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="jQuery.min.js"></script>
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <script src="js/bootstrap.min.js"></script>
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #2b0080;  
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #1e0059;
  color: white;
}

.navbar .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
    }
.img-fluid{
    width: 100%;
    height: 90px;
}
    #wrapper {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
    }
    .dry{
        border-color: #2b0080;
        background-color: #2b0080;
        color: white;
    }
    .user {
  display: inline-flex;
  width: 125px;
  height: 125px;
  border-radius: 50%;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.one {
  background-image:url(BLANK_Profile-Picture.jpg);
}
.center-block {  
  display: block;  
  margin-right: auto;
margin-left: 10%;
}
.truecenter-block { 
    display: block;
    margin: auto;
    width: 85%;
    height: 150px;
    border: 10px solid gold;
    padding: 10px;
    text-align: center
}   
    .message{
        display: inline-block;
        width: 150px;
        height: 150px;
        position: relative;
        left: 125%;
        top: 10%;
    }
    .profile{
        display: inline-block;
        position: relative;
        left: 125%;
        top: -60%;
    }
    .center{
        margin: auto;
    }
    .textarea{float: left; width: 400px; height: 200px; padding: 10px;}
    .icons{ bottom: 10;}
</style>
</head>
<body>
<img src="sfsubanner.png" class="img-fluid" alt="Responsive image">
<br>
<div id="wrapper" class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary dry">Emergency Hotline</button>
  <button type="button" class="btn btn-primary dry">Non-Emergency Hotline</button>
    </div>
    <br>
    <div class="container">
  <div class="row">
    <div class="col-sm-4 user one center-block" rotate="90">
    </div>

        </div>
    </div>
<br>

    <div class="textarea">Welcome! Today is <p id="date"></p>
        <p>GatorHealth is a platform that contains a collection of many health and wellness resources that can be found on and off San Francisco State University's campus.</p> 
        <br>
        <h4>Understanding Social Determinants of Health</h4>
        
        <p>"Social determinants of health are conditions in the environments in which people are born, live, learn, work, play, worship, and age that affect a wide range of health, functioning, and quality-of-life outcomes and risks. Conditions (e.g., social, economic, and physical) in these various environments and settings (e.g., school, church, workplace, and neighborhood) have been referred to as “place.” In addition to the more material attributes of “place,” the patterns of social engagement and sense of security and well-being are also affected by where people live. Resources that enhance quality of life can have a significant influence on population health outcomes. Examples of these resources include safe and affordable housing, access to education, public safety, availability of healthy foods, local emergency/health services, and environments free of life-threatening toxins."</p>  
        
        <p style="padding-bottom: 60px;">Click <a href="https://www.healthypeople.gov/2020/topics-objectives/topic/social-determinants-of-health">here</a> to go to find out more about SDOH.</p>

        
    </div>
    <img src="home/SDOH.png"alt="sdoh" style="width:400px;height:300px;" hspace="20" vspace="20">
    <div id="poll" style="float: right; width: 400px; height: 200px; padding: 10px;padding-bottom: 100px;">
<h3>Do you feel you have access to enough resources on San Francisco State University to support your health and wellbeing?</h3>
<form style="float: right; width: 400px; height: 200px; padding: 10px;padding-bottom: 100px;">
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

    
    <a href="https://www.facebook.com/sanfranciscostate/">
        <img class = "icons" src="icons/facebook.png"alt="facebook" style="width:50px;height:50px; top: 100 px; float: right; " hspace="10"></a>
    <a href="https://www.instagram.com/sanfranciscostate/?hl=en"> 
        <img class = "icons" src="icons/insta.png"alt="instagram" style="width:50px;height:50px; top: 100 px; float: right;" hspace="10"></a>
    <a href="https://twitter.com/SFSU?ref_src=twsrc%5Eappleosx%7Ctwcamp%5Esafari%7Ctwgr%5Eprofile"><img class = "icons" src="icons/twitter.png"alt="twitter" style="width:50px;height:50px; top: 100 px; float: right;" hspace="10"></a>
    <a href="https://www.youtube.com/user/sanfranciscostate">
        <img class = "icons" src="icons/youtube.png"alt="youtube"style="width:50px;height:50px; top: 100 px; float: right;" hspace="10"></a>



<div class="navbar" id="myNavbar">
  <a href="GatorHome.php" class="active">Home</a>
  <a href="GatorMap.html">Map</a>
  <a href="GatorPharmacy.html">Pharmacy</a>
  <a href="GatorResources.html">Resources</a>
  <a href="GatorSearch.php">Search</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
    src="js/bootstrap.min.js"
function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
document.getElementById("date").innerHTML = Date();

function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","GatorPoll.php?vote="+int,true);
  xmlhttp.send();
}

</script>

</body>
</html>
