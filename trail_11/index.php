<?php

$cont = mysqli_connect("varthak.io","esandhai","P@ssw0rd","esandhai")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trial_11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .part {
            display: flex;
            margin-top: 10px;
            margin-left: 10px;
            height: 100px;
        }

        .patr_B {
            margin-left: 20px;
        }

        .patr_C {
            margin-left: 20px;
        }

        .main {
            margin-left: 40%;

            margin-top: 20px;
        }

        .main h3 {
            color: lightslategray;
        }

        .main form {
            margin: 20px 0px;
            margin-left: 60px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h3>All customer data from database</h3>
        <form method="post">
            <input type="text" placeholder="searching....." name="search"/>
            <button class="btn btn-primary" name="submit">search</button>
        </form>
        <div class="part">
            <div class="patr_A">
                <button class="btn btn-primary">Get All Data</button>
            </div>
            <div class="patr_B">
                <a href="in_active.php" class="btn btn-success">In-Active</a>
            </div>
            <div class="patr_C">
                <a href="active.php" class="btn btn-dark">Active</a>
            </div>
            <div class="patr_C">
                <a href="unpaid.php" class="btn btn-danger">unpaid</a>
            </div>


        </div>
    </div>

    <!----------------- table--------------- -->
    <div class="container">
        <table class="table">
            <?php
            function highlightWords($text, $word) {
                $text =preg_replace('#'.preg_quote($word) .'#i','<span style="background-color: #F9F902">\\0</span>',$text);
                return $text;
            }
            if(isset($_POST['submit'])){
                $search = $_POST['search'];
                $sql = "SELECT * from users where f_name like '%$search%' order by f_name asc";
                $result = mysqli_query($cont, $sql);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<thead>
                        <tr>
                        <th>Customer name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Last-order date</th>
                        <th>Status</th>
                        </tr>
                        <thead>
                        ';

                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = !empty($search)?highlightWords ($row['f_name'],$search):$row['f_name'];
                            echo '<tbody>
                                <tr>
                                <td>' . $title . '</td>
                                <td>' . $row['phone'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['updated_at'] . '</td>
                                <td>' . $row['inactive_reason'] . '</td>
                                </tr>
                                
                                <tbody>
                            ';
                        }
                    } else {
                        echo '<h1 class = "text-danger">Data Not Found</h1>';
                    }
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>