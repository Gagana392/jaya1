<html>
     <head>
            <title> LOST AND FOUND </title>
                  <style>
                  body
                     {


                        margin:0;
                        background-color: #C2C2AC;
                     }
                    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
.header-container
{
  background-color:#000000;
  color:#FFFFFF;
  height:157px;
}
.topnav {
  overflow: hidden;
  background-color: #666663;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 114px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

                  </style>
    </head>
    <body>
             <div class = "header-container">

                 <br />
           <h3 align="center"> <b> LOST ITEM DETAILS </b></h3>
           <br />
           <br />
           <br />
           <div class="topnav">
           <a href="lostlist.php">View lost items</a>
           <a href="foundlist.php">View found items</a>
           <a href="found.php">Upload found items</a>
           <a href="login.html">Admin Login</a>

           </div>

    </div>
  <div class = "content-container">
<br />
<br />
<table width="50%" height="30%" bgcolor="white" align="center" >
  <tr>
    <th>Name of person</th>
    <th>Contact of person</th>
    <th>Item name</th>
    <th>Item lost date</th>
    <th>Item description</th>
    <th>Item image</th>

  </tr>
    <?php include("config.php");
session_start();

    $sql="Select * from lost";
$result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){


  echo "<tr>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3] </td>";
    echo "<td>$row[4]</td>";
    echo "<td><img src='$row[5]' height='80' width='80'> </td>";

  echo "</tr>";}
      ?>
</table>



         </div>
</body>
</html>
