<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    
<style>

.contact-info{
  margin-top:15%;
  display: flex;
  width: 100%;
  max-width: 1200px;
  align-items: center;
  justify-content: center;
  padding: 0 20px;
}


.card{
  background: #2f3542;
  padding: 0 20px;
  margin: 0 10px;
  width: calc(33% - 20px);
  height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #fff;
  cursor: pointer;
  border-radius: 5%;
}

.card-icon{
  font-size: 28px;
  background: #ff6348;
  width: 60px;
  height: 60px;
  text-align: center;
  line-height: 60px !important;
  border-radius: 50%;
  transition: 0.3s linear;
}

.card:hover .card-icon{
  background: none;
  color: #ff6348;
  transform: scale(1.6);
}

.card p{
  margin-top: 20px;
  font-weight: 300;
  letter-spacing: 2px;
  max-height: 0;
  opacity: 0;
  transition: 0.3s linear;
}

.card:hover p{
  max-height: 40px;
  opacity: 1;
}


@media screen and (max-width:800px) {
  .contact-info{
    flex-direction: column;
  }
  .card{
    width: 100%;
    max-width: 300px;
    margin: 10px 0;
  }
}

 body {
  background-image: url('img/contact1.jpg');
   height: 100%; 
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
}
</style>  

    
    
  </head>
  
  <body>
    
    
    <?php
  include 'navbar.php';
?>
      
      <center><div class="contact-info">
      
      <div style="background-color: gray;background-color: #9dc5c3;
    background-image: linear-gradient(to bottom right, violet , yellow);" class="card">
        <i class="card-icon far fa-envelope" style='font-size:40px;color:green'></i>
        <p style="color:black;">emailnikhilk1@gmail.com</p>
      </div>

      <div style="background-color: gray;background-color: #9dc5c3;
        background-image: linear-gradient(to bottom right, violet , yellow); " class="card">
        <i class="card-icon fas fa-phone-square-alt" style='font-size:40px;color:green'></i>
        <p style="color:black;">+91984747757</p>
      </div>

      <div style="background-color: gray;background-color: #9dc5c3;
    background-image:linear-gradient(to bottom right, violet , yellow);" class="card">
        <i class="card-icon fas fa-map-marker-alt" style='font-size:40px;color:green'></i>
        <center><p style="color:black;">Main Road,Nashik,Maharastra,India</p></center>
      </div>
    </div>
</div>
</center>
  </body>
</html>
