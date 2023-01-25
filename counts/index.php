<?php
 
// Username is root
$user = 'coralsherwin2';
$password = '112000117';
 
// Database name is geeksforgeeks
$database = 'coralsherwin2';
 
// Server is localhost with
// port number 3306
$servername='db4free.net:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM blood ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Bloood Inventory</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <link rel="stylesheet" href = "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,
600,700,800,900&display=swap">
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family:'Poppins',san-serif;
           
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;font-family:'Poppins',san-serif;
        }
 
        td {
            font-weight: lighter;
        }
        
        .tr2 .td1 .td4{
           background-color: black;
        }
        section {
        
           
              align-items:center;
              padding:20px 100px;
              top:0;
              left:0;
          }
        
      
          header {
            
              position:absolute;
              top:0;
              left:0;
       
              padding:20px 100px;
              display:flex;
              align-items:center;
              justify-content: space-between;
          }
          header.logo
          {
              position:relative;
              max-width:80px;
          }
          header ul
          {
              position:relative;
              display:flex;
          }
          header ul li
          {
              list-style:none;
          }
    </style>
</head>
 
<body>
    <section>
        <header style="padding-top:5vh;">
            
        
        <a href="../index.html" class="logo"><img src="PRC_LOGO.png"></a>  
        <ul  style="position:relative;display:flex;padding-left:90vh">
            <li style="list-style:none;"><a href="../index.html" style="display:inline-block;margin:left;
            text-decoration:none;color:black;font-weight:bold;font-style:Poppins;">Home</a></li>
        </ul>
        </header>
        <br>
        <br>
        <div style="padding-top:4vh">
            <h1 class="tae">BLOOD SUPPLY</h1>
        
        
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Blood</th>
                <th>Count</th>
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr class = "tr2">
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <b>
                <td class="td1" style="background-color:#FF3D33;font-weight:600 ;">
                    <?php echo $rows['Blood'];?></td></b>
                <td class="td4"style="font-weight:500"><?php echo $rows['total'];?></td>
               
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
        
    </section>
</body>
 
</html>