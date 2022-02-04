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
        <!--  sidebar-->
        <?php
       include('sidebar.php')

       ?>
        <div class="container">
            <!--navbar -->
            <?php
       include('navbar.php')

       ?>
            <div class="container">
                <div class="container d-flex align-items-center justify-content-between mt-3">
                    <h4 class="fw-bold">Payment Details</h4>
                    <a href="" class="fs-5"><i class="bi bi-chevron-expand" style="color: blue;"></i></a>
                </div>

            </div>
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment schedule</th>
                        <th scope="col">Bill number</th>
                        <th scope="col">Amount paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date</th>
                        <th></th>
                    </tr>

                </thead>

                <tbody>

                <?php
                  include('table payment.php')
                  ?>

                </tbody>
            </table>

            </table>

        </div>
    </div>

    </div>

    </div>

</body>

</html>