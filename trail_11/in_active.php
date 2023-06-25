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
        .a {
            margin-left: 20px;
            margin-top: 2px;
        }

        .part {
            display: flex;
            margin-top: 10px;
            margin-left: 10px;
            /* height: 100px; */
        }

        .patr_B {
            margin-left: 20px;
        }

        .patr_C {
            margin-left: 20px;
        }

        center {
            font-size: 40px;
            color: red;
        }

        .main {
            width: 100%;
            margin-left: 40%;
            margin-top: 10px;
        }

        a {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <center>In-Active customer list</center>
    <div class="main">
        <form>
            <input type="text" placeholder="searching....." />
            <button class="btn btn-primary">search</button>
        </form>
        <div class="part">
            <div class="patr_A">
                <a href="index.php" class="btn btn-primary">Get All Data</a>
            </div>
            <div class="patr_C">
                <a href="active.php" class="btn btn-success">Active</a>
            </div>
            <div class="patr_B">
                <a href="unpaid.php" class="btn btn-dark">unpaid</a>
            </div>
        </div><br><br>
        <a class="btn btn-primary" href="index.php">back</a>
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
                $sql = "SELECT*from  users where inactive_reason ='undefined'   ORDER BY contactname ASC";
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