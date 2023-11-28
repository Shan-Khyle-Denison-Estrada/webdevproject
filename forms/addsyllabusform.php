<html>
    <head>
        <title>
            Add Syllabus
        </title>
    </head>
    <body>
        <h1>Add Syllabus</h1>
        <a href="../index.php">Home</a>
        <br/><br/>
        <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="Subject"> <!-- HTML Input for Drown-Down Type Menu-->
                        <?php
                            include_once("../dbConnection/mysqlconfig_connection.php"); //Include Code to Connect to Database
                            $query = "SELECT * FROM tblsubjects"; //Select all entries in tblsubjects
                            $result = mysqli_query($dbc, $query);
                            while($res = mysqli_fetch_array($result)) {
                                echo "<option value=\"".$res['subject_id']."\">";
                                echo $res['subject_name'];
                                echo "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    </body>
</html>