<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="tp.css">
    <title>Form 3</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>

<?php 
      if (isset($_GET['fbtn'])) {
        if ($_GET['fbtn'] == 'success') {
          echo '<script>alert("Details Saved Successfilly ")</script>';
        }
      }
      if (isset($_GET['sem1'])) {
        if ($_GET['sem1'] == 'success') {
        echo '<script>alert("Semester 1 details submitted successfully ")</script>';
        }
        if ($_GET['sem1'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';
          }
      }
      if (isset($_GET['sem2'])) {
        if ($_GET['sem2'] == 'success') {
        echo '<script>alert("Semester 2 details submitted successfully ")</script>';
        }
        if ($_GET['sem2'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';
          }
      }
      if (isset($_GET['sem3'])) {
        if ($_GET['sem3'] == 'success') {
        echo '<script>alert("Semester 3 details  submitted successfully ")</script>';
        }
        if ($_GET['sem3'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';
          }
      }
      if (isset($_GET['sem4'])) {
        if ($_GET['sem4'] == 'success') {
        echo '<script>alert("Semester 4 details  submitted successfully ")</script>';
        }
        if ($_GET['sem4'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';
          }
      }
      if (isset($_GET['sem5'])) {
        if ($_GET['sem5'] == 'success') {
        echo '<script>alert("Semester 5 details  submitted successfully ")</script>';
        }
        if ($_GET['sem5'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data ")</script>';
          }
      }
      if (isset($_GET['sem6'])) {
        if ($_GET['sem6'] == 'success') {
        echo '<script>alert("Semester 6 details submitted successfully ")</script>';
        }
        if ($_GET['sem6'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';
          }
      }
      if (isset($_GET['sem7'])) {
        if ($_GET['sem7'] == 'success') {
        echo '<script>alert("Semester 7 details submitted successfully ")</script>';
        }
        if ($_GET['sem7'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';
          }
      }
      if (isset($_GET['sem8'])) {
        if ($_GET['sem8'] == 'success') {
        echo '<script>alert("Semester 8 details submitted successfully ")</script>';
        }
        if ($_GET['sem8'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data ")</script>';
          }
      }
?>
<div class="container mt-5">
 <br>
  <h1>Education Qualification</h1>
  <br>
    <form action="form3Back.php" method="POST" >
        <div class="form-group">
         <label for="exampleInputEmail1">10th Marks : </label>
         <input type="text" name="sscmarks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your 10th percentage">
         <label for="exampleInputEmail1">School Passing Date : </label>
         <input type="date" name="sscdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date & Year of passing">
         <br>
         <label for="board">Select your School Board:</label><br>
         <select name="sscboard">
            <option value="SSC">SSC</option>
            <option value="ICSE">ICSE</option>
            <option value="CBSE">CBSE</option>
            <option value="Others">Others</option>
        </select>
        </div> 
        <hr>
        <div class="form-group">
        <label for="exampleInputEmail1">12th / Diploma Marks : </label>
         <input type="text" name="dipmarks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12th / Diploma percentage">
        <label for="exampleInputEmail1">12th / Diploma Passing Date : </label>
         <input type="date" name="dipdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date & Year of passing">
         <br>
        </div> 
        <input type="submit" name="fbtn" value="Save Above Details" class="btn btn-primary">
        <br>
        <br> 
        <hr>
        <br>
        <br>
          <div class="form-group">
          <h3>Academic Records</h3>
          <br>
          </div>
             <div>
             <label>SEMESTER 1</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 1 Percentage:</label>
             <input type="text" name="sem1per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem1attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem1date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem1sub">
             <br>
             <br>
             <input type="submit" name="sem1btn" value="Save SEM 1 Details" class="btn btn-primary">
             </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 2</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 2 Percentage:</label>
             <input type="text" name="sem2per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem2attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem2date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem2sub">
             <br>
             <br>
             <input type="submit" name="sem2btn" value="Save SEM 2 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 3</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 3 Percentage:</label>
             <input type="text" name="sem3per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem3attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem3date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem3sub">
             <br>
             <br>
             <input type="submit" name="sem3btn" value="Save SEM 3 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 4</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 4 Percentage:</label>
             <input type="text" name="sem4per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem4attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem4date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem4sub">
             <br>
             <br>
             <input type="submit" name="sem4btn" value="Save SEM 4 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 5</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 5 Percentage:</label>
             <input type="text" name="sem5per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem5attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem5date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem5sub">
             <br>
             <br>
             <input type="submit" name="sem5btn" value="Save SEM 5 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 6</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 6 Percentage:</label>
             <input type="text" name="sem6per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem6attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem6date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem6sub">
             <br>
             <br>
             <input type="submit" name="sem6btn" value="Save SEM 6 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 7</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 7 Percentage:</label>
             <input type="text" name="sem7per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem7attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem7date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem7sub">
             <br>
             <br>
             <input type="submit" name="sem7btn" value="Save SEM 7 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 8</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Sem 8 Percentage:</label>
             <input type="text" name="sem8per">
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem8attd">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem8date">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem8sub">
             <br>
             <br>
             <input type="submit" name="sem8btn" value="Save SEM 8 Details" class="btn btn-primary">
            </div>
            </div>
            <br>
            <br>
    <div>
    <br>
    <br>
  </form>
  <a href="studentHome.php" class="btn btn-primary">Go Home</a>
    
  <br>
  <br>
</div>
</body>
</html>
