<?php
include('connect.php');
$sql="SELECT*FROM comments";
$result=$conn->query($sql);
?>
<html>
    <form action="" method="post">
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>organisation</th>
            <th>Area of interest</th>
            <th>comment</th>
            <th>action</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Phone'];?></td>
            <td><?php echo $row['Organisation'];?></td>
            <td><?php echo $row['Area_of_interest'];?></td>
            <td><?php echo $row['Comment'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </form>
</html>