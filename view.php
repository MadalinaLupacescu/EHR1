<?php
    include "dashboard.php"

    $sql = "SELECT * FROM ecri_patients";

    $result = $conn->query($sql);

    if($result->num_rows>0) {
        while($row = $result->fetch_assoc()){
    

?>
            <tr>
            <td><?php echo $row['Name'];?> </td>
            <td><?php echo $row['Email'];?> </td>
            <td><?php echo $row['Address'];?> </td>
            <td><?php echo $row['Phone'];?> </td>
            <td><?php echo $row['id'];?> </td>

<!-- https://www.google.com/search?q=crud+for+the+patients+in+php&rlz=1C1CHBD_ruDE988DE989&oq=CRUD+for+the+patients&aqs=chrome.1.69i57j33i160l2.5455j0j7&sourceid=chrome&ie=UTF-8#fpstate=ive&vld=cid:9d13d7e0,vid:whvDzJFiyi4 -->