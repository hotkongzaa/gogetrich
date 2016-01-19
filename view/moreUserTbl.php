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
        $sqlSelectCate = "SELECT * FROM MORE_REGISTRED_TMP WHERE TMP_CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
        $res = mysql_query($sqlSelectCate);
        $sqlChec = "SELECT COUNT(*) AS CHECKEDROW FROM MORE_REGISTRED_TMP WHERE TMP_CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
        $resCheck = mysql_query($sqlChec);
        $rowCheck = mysql_fetch_assoc($resCheck);
        if ($rowCheck['CHECKEDROW'] > 0) {
            while ($row = mysql_fetch_array($res)) {
                ?>
                <tr>       
                    <td style="text-align: center" width="50px"><?= $id ?></td>
                    <td><?= $row['TMP_NAME'] ?></td>
                    <td style="text-align: center"><?= $row['TMP_PHONE_NUMBER'] ?></td>
                    <td style="text-align: center"><?= $row['TMP_EMAIL'] ?></td>
                    <td style="text-align: center" width="50px">                    
                        <a href="#" class="btn btn-small" title="Delete" onclick="deleteMoreUserTmp('<?= $row['TMP_ID'] ?>')"><i class="icon-trash"></i> Delete</a>
                    </td>
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
        ?>

    </tbody>
</table>