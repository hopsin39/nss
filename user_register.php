<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TIME SCHEDULING SYSTEM</title>
  <link rel="icon" href="wat.jpg">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<style>
   *{
      margin: 0px;
   }


input{
   height: 2rem;
   border: 0.1rem solid black;
   adding-left: 5px; 
   margin-left: 20px; 
   width: 80%; 
   text-align: left;
   margin-top: 15px;
   margin-right: 3%;
   padding-left: 10px;
   font-family: Times New Roman;
   font-size: 18px;
   text-transform: capitalize;
}


}
.header .navbar a{
   font-size: 1.9rem;
   margin-left: 2rem;
   color:var(--black);
}
.home-packages{
    margin-top: 70px;
    margin-left: 20%;
    margin-right: 20%;
    height: 100%;
    background: white;
    border-radius: 10px;
    align-content: center;

}


.header-area {
    background: #142440;
    width: 100%;
    padding: 12px 30px;
    z-index: 999;
}
.header-container {
    display: table;
    width: 100%;
    margin: auto;
}
.site-logo {
    float: left;
    padding: 17px 0px;
}
.site-logo a {
    color: #fff;
    text-decoration: none;
    font-size: 24px;
    font-weight: 600;
    padding: 15px;
}
.site-logo span {
    color: #ff4a04;
}
.site-nav-menu {
    float: right;
}
.primary-menu{
    list-style: none;
}
.primary-menu li {
    display: inline-block;
    margin: 21px 5px;
}
.primary-menu a {
    color: #fff;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 15px 10px;
    transition: .5s;
}
.primary-menu a:hover,
.primary-menu .active {
    color:#ff4a04;   
}
.primary-menu li a:after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background: #ff4a04;
    bottom: 0px;
    left: 0;
    transition: all .5s;
}
.primary-menu li a:hover:after {
    width: 100%;
}
.primary-menu li .active:after{
    width: 100%;
}
.mobile-nav{
    display: none;
}
.mobile-nav i{
    float: right;
    margin: 10px;
    padding: 10px;
    font-size: 24px;
    color: #fff;
    outline: none;
    cursor: pointer;
}


/* Responsive css */

@media only screen and (max-width: 900px) {
    .site-nav-menu {
        float: none;
        position: absolute;
        background: #142440;
        width: 100%;
        left: 0;
        top: 85px;
        padding: 30px 0px 150px 0px;
        border-top: 1px solid #4a4848;
        clip-path: circle(0% at 100% 0%);
        transition: all .8s;
    }
    .primary-menu li {
        display: block;
        text-align: center;
        margin: 25px 5px;
    }
    .mobile-nav{
        display: block;
    }
    .mobile-menu {
        clip-path: circle(112% at 100% 0%);
    }
    .primary-menu li a:after{
        display: none;
    }

   </style>


<body>

    

<section class="home-packages">

   <div class="box-container">     
      <h2 style="text-align: center; text-transform: uppercase; padding-top: 30px">Health Worker's Registration</h2>
      <div class="box">

<div class="form-class">
   <form action="user_registers.php" method="POST" enctype="multipart/form-data">
      <p style="text-align: center; margin: 10px; font-size: 15px;">Please Provide Your Details </p>
                            
<div class="form-group row">      
<div class="col-md-6">
<input type="text" name="full_name" id="notifications_name" class="form-control" placeholder="Full Name" required/>
<br>

<div style="margin-top: 10px;">
<label style="text-align: center; text-transform: uppercase; font-size: 15px; padding-left: 20px; margin-top: 20px;">GENDER</label>

<div style="display: flex; margin-left: 10%; margin-right: 30%; width: 60%;">
<input style="height: 20px;" type="radio" name="gender" value="Male" required> <span style="font-size: 17px; margin-top: 10px;">Male</span>

<input style="height: 20px; margin-bottom: 12px;"  type="radio" name="gender" value="Female"> <span style="font-size: 17px; margin-top: 10px;">Female</span>
</div>

<label style="text-align: center; text-transform: uppercase; font-size: 15px; padding-left: 20px; margin-top: 20px;">Date Of Birth</label>

<input type="date" name="date_of_birth" class="form-control" required/>


<input type="number" name="staff_ID" id="Qualification" class="form-control" placeholder="Staff ID" required/>

<input type="email" name="email" id="Qualification" class="form-control" placeholder="Email" required/>

<input type="number" name="contact" id="Qualification" class="form-control" placeholder="Contact" required/>

<input type="text" name="password" id="Qualification" class="form-control" placeholder="Password" required/>

<p style="padding-top: 20px;">Upload Profile Image</p>
<input type="file" name="image" id="Qualification" class="form-control" placeholder="Password" required/>


</div>

</div>
</div>
</div>
</div>

 <div class="form-group row">
<div>
<input name="submit" type="submit" style="background: black; cursor: pointer; color: white; text-align: center; width: 80%; padding-top: 10px; padding-bottom: 30px; margin-bottom: 20px; margin-left: 26px;" value="Register"/>

</div>
</div>   
</form>   

      </div>

   </div>

</section>


</div>



<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-----------PAYMENT SCRIPT---->
<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_e79e10d214590c96ecf08e6f60b12b55b6b2fb2c', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: 1 * 100,
    currency: 'GHS',
    ref: 'UniTrade'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      window.location = "http://localhost/sells/isell.php?transaction.call";
      alert('Transaction Cancelled.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/sells/verify_transaction.php?reference=" + response.reference;

    }
  });

  handler.openIframe();
}
</script>

<script src="https://js.paystack.co/v1/inline.js"></script>



</body>
</html>