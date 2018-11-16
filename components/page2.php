<?php

$query = $conn->prepare("SELECT * FROM users"); //šis sagatavo prasījumu MySQL
$query->execute(); //šis actually aizsūta prasījumu uz serveri

?>


<h1>Page 2</h1>

<table>
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>First name</td>
        <td>Last name</td>
        <td>Date registred</td>
    </tr>

<?php
    foreach ($query->fetchAll() as $user) { //šādi iniciējam foreach loop - meklējam kaut ko (visus lietotājus) iedodot tam lokālo mainīgo vērtību $user
    ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['last_name']; ?></td>
            <td><?= $user['created_at']; ?></td>
        </tr>
    <?php
    }
?>


</table>