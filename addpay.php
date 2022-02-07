<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body style="background: rgb(130,195,249); background: linear-gradient(90deg, rgba(130,195,249,1) 0%, rgba(201,255,201,1) 72%, rgba(255,254,195,1) 100%);">

    <form class="w-75 mx-auto" style="border-radius: 10px; box-shadow: 0px 0px 5px black; background-color:white;" method="POST" action="addpay.php">
        <h4 class="mt-4 ms-5 fw-bold pt-3 mb-3" style="color: purple;">ADD NEW STUDENTS</h4>
        <div>
            <label for="Name" class="form-label ms-5 fw-bold">Name</label>
            <input type="name" name="name" class="form-control  w-75 ms-5" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="Payment_Schedule" class="form-label ms-5 fw-bold">Payment_Schedule</label>
            <input type="text" name="Payment_schedule" class="form-control w-75 ms-5" required>
        </div>
        <div >
            <label for="Bill_Number" class="form-label ms-5 fw-bold">Bill_Number</label>
            <input type="number" name="bill_number" class="form-control w-75 ms-5" required>
        </div>
        <div >
            <label for="Amount_Paid" class="form-label ms-5 fw-bold mt-3">Amount_Paid</label>
            <input type="number" name="amount_paid" class="form-control w-75 ms-5" required>
        </div>
        <div >
            <label for="Balance_Amount" class="form-label ms-5 fw-bold mt-3">Balance_Amount</label>
            <input type="number" name="balance_amount" class="form-control w-75 ms-5" required>
        </div>
        <div >
            <label for="Date" class="form-label ms-5 fw-bold mt-3">Date</label>
            <input type="date" name="date" class="form-control  w-75 ms-5" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-4 ms-5 mb-3 fw-bold w-25" style="background-color: purple;">Save</button>
    </form>

    <?php
        include 'conecter.php';
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $Payment_schedule = $_POST['Payment_schedule'];
            $bill_number = $_POST['bill_number'];
            $amount_paid = $_POST['amount_paid'];
            $balance_amount = $_POST['balance_amount'];
            $date = $_POST['date'];

            $sql = "INSERT INTO payment_details(name, Payment_schedule, bill_number, amount_paid, balance_amount, date) VALUES ('$name','$Payment_schedule','$bill_number','$amount_paid','$balance_amount','$date')";
            $result = mysqli_query($conne,$sql);

            echo '
                <script>
                    window.location.href = "payment.php";
                </script>
            ';
        }
    ?>

    


</body>

</html>