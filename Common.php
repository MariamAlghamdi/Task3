
<?php
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT id, toright, toleft, forward FROM robot_steps";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM robot_steps WHERE id='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}
