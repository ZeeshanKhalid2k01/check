<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
    margin:0;
    padding:0;
}
.container {
  position: relative;
  width: 100%;
  /* height: 10%; */
  /* border: 10px solid #622569; */

  /* max-width: 400px; */
}

.container img {
  width: 100%;
  height: 100%;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-35%, 300%);
  -ms-transform: translate(-50%, -50%);
  background-color: #ffcc5c;
  font-size: 16px;
  padding: 12px 24px;
  border: 1px solid black;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  color:black;
  
}

.container .btn:hover {
  background-color: #c0ded9;
  color:black;
}

h1{
    color:Green;
    text-align:center;
}
</style>
</head>
<body>

<!-- <h2>Button on Image</h2>
<p>Add a button to an image:</p> -->

<div class="container">
  <!-- <img src="img_snow.jpg" alt="Snow" > -->
  <!-- <img src="../storage/app/public/images/slide1.png" style="width:100%;height:80%">
 -->

 <h1>&#10004; Email Send Successfully</h1>
  <a href="http://localhost/jobify/public/"><button class="btn">Home</button></a>
  <!-- <a href="http://localhost/jobify/public/"><button class="btn"><i class="fa fa-home"></i></button></a> -->

</div>

</body>
</html>
