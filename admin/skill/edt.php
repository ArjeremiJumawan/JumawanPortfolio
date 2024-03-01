<?php
include '../../database.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $perc = $_POST['perc'];


    $sql = "INSERT INTO `skills`(title,content,perc) VALUES ( '$title','$content','$perc')";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Location: edt.php?msg=New data created");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet" />
    <title>Skills</title>
</head>

<body class="edtpage">
    <div class="container">
        <div style="margin-bottom: 20px; display: flex; justify-content: center;">
            <div>
                <h3>Skills</h3>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td><label for="">Title:</label></td>
                            <td><input class="form" type="text" name="title" placeholder="title here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Content:</label></td>
                            <td><input class="form" type="text" name="content" placeholder="content here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Precentage:</label></td>
                            <td><input class="form" type="text" name="perc" placeholder="percent here"></td>
                        </tr>
                    </table>
                    <br>
                    <button type="submit" name="submit">Add</button>
            </div>
            </form>
        </div>
        <div>
            <?php
            include '../../database.php';

            $sql = "SELECT * FROM `skills`";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) == 0) {
                echo 'No Data Yet';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>


                    <div class="incontent">

                        <div>
                            >
                            <span style="font-weight: bolder;">
                                <?php echo $row['title'] ?>
                            </span> |
                            <?php echo $row['content'] ?> |
                            <?php echo $row['perc'] ?>%
                            <br>
                            <a href="del.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
        <br>
        <br>
        <div><a href="../index.php"> <button>Exit</button></a></div>

    </div>
    </div>


</body>

</html>