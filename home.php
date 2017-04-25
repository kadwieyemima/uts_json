<!DOCTYPE html>
<html>
<head>

<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #cc66ff
}

.topnav a {
  float: left;
  display: block;
  color: #99ffcc;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="semarang.php">Semarang</a>
  <a href="sleman.php">Sleman</a>
  <a href="bali.php">Bali</a>
  <a href="medan.php">Medan</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-center:20px">
<h2>APP WEATHER</h2> 
 <h2>UTS Web Service</h2>
  <p>Nama : Kadwie Yemima Apriyanto Putri</p>
  <p>Nim : 14.01.55.0010</p>
  <h2>Sistem Informasi</p>
  
  <h2>Universitas Stikubank Semarang</h2>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
