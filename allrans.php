<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transactions</title>
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
  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
  }
 </style> 
</head>

<body bg-color="black" text="black" background="5.jfif" style="text-align:center;">
      <div class="header">
         <a href="#default" class="logo">All Transactions</a>
         <div class="header-right">
           <a class="active" href="index.php">Home</a>
           <a href="allcustomers.php">View All Customers</a>
         </div>
      </div>
      <h3><b>All Transactions:</b></h3>

        <?php
           echo "<table style='border: solid 4px ;'>";
           echo 
               "<th>sender</th>
                <th>receiver</th>
                <th>Balance</th></tr>";

           class TableRows extends RecursiveIteratorIterator {
                function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
            }

           function current() {
                return "<td style='width: 300px;height: 40px; border: 2px solid darkgoldenrod;font-size:24px;color:darkgreen;'>" . parent::current(). "</td>";
            }

           function beginChildren() {
                echo "<tr>";
            }

           function endChildren() {
                echo "</tr>" . "\n";
            }
          }
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "mysql";
          try {
             $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $stmt = $conn->prepare("SELECT sender, receiver,credits FROM trans");
             $stmt->execute();

             // set the resulting array to associative
             $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
             echo $v;
            }
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
           }
          $conn = null;
             echo "</table>";
        ?> 

         <div class="footer">
            <p>Always go for two step autentication.</p>
          </div>
</body>
</html>