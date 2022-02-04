<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <!-- cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body style="background: rgb(130,195,249);
background: linear-gradient(90deg, rgba(130,195,249,1) 0%, rgba(201,255,201,1) 72%, rgba(255,254,195,1) 100%);">

<!-- start body -->
<form class="w-75 mx-auto" style="border-radius: 10px; box-shadow: 0px 0px 5px black; background-color:white;" method="POST" action="conecter.php">
    <h4 class="mt-4 ms-5 fw-bold pt-3 mb-3" style="color: purple;">ADD NEW STUDENTS</h4>
    <div>
    <label for="name" class="form-label ms-5 fw-bold">Name</label>
    <input type="name" name="name" class="form-control  w-75 ms-5" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label ms-5 fw-bold">Email address</label>
    <input type="email" name="email" class="form-control w-75 ms-5" required>
  </div>
  <div >
    <label for="phone" class="form-label ms-5 fw-bold">Phone</label>
    <input type="text" name="phone" class="form-control w-75 ms-5" required>
  </div>
  <div >
    <label for="enroll_number"  class="form-label ms-5 fw-bold mt-3">Enroll Number</label>
    <input type="text" name="enroll_number" class="form-control w-75 ms-5" required>
  </div>
  <div >
    <label for="date" class="form-label ms-5 fw-bold mt-3">Date</label>
    <input type="date" name="date" class="form-control  w-75 ms-5" required>
  </div>
  <!-- button -->
  <button type="submit" class="btn btn-primary mt-4 ms-5 mb-3 fw-bold w-25" style="background-color: purple;" name="submit">Save</button>
</form>



</body>
</html>