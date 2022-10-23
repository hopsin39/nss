<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HOSPITAL TIME SCHEDULE</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">


</head>


<style>
.wrapper{
  margin-top: 1%;
  
}

.team_member:hover{
    transform: scale(0.9);
    z-index: 1;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
  
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 200px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
  transition: 1s;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: 0px;
  left: 30%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 30px;
  height: 30px;
  padding: 3px;
  margin-top: 3px;
}



.btn{
  padding: 1px 1px;
  background: blueviolet;
  border: none;
  cursor: pointer;
  font-size: 22px;
  font-weight: 500;
  border-radius: 15px;
  height: 40px;
}
.btn:hover{
   color: white;
   background-color: black;
   
}


.pop-up{
  width: 400px;
  background: #fff;
  border-radius: 6px;
  position: absolute;
  top: 50%;
  left: 50%;
   transform: translate(-50%, -50%) scale(0);
   text-align: center;
   padding: 30px 30px;
   visibility: hidden;
   transition: 0.4s;
}
.open-PopUp{
  visibility: visible;
  transform: translate(-50%, -50%) scale(1);
  transition: 0.4s;
}
.pop-up i{
  font-size: 3.3em;
  color: #1fbd00;
}
.pop-up h3{
  margin: 30px 0px 20px 0px;
}
.pay_button{
  background: #fff;
  padding: 10px 15px;
  color: #344595e;
  font-weight: bolder;
  text-transform: uppercase;
  font-size: 14px;
  border-radius: 10px;
  box-shadow: 1px 1px 7px -4px rgba(0,0,0,0.75);
  margin-top: 25px;
  text-decoration: none;
  transition: 0.5;
}



.searchbtn{
  position: relative;
  top: 20%;
  left: 10%;
  font-size: 1.2rem;
  /*transform: translate(-50%, -30%);*/
  width: 50%;
  height: 12%;
  color: black;
  text-align: center;
  border-radius: 0.2rem;
  margin: 2rem 0rem;
  border: 1px solid rgb(255, 255, 255);
  color: purple;
  padding-top:6px;
  padding-bottom: 6px;
  background-color: black;
}
.searchbtn{
   background-color: purple;
   color: white;
}

.searchbtn:hover{
   color: white;
   background-color: whitesmoke;
   border: 2px solid rgb(255, 255, 255);
}



</style>




<body style="background: url('media/Hos.jpg'); background-size: cover;">

<section style="margin-top: 80px; background-color: black; width: 80%; margin-left: 10%; opacity: 90%;">
    <h1 style="font-family: Century Gothic; color: white; font-size: 35px; text-align: center; margin-top: 33px; padding-top: 38px;">Hello!</h1>
    <h1 style="font-family: Century Gothic; color: white; font-size: 35px; text-align: center; margin-top: 40px;"><span style="margin-bottom: 20px;">Welcome to<span style="text-transform: uppercase;"><br> Health Scheduling Sytem</h1>
    <p style="text-align: center; color: yellow; margin-top: 40px; font-size: 20px; width: 100%">Click to check your schedules</p>

<a href="user_login.php"><button type="submit" class="searchbtn" style="background-color: darkblue; color: white; height: 40px; font-size: 17px; width: 80%; margin-left: 3px; pointer-events: !important;">Continue</button> </a>

<p style="font-size: 20px; text-align: center; color: white; padding-bottom: 30px;">Admin please   <a href="admin_login.php"><b style="color: yellow">Click Here......</b></a></p>
     
    

</section>




<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

 <script>
    let popup = document.querySelector(".pop-up");

    function OpnePopUpBox(){
      popup.classList.add("open-PopUp");
    }
    function ClosePopUpBox(){
      popup.classList.remove("open-PopUp");
    }
  </script>


</body>
</html>