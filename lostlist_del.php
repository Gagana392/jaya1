<html>
     <head>
            <title> LOST AND FOUND </title>
                  <style>
                  body
                     {

                                         margin:0;
                                         background-color: #C2C2AC;
                     }
                     .button {
                         background-color: #F0F004; /* Green */
                         border: none;
                         color: black;
                         padding: 15px 32px;
                         text-align: center;
                         text-decoration: none;
                         display: inline-block;
                         font-size: 16px;
                         margin: 4px 2px;
                         cursor: pointer;
                         -webkit-transition-duration: 0.4s; /* Safari */
                         transition-duration: 0.4s;
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
                       padding: 14px 173.5px;
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
     <h3 align="center"> <b> DELETE LOST ITEM </b></h3>
     <br />
     <br />
     <br />
     <div class="topnav">
     <a href="addlost.php">Add lost item</a>
     <a href="lostlist_del.php">Delete lost item</a>
     <a href="foundlist_del.php">Delete found item</a>

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
      <th>Remove</th>

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
    echo "<td><a href=delete.php?item_lost=$row[2]>Delete</a></td>";

  echo "</tr>";}
      ?>
</table>



         </div>
</body>
</html>
