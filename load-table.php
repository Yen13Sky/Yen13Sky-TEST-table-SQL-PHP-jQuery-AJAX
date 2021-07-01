<?php
$connection= mysqli_connect('127.0.0.1', 'root', '', 'test');
if ($connection == false){
    echo 'Ошибка подключения';
    echo mysqli_connect_error();
    die();
}
$sql = "SELECT * FROM tasks ORDER BY tasks.task_id ASC";
$sqlRun = mysqli_query($connection, $sql);
echo "
<tr>
    <th class='table-title'>Id</th>
    <th class='table-title'>Description</th>
    <th class='table-title'>Time</th>
    <th class='table-title'>Date start</th>
    <th class='table-title'>Date finish</th>
</tr>
    ";
if ($sqlRun){
    while ($row = mysqli_fetch_assoc($sqlRun)){
        echo "<tr><td class='table-data-text table-data-text-id'>" . $row["task_id"] .
            "</td><td class='table-data-text table-data-text-desc'>" . $row["description"] .
            "</td><td class='table-data-text table-data-text-column'>" . $row["time"] .
            "</td><td class='table-data-text table-data-text-column'>" . $row["date_start"] .
            "</td><td class='table-data-text table-data-text-column'>" . $row["date_finish"] .
            "</td></tr>";
    }
}else{
    echo "Record is no found";
}


