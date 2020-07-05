<?php
include "config.php";
include_once "Common.php";
$common = new Common();
$records = $common->getAllRecords($connection);
if ($records->num_rows>0){
    $sr = 1;
    while ($record = $records->fetch_object()) {
        $recordId = $record->id;
        $name = $record->toright;
        $email = $record->toleft;
        $contact = $record->forward;
      ?>
        <tr>
            <th><?php echo $sr;?></th>
            <th><?php echo $name;?></th>
            <th><?php echo $email;?></th>
            <th><?php echo $contact;?></th>
            <td><a href="delete-script.php?recordId=<?php echo $recordId?>" class="btn btn-danger btn-sm">Delete</a> </td>
        </tr>
        <?php
        $sr++;
    }
}
?>
