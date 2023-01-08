<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link href="donor_cardcss.css" rel="stylesheet">
</head>

<body onload="window.print()">

    <?php
    include_once("../database/dbconn.php");
    $id = $_GET['nic'];
    $sql = "SELECT *, CURDATE() AS today FROM auth_donor WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <!-- Opt. 01 - START -->
    <div class="wrapper">
        <div class="card x1"></div>

        <div class="card">
            <p>
                Name : <?php echo $row['name']; ?>
            </p>
            <p>
                Birthday : <?php echo $row['dob']; ?>
            </p>
            <p>
                Blood Group : <?php echo $row['blood_group']; ?>
            </p>
            <p> <b>
                    AFTER MY DEATH I AGREE TO DONATE MY
                </b></p>
            <p>
                <?php $s = $row['type_of_organ'];
                echo substr($s, 1); ?> TO THE ORGANIZATION
            </p>

            <p>
                <b>May be used for the treatment of others !! </b>
            </p>
            <p>
                Signature : &nbsp; &nbsp; Date : <?php echo $row['today']; ?>
            </p>
            <p>
                In Emergency, Contact : <?php echo $row['nominee_name']; ?>
            </p>
            <p>
                Telephone : <?php echo $row['nominee_mobile']; ?>
            </p>
            <p class="last">
                KEEP THIS CARD WITH YOU AT ALL TIME, PLEASE INFORM YOUR RELATIVES/FAMILY ABOUT YOUR WISH
            </p>

        </div>
    </div>

</body>

</html>