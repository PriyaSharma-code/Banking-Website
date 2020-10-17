<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Website</title>
    <style>
* {box-sizing: border-box;}

  body { 
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

 .header {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 20px 10px;
  }

  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 25px;
    border-radius: 4px;
  }

  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }

  .header a:hover {
    background-color: #ddd;
    color: black;
  }

  .header a.active {
    background-color: dodgerblue;
    color: white;
  }

  .header-right {
    float: right;
  }

  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
  
    .header-right {
      float: none;
    }
 }

   body {margin:0;height:2000px;}
   .icon-bar {
     position: fixed;
     top: 50%;
     -webkit-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
     transform: translateY(-50%);
   }
   
   .icon-bar a {
     display: block;
     text-align: center;
     padding: 16px;
     transition: all 0.3s ease;
     color: white;
     font-size: 20px;
   }
   
   .icon-bar a:hover {
     background-color: #000;
   }
   
   .facebook {
     background: #3B5998;
     color: white;
   }
   
   .twitter {
     background: #55ACEE;
     color: white;
   }
   
   .google {
     background: #dd4b39;
     color: white;
   }
   
   .linkedin {
     background: #007bb5;
     color: white;
   }
   
   .youtube {
     background: #bb0000;
     color: white;
   }
   
   .content {
     margin-left: 75px;
     font-size: 30px;
   }

   .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: red;
     color: white;
     text-align: center;
    }

.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
  border-radius: 50%;
}

  .btn-group .button:not(:last-child) {
     border-bottom: none; /* Prevent double borders */
  }

  .btn-group .button:hover {
    background-color: #3e8e41;
  }

  .text {
         width: 300px;
         padding: 300px;
         margin: 300px;
         }
  </style>
</head>

<body bg-color="black" text="black" background="5.jfif" >
      <div class="header">
         <a href="#default" class="logo">Banking Website</a>
         <div class="header-right">
           <a href="allcustomers.php">View All Customers</a>
           <a href="allrans.php">View All Transactions</a>
         </div>
       </div>
       <div class="icon-bar">
         <a href="https://www.facebook.com/thesparksfoundation.info/" class="facebook"><i class="fa fa-facebook"></i></a> 
         <a href="https://www.facebook.com/thesparksfoundation.info/" class="twitter"><i class="fa fa-twitter"></i></a> 
         <a href="https://www.thesparksfoundationsingapore.org/" class="google"><i class="fa fa-google"></i></a> 
         <a href="https://www.linkedin.com/groups/10379184/" class="linkedin"><i class="fa fa-linkedin"></i></a>
         <a href="https://www.linkedin.com/groups/10379184/" class="youtube"><i class="fa fa-youtube"></i></a> 
       </div>

       <dic class="text">
       <b centre><h1 style="text-align:center;">The Sparks Foundation</h1>
       <h2 style="text-align:center;">Web Design Internship<h2>
       <br>
       <h3 style="text-align:center;">Task 1: Banking Website</b>
       <p style="text-align:center;">◇ Create a simple dynamic website which has the following specs.<br>
          ◇ Start with creating a dummy data in database for upto 10 customers.
             Database options: Mysql, Mongo, Postgres, etc. Customers table will
             have basic fields such as name, email, current balance etc. Transfers
             table will record all transfers happened.<br>
          ◇ Flow: Home Page > View all Customers > Select and View one Customer >
            Transfer Money > Select customer to transfer to > View all Customers .<br>
          ◇ No Login Page. No User Creation. Only transfer of money between
            multiple users.<br>
          ◇ Host the website at 000webhost, github.io, heroku app or any other free
           hosting provider. Check in code in gitlab.<br></p></h3></centre></div>

         <div class="footer">
            <p>Keep all passwords safe.</p>
          </div>
  </body>
</html>