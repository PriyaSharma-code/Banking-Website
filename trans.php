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
    height:2000px;
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
  .header-right {
    float: right;
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
 </style>  
</head>

<body bg-color="black" text="black" background="5.jfif" style="text-align:center;">
       <div class="header">
              <a href="#default" class="logo"><b>Transfer</b></a> 
         <div class="header-right">
           <a class="active" href="index.php">Home</a>
           <a href="allrans.php">View All Transactions</a>
            <a href="allcustomers.php">View All Customers</a>
         </div>
       </div>

       <form action="Transcon.php" method="POST">
     <div>
     <br> <br>
    <select type="text" name="sender" Required>
    	<option>--Choose a sender--</option>
    	<option value="Ananya">Ananya</option>
    	<option value="Arnav">Arnav</option>
    	<option value="Hope">AbhisheHope</option>
    	<option value="Riya">Riya</option>
    	<option value="Surya">Surya</option>
    	<option value="Tina">Tina</option>
    	<option value="Zyanb">Zyanb</option>
    </select>
       <br> <br> <br> <br>
    <select  type="text" name="receiver" Required>
    	<option>--Choose a receiver--</option>
      <option>--Choose a sender--</option>
    	<option value="Ananya">Ananya</option>
    	<option value="Arnav">Arnav</option>
    	<option value="Hope">AbhisheHope</option>
    	<option value="Riya">Riya</option>
    	<option value="Surya">Surya</option>
    	<option value="Tina">Tina</option>
    	<option value="Zyanb">Zyanb</option>
    </select>></br></br> <br>
    Amount to be sent:<input type="text" name="credits" placeholder="Enter credits" Required>
    <br/></br>
    <button class="button " type="submit" value="Make transaction"><a href="http://localhost/bank/allcustomers.php">Confirm</a></button></br></br>
    	
    </form>

    <?php
       $link = mysqli_connect("localhost", "root", "", "mysql");

       if($link === false){
           die("ERROR: Could not connect. " . mysqli_connect_error());
       }
       $sender =  'sender';
       $receiver = 'receiver';
       $credits = 'credits';
       $sql ="INSERT INTO trans( sender, receiver, credits)  VALUES ('$sender', '$receiver','$credits')";
    ?>     
    <div class="footer">
          <p>Never share passwords</p>
    </div>
  </body>
</html>