<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datalist</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<h1>Your data</h1>
<table border="2">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>gender</th>
        <th>age</th>
        <th>sex2</th>
        <th>birthday</th>
        <th>family status</th>
        <th>social status</th>
        <th>address</th>
        <th>activities</th>
        <th>the best company</th>
        <th>read books</th>
        <th>user comment</th>
        <th>selectcompany</th>
        <th>spam</th>
        <th>task</th>
    </tr>
    </thead>
    <tbody>

    <?php
    require_once 'database.php';
    $list = new Database("localhost", "root", "", "geekhub");
    $result = $list->select();
    if ($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['surname'] ?></td>
                <td><?= $row['sex'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['sex2']?></td>
                <td><?= $row['birthday'] ?></td>
                <td><?= $row['familystatus'] ?></td>
                <td><?= $row['socialstatus'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['doff'] ?></td>
                <td><?= $row['bestcompany'] ?></td>
                <td><?= $row['readbooks'] ?></td>
                <td><?= $row['usercomment'] ?></td>
                <td><?= $row['selectcompany'] ?></td>
                <td><?= $row['spam'] ?></td>
                <td><?= $row['task'] ?></td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
<a href="index.php">Return to main page</a>
</body>
</html>