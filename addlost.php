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
     <h3 align="center"> <b> ADD LOST ITEM </b></h3>
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


               <form name="lostForm" method="POST" action="uplost.php" enctype="multipart/form-data">
<br/>
<br/>
<br />
<table width="50%" height="30%" bgcolor="#787870" align="center">

<tr>
<td colspan=4><center><font size=4 color="white"><b>Enter The Details Here</b></font></center></td>
</tr>

<tr>
<td> <font color="white">Name of person: </font> </td>
<td><input type="text" size=50 name="personname" required></td>
</tr>

<tr>
<td> <font color="white">Contact of person: </font> </td>
<td><input type="text" size=50 name="contactnumber" required></td>
</tr>
<tr>
<td> <font color="white"> Item name : </font> </td>
<td><input type="text" size=50 name="item" required></td>
</tr>

<tr>
<td> <font color="white"> Item lost date : </font> </td>
<td><input type="date" size=50 name="lost" required></td>
</tr>

<tr>
<td> <font color="white"> Item description : </font> </td>
<td><input type="text" name="description" rows="4" cols="52" required></td>
</tr>
<tr>
<td> <font color="white"> Item image : </font> </td>
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
