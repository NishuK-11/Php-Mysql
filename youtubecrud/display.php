
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <?php include 'links.php'; ?>
</head>
<body>

    <div class="main-div">
        <h1>List of candidates for web development job</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>degree</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>refer</th>
                            <th>post</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'connection.php';
                        $selectquery = "select * from jobregistration";
                        $query = mysqli_query($con, $selectquery);

                        while($res = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['degree']; ?></td>
                            <td><?php echo $res['mobile']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['refer']; ?></td>
                            <td><?php echo $res['job post']; ?></td>
                            <td><i class="fa fa-facebook"></i></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>