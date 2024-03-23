/* This code snippet is an HTML document with embedded PHP code. It creates a form for inputting
student scores in Mathematics, Physics, Chemistry, and selecting an area. Upon submitting the form,
it calculates the total points, provides a rating based on the total points, and assigns priority
points based on the selected area. */
<!DOCTYPE html>
<html>

<head>
    <title> STUDENT RESULTS RATING</title>
    <!-- Unicode Vietnamese -->
    <meta charset="UTF-8">
    <meta name="author" content=" trendemy.com" />
    <!-- css definition file -->
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <h2> CLASSIFICATION OF STUDENT RESULTS</h2>
        <!-- Form to send processing results -->
        <!-- action is the landing page, the # value is sent to the
current page itself.
The method is post. -->
        // * INPUT FORM
        <form action="#" method="post">
            // * Mathematics
            <div class="row">
                <div class="lbltitle">
                    <label> Math scores </label>
                </div>
                <div class="lblinput">


                    <input type="number" name="math" value="<?php echo isset($_POST['math']) ?

                                                                $_POST['math'] : ""; ?>" />
                </div>
            </div>

            // * Physics
            <div class="row">
                <div class="lbltitle">
                    <label> Physics scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="physics" value="<?php echo isset($_POST['physics']) ?

                                                                    $_POST['physics'] : ""; ?>" />

                </div>
            </div>
            // * Chesmistry
            <div class="row">
                <div class="lbltitle">
                    <label> Chemistry scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="chemistry" value="<?php echo isset($_POST['chemistry']) ?

                                                                        $_POST['chemistry'] : ""; ?>" />

                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Select an area</label>
                </div>
                <div class="lblinput">
                    <select name="area">
                        <option value="0" selected>-- Select an area --</option>
                        <option value="1" <?php echo $_POST['area'] == 1 ? "selected" : "" ?>>Area 1</option>
                        <option value="2" <?php echo $_POST['area'] == 2 ? "selected" : "" ?>>Area 2</option>
                        <option value="3" <?php echo $_POST['area'] == 3 ? "selected" : "" ?>>Area 3</option>
                        <option value="4" <?php echo $_POST['area'] == 4 ? "selected" : "" ?>>Area 4</option>
                        <option value="5" <?php echo $_POST['area'] == 5 ? "selected" : "" ?>>Area 5</option>
                    </select>
                </div>
            </div>

            // * BUTTON SUBMIT
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Ratings" />

                </div>
            </div>
        </form>
    </div>
    // * Display result ----------------------------------------------
    <div class="result">
        <h2>Rating results</h2>
        <div class="row">
            <div class="lbltitle">
                <label>Total points</label>
            </div>
            // * OUTPUT TOTAL POINTS
            <div class="lbloutput">
                <?php echo isset($_POST['btnsubmit']) ? $_POST['math']
                    + $_POST['physics'] + $_POST['chemistry'] : ""; ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Rating</label>
        </div>
        // * OUTPUT RATINGS
        <div class="lbloutput">
            <?php

            if (isset($_POST['btnsubmit'])) {
                $totalpoints = $_POST['math'] + $_POST['physics']

                    + $_POST['chemistry'];

                if ($totalpoints >= 24) echo "Very Good";
                elseif ($totalpoints >= 21) echo "Good";
                elseif ($totalpoints >= 15) echo "Average";
                else echo "Weak";
            }
            ?>

        </div>
    </div>
    <!-- UNDER RATING -->
    <div class="row">
        <div class="lbltitle">
            <label for="">Priority point</label>
        </div>
        // * OUTPUT PRIORITY POINTS
        <div class="lbloutput">
            <?php
            if (isset($_POST["btnsubmit"])) {
                $prioritypoint_points = $_POST["area"];
                // * check priority_points
                // ? Is there another way to check $prioritypoint_points
                switch ($prioritypoint_points) {
                    case 0:
                    case 4:
                    case 5:
                        echo "0";
                        break;
                    case 1:
                    case 2:
                        echo "5";
                        break;
                    case 3:
                        echo "3";
                        break;
                    default:
                        echo "0";
                        break;
                }
            }
            ?>
        </div>
    </div>

</body>

</html>