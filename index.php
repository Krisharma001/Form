<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body{
  background-color: #FFD5C9;
    }
    .container{
      position: relative;
      top: 110px;
    }
    .heading{
      font-family: century-gothic;
      color: F4CO95;
      position: absolute;
      left: 650px;
      top: 30px;
    }
    .gender{
      position: absolute;
      margin-left: 100px;
    }
  </style>
</head>
<body>
<h1 class="heading">FORM</h1>
<div class="container">
  <form action="index1.php" method="post">
      <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="name" placeholder="full_name">
        <label for="floatingInput">Name</label>
      </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="floatingInput">Email Address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="subject">
          <label for="floatingInput">Subject</label>
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Message</label>
        <div class="gender">
        </div>
        Select your Gender:  <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
          <label class="form-check-label" for="gender">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="gender1" value="female">
          <label class="form-check-label" for="gender1">Female</label>
        </div>
        </div>
        <div class="developer">
        Type of Developer:  <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="developer[]" value="frontend">
          <label class="form-check-label" for="inlineCheckbox1">Frontend</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="developer[]" value="beckend">
          <label class="form-check-label" for="inlineCheckbox2">Backend</label>
        </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
  </form>
  </div>
  <div class="container">
  <table id="table" class="table table-hover">
    <thead>
        <tr>
          <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Gender</th>
            <th>Developer</th>
            </tr>
    </thead>
    <tbody>
      <?php 
        require_once('conn.php');
      $query = "SELECT * FROM fc";
      $result = mysqli_query($conn, $query); 

      while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['Name'] ?></td>
            <td><?= $row['Email Address'] ?></td>
            <td><?= $row['Subject']?></td>
            <td><?= $row['Message'] ?></td>
            <td><?= $row['Gender'] ?></td>
            <td><?= $row['Developer'] ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>