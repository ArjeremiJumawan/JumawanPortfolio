<?php
include '../../database.php';
if (isset($_POST['submit'])) {
    $school = $_POST['school'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    $sql = "INSERT INTO `education`(schoolName, course, year) VALUES ('$school','$course', '$year')";

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
    <title>Eductaion</title>
</head>

<body class="edtpage">
    <div class="container">
        <div style="margin-bottom: 20px; display: flex; justify-content: center;">
            <div>
                <h3>Eductaion</h3>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td><label for="">School:</label></td>
                            <td><input class="form" type="text" name="school" placeholder="school here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Course:</label></td>
                            <td><input class="form" type="text" name="course" placeholder="course here"></td>
                        </tr>
                        <tr>
                            <td><label for="">Year:</label></td>
                            <td><input class="form" type="text" name="year" placeholder="year here"></td>
                        </tr>
                    </table>

                    <button type="submit" name="submit">Add</button>
            </div>
            </form>
        </div>

        <div>
            <br><br><br>
            <div style="display: flex; justify-content: center;">
                <table style="width: 60%;" class="educTable">
                    <thead>
                        <tr>
                            <th>School</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th style="width: 60px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../database.php';

                        $sql = "SELECT * FROM `education`";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <td><?php echo $row['schoolName'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td style="text-align: right;">
                                <a href="del.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
                            </td>

                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
        <br>
        <div><a href="../index.php"> <button>Exit</button></a></div>

    </div>
    </div>


</body>

</html>