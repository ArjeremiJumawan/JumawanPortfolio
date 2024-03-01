<?php
include '../../database.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $abtme = $_POST['abtme'];
    $exp = $_POST['exp'];
    $eml = $_POST['eml'];
    $cnt = $_POST['cnt'];
    $ocp = $_POST['ocp'];
    $bdy = $_POST['bday'];
    $web = $_POST['web'];
    $adr = $_POST['addr'];


    $sql = "UPDATE `admindetail` SET `firstName`='$fname',`lastName`='$lname',`aboutMe`='$abtme',`experience`='$exp',`email`='$eml',`contact`='$cnt',`occup`='$ocp',`birthday`='$bdy',`web`='$web',`address`='$adr'  WHERE id=1";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Location: ../index.php?msg=data updated");
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
    <title>Admin Detail</title>
</head>

<body>

    <div class="container">

        <?php
        $sql = "SELECT * FROM `admindetail` WHERE id = 1";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div>
            <h3>Admin Detail</h3>
            <form action="" method="post">
                <table>
                    <tr class="formtable">
                        <td><label for="">First Name:</label></td>
                        <td><input class="form" type="text" name="fname" value="<?php echo $row['firstName'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Last Name:</label></td>
                        <td><input class="form" type="text" name="lname" value="<?php echo $row['lastName'] ?>"></td>
                    </tr>

                    <tr class="formtable">
                        <td><label for="">Contact</label></td>
                        <td><input class="form" type="text" name="cnt" value="<?php echo $row['contact'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Email:</label></td>
                        <td> <input class="form" type="text" name="eml" value="<?php echo $row['email'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">About Me:</label></td>
                        <td><textarea rows="5" cols="100" type="text" name="abtme" ?><?php echo $row['aboutMe'] ?></textarea></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Experience:</label></td>
                        <td> <textarea rows="5" cols="100" type="text" name="exp" ?><?php echo $row['experience'] ?></textarea></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Occupation:</label></td>
                        <td> <input class="form" type="text" name="ocp" value="<?php echo $row['occup'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Birthday:</label></td>
                        <td> <input class="form" type="text" name="bday" value="<?php echo $row['birthday'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Website:</label></td>
                        <td> <input class="form" type="text" name="web" value="<?php echo $row['web'] ?>"></td>
                    </tr>
                    <tr class="formtable">
                        <td><label for="">Address:</label></td>
                        <td> <input class="form" type="text" name="addr" value="<?php echo $row['address'] ?>"></td>
                    </tr>
                </table>
                <br>
                <div>
                    <button type=" submit" name="submit">Save</button>

                </div>
            </form>
            <br>
            <a href="../index.php"><button>Cancel</button></a>

        </div>
    </div>
</body>

</html>