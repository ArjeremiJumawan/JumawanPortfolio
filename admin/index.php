<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" />
    <title>Admin Panel</title>
</head>

<body>
    <div class="sidebar"></div>
    <Div class="container">
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <div class="mainTitle">Admin Configuration</div>
            <div><a href="../index.php"><button>Back to Profile</button></a></div>
        </div>

        <div>

            <div class="segment">

                <div class="subTitle">ABOUT ME</div>

                <?php
                include '../database.php';

                $sql = "SELECT * FROM `admindetail`";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo 'No Data Yet';
                } else {
                    $row = mysqli_fetch_assoc($result);
                }
                ?>

                <table>
                    <tbody>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Name:</td>
                            <td><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Contact:</td>
                            <td> <?php echo $row['contact'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Email:</td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">About me:</td>
                            <td><?php echo $row['aboutMe'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Experience:</td>
                            <td><?php echo $row['experience'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bolder; padding: 5px;">Occupation:</td>
                            <td><?php echo $row['occup'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <a href="abtMe/edt.php"><button>Edit</button></a>


            </div>

            <div class="segment">
                <div class="subTitle">EDUCATION</div>
                <table class="educTable">
                    <thead>
                        <tr>
                            <th>School</th>
                            <th>Course</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../database.php';

                        $sql = "SELECT * FROM `education`";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            </tr>
                            <td><?php echo $row['schoolName'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
                <br>
                <a href="educ/edt.php"><button>Edit</button></a>

            </div>

            <div class="segment">
                <div class="subTitle">SKILLS</div>

                <?php
                include '../database.php';

                $sql = "SELECT * FROM `skills`";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo 'No Data Yet';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div>
                            <span style="font-weight: bolder;"> <?php echo $row['title'] ?></span> |
                            <span> <?php echo $row['content'] ?></span> |
                            <span> <?php echo $row['perc'] ?>%</span>
                        </div>
                <?php }
                }
                ?>
                <div>
                    <br>
                    <a href="skill/edt.php"><button>Edit</button></a>
                </div>
            </div>

            <div class="segment">
                <div class="subTitle">MY WORKS</div>
                <?php
                include '../database.php';

                $cnt = 0;
                $sql = "SELECT * FROM `portfolio`";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo 'No Data Yet';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cnt++;
                ?>


                        <div class="content">
                            <div style="text-align: center;">
                                <div>
                                    <img style=" height:200px; width:auto; max-width:500px;" class="img-fluid" src="../assets/img/portfolio/<?php echo $row['img'] ?>" alt="..." />
                                </div>
                                <div style="font-weight: bolder;">
                                    <?php echo $row['title'] ?>
                                </div>
                                <div>
                                    <?php echo $row['descript'] ?>
                                </div>

                            </div>
                        </div>

                <?php }
                } ?>
                <br>
                <div>
                    <a href="work/edt.php"><button>Edit</button></a>
                </div>
            </div><br>
            <br>
            <div style="text-align: center; margin: 10px;">
                <a href="../index.php"><button>Back to Profile</button></a>
            </div>


        </div>
    </div>
    </Div>
</body>

</html>