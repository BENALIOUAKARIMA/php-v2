<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div id="container" class="d-flex">
        <!-- start sidebar-->
        <?php
       include('sidebar.php')

       ?>
        <div class="container">
            <!-- start navbar -->
            <?php
       include('navbar.php')

       ?>
            <div class="container">
                <div class="container d-flex align-items-center justify-content-between mt-3">
                    <h4>Student List</h4>
                    <div class="d-flex  align-items-center"> <i class="bi bi-chevron-expand" style="color: blue;"></i><a href="add.php"><button type="button" class="btn btn-primary">ADD NEW STUDENT</button></a>
                    </div>

                </div>
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Enroll number</th>
                            <th scope="col">Date</th>
                            <th></th>
                        </tr>
                        <?php
                            include ('conecter.php');
                            $sql = "SELECT * FROM students";
                            $result = mysqli_query($conne,$sql);
                            if($result){
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo '<tr>
                                            <td><img src="img/std.jpg" alt="photo" style="width: 70px;"></td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['phone'].'</td>
                                            <td>'.$row['enroll_number'].'</td>
                                            <td>'.$row['date'].'</td>
                                            <td>
                                                <a href="update.php?id='.$row['id'].'"><i class="bi bi-pencil" style="color:blue;"></i></a>
                                                <a href="delete.php?id='.$row['id'].'"><i class="bi bi-trash" style="color: red;"></i></a>
                                            </td>
                                        </tr>';
                                }
                            }
                            mysqli_close($conne);
                        ?>
                        
                    </thead>

            </div>
        </div>

    </div>

    </div>

</body>

</html>