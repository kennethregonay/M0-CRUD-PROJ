<?php 
include 'backend.php';
$query = "SELECT * FROM employee";

$result_set = $connection->query($query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4752a58f75.js" crossorigin="anonymous"></script>
</head>
<body>
<nav>
    <div class="logo">
        <a href="index.html"><h4><i class="fas fa-fingerprint"></i>HRIS</h4></a>
    </div>
    <ul class="nav-links">
          <li>
            <a href="#" class="href"><i class="fas fa-building"></i>DEPARTMENT TABLE</a>
        </li>
         <li>
            <a href="#" class="href"><i class="far fa-id-badge"></i>POSITION TABLE </a>
        </li>
          <li>
            <a href="#" class="href"><i class="far fa-id-badge"></i>DEVELOPER</a>
        </li>
    </ul>
    <div class="mobile-view">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
</nav>
<div class="wrapper">
  <fieldset class="field">
    <div class="title">
      Employee Information
    </div>
    <div class="form" >
      <form  method="POST">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" required name="fname">
       </div>  
        <div class="inputfield">
          <label>Middle Name</label>
          <input type="text" class="input" name="mname">
       </div>  
       <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" required name="lname">
       </div>  
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" required name="address"></textarea>
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select required name="gender">
              <option value="">SELECT</option>
              <option value="male">MALE</option>
              <option value="female">FEMALE</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>BirthDate</label>
          <input type="date" class="input" required name="bdate" id="mydate"
          value="2021-12-27">
       </div> 
      <div class="inputfield">
          <label>Position Code</label>
          <input type="number" class="input" required name="poscode">
       </div> 
       <div class="btn">
       <div class="create">
       <div class="inputfield">
        <input type="submit" value="CREATE" name = 'create' class="btn-c">
        </div>
       </div>
      <div class="read">     
      <div class="inputfield">
        <input type="submit" value="READ" name = 'read' class="btn-r">
    </div>  
    </div>
      <div class="update">
       <div class="inputfield">
        <input type="submit" value="UPDATE" name ='update' class="btn-u">
        </div>
    </div>
    <div class="delete">
       <div class="inputfield">
        <input type="submit" value="DELETE" name = 'delete'class="btn-d">
      </div>
      </div>
    </div>
    </div>
  </form>
    </fieldset>
</div>

<div class="content">
  <table class= table> 
<thead>
  <tr>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Gender</th>
    <th>BirthDate</th>
    <th>Position_Code</th>
  </tr>
</thead>
<tbody>  
 <tr>
 <?php
			if ($result_set->num_rows > 0) {
				//output data of each row
				while ($row = $result_set->fetch_assoc()) {
		?>
      <td><?php echo $row ['Firstname']; ?></td>
      <td><?php echo $row ['Middlename']; ?></td>
      <td><?php echo $row ['Lastname']; ?></td>
      <td><?php echo $row ['Address']; ?></td>
      <td><?php echo $row ['Gender']; ?></td>
      <td><?php echo $row ['Birthdate']; ?></td>
      <td><?php echo $row ['Position_Code']; ?></td>
    </tr>
    <?php }
      }
    ?>
    </tbody>
</table>
</div>





    <footer class="footer"> 
        <div class="container">
        <div class="socials">
           <a href="https://web.facebook.com/Netkee"> <i class="fab fa-facebook"></i> Facebook   </a>
            <a href="https://github.com/kennethregonay/M0-CRUD-PROJ"><i class="fab fa-github"></i>  Github  </a>
            <a href="https://www.instagram.com/netkeee/"><i class="fab fa-instagram-square"></i>  Instagram  </a>
        </div>
            <p>
                &copy; 2021 Regonay CRUD||APP <nbsp9> </nbsp9> All Rights Reserved.
            </p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>