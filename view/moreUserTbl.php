<?php
session_start();
require '../model-db-connection/config.php';
?>
<table class="table table-bordered table-striped table_vam">
    <thead>
        <tr>                                                              
            <th>No.</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php
        $id = 1;
        if (isset($_SESSION['MORE_TEMP_REGIST'])) {
            $sqlGetContent = "SELECT * FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
            $res = mysql_query($sqlGetContent);
            if (mysql_num_rows($res) >= 1) {
                while ($row = mysql_fetch_array($res)) {
                    ?>
                    <tr>       
                        <td style="text-align: center" width="50px"><?= $id ?></td>
                        <td><?= $row['TMP_NAME'] ?></td>
                        <td style="text-align: center"><?= $row['TMP_PHONE_NUMBER'] ?></td>
                        <td style="text-align: center"><?= $row['TMP_EMAIL'] ?></td>
                        <?php
                        $cid = (string) filter_input(INPUT_GET, 'courseId');
                        if (isset($_SESSION['userIdFrontEnd'])) {
                            $sqlCheck = "SELECT * FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $cid . "' AND ENROLL_CUS_ID='" . $row['TMP_CUS_ID'] . "'";
                            $resCheck = mysql_query($sqlCheck);
                            if (mysql_num_rows($resCheck) >= 1) {
                                ?>
                                <td style="text-align: center" width="50px">                    
                                    Registered
                                </td>
                                <?php
                            } else {
                                ?>
                                <td style="text-align: center" width="50px">                    
                                    <a href="#" title="Delete" onclick="deleteMoreUserTmp('<?= $row['TMP_ID'] ?>', '<?= $cid ?>')">
                                        <i class="icon-trash"></i> Delete
                                    </a>
                                </td>
                                <?php
                            }
                        } else {
                            ?>
                            <td style="text-align: center" width="50px">                    
                                <a href="#" title="Delete" onclick="deleteMoreUserTmp('<?= $row['TMP_ID'] ?>', '<?= $cid ?>')">
                                    <i class="icon-trash"></i> Delete
                                </a>
                            </td>
                            <?php
                        }
                        ?>

                    </tr>
                    <?php
                    $id++;
                }
            } else {
                ?>
                <tr>       
                    <td style="text-align: center" colspan="5">ไม่พบผู้สมัครอื่น</td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>       
                <td style="text-align: center" colspan="5">ไม่พบผู้สมัครอื่น</td>
            </tr>
            <?php
        }
        ?>

    </tbody>
</table>