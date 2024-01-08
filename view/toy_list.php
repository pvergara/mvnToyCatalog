<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toy catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
<table
<tr>
    <th>Name</th>
    <th>Price</th>
    <th>Provider</th>
    <th>Discount</th>
    <th>Image</th>
    <th>Actions</th>
</tr>
<?php
foreach ($data as $toyItem) {
    ?>
    <tr>
        <td><?php echo $toyItem["name"]; ?></td>
        <td><?php echo $toyItem["price"]; ?></td>
        <td><?php echo $toyItem["provider"]; ?></td>
        <td><?php echo $toyItem["discount"]; ?></td>
        <td><img src="<?=$toyItem["image"]?>" width="200px" height="200px">
        <td><a href="../controller/delete_toy.php?toy_id=<?=$toyItem["toy_id"]?>">Delete</a>
    </tr>
    <?php
}
?>
</table>

</body>
</html>