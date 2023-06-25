<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trial_11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {

            height: 100vh;
            width: 100%;
            flex-direction: column;
        }

        #btn {

            margin-top: 2px;
            margin-left: 20px;
        }

        .part {
            display: flex;
            margin-top: 10px;
            margin-left: 10px;

        }

        .patr_B {
            margin-left: 20px;
        }

        .patr_C {
            margin-left: 20px;
        }

        .main {
            margin-left: 40%;
        }

        .main h3 {
            margin: 20px 0px;
        }

        .main a {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h3> Unpaid Customer list data</h3>
        <form>
            <input type="text" placeholder="searching....." />
            <button class="btn btn-primary">search</button>
        </form>
        <div class="part">
            <div class="patr_A">
                <a href="index.php" class="btn btn-primary">Get All Data</a>
            </div>
            <div class="patr_B">
                <a href="in_active.php" class="btn btn-danger">In-Active</a>
            </div>
            <div class="patr_C">
                <a href="active.php" class="btn btn-success">Active</a>
            </div>
        </div><br><br>
        <a id="btn" class="btn btn-dark" href="index.php">back</a>

    </div>
    <!----------------- table--------------- -->
    <div class="container">
        <table class="table">
            <thead class="bg-warning text-white">
                <tr>
                    <th>Customer name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Last-order date</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT*from `users` where inactive_reason ='unpaid' ORDER BY contactname ASC";
                // $result_1 = mysqli_query($cont,$sql_1);
                $result = mysqli_query($cont, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['contactname'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['updated_at'] ?></td>
                        <td><?php echo $row['inactive_reason'] ?></td>


                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>