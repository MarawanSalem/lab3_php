<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        require_once 'students.php';

    ?>
    <h2>Application name: </h2>
    <?php include 'students.php'; ?>
    <table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr  <?php if($student['status'] == 'PHP') echo 'style="color:red;"'; ?>>
        <td><?= $student['name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['status'] ?></td> 
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
