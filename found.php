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

    <h3 align="center"> <b> FOUND ITEM UPDATE </b></h3>
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


               <form name="lostForm" method="POST" action="upfound.php" enctype="multipart/form-data">
<br/>
<br/>
<br />
<table width="50%" height="30%" bgcolor="#787870" align="center">

<tr>
<td colspan=4><center><font size=4 color="black"><b>Enter The Details Here</b></font></center></td>
</tr>

<tr>
<td> <font color="black"> <b> Name of person: </b> </font> </td>
<td><input type="text" size=50 name="personname" required></td>
</tr>

<tr>
<td> <font color="black"> <b> Contact of person: </b> </font> </td>
<td><input type="text" size=50 name="contactnumber" required></td>
</tr>
<tr>
<td> <font color="black"> <b>  Item name : </b> </font> </td>
<td><input type="text" size=50 name="item" required></td>
</tr>

<tr>
<td> <font color="black"> <b> Item lost date : </b> </font> </td>
<td><input type="date" size=50 name="lost" required></td>
</tr>

<tr>
<td> <font color="black"> <b> Item description : </b> </font> </td>
<td><input type="text" name="description" rows="4" cols="52" required></td>
</tr>
<tr>
<td> <font color="black"> <b> Item image : </b> </font> </td>
<td><input type="file" name="pic" accept="image/*" required></td>
</tr>

<tr>

<td> &nbsp &nbsp &nbsp &nbsp <input type="submit"  value="submit"></td>
</tr>

</table>
</form>


         </div>
</body>
</html>
