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
    <form method="post"
    <?php
       if(isset($data))
        { ?>
          action="../controller/update_toy_confirm.php"
        <?php
        }else
        {?>
            action="../controller/new_toy_confirm.php"
          <?php
       }
    ?>
    >
        <label style="width:100px">Name</label><span><input type="text" name="name" value="<?=isset($data)?$data["name"]:""?>" /></span><br />
        <label style="width:100px">Price</label><span><input type="text" name="price" value="<?=isset($data)?$data["price"]:""?>" /></span><br />
        <label style="width:100px">Provider</label><span><input type="text" name="provider" value="<?=isset($data)?$data["provider"]:""?>" /></span><br />
        <label style="width:100px">Discount</label><span><input type="text" name="discount" value="<?=isset($data)?$data["discount"]:""?>" /></span><br />
        <label style="width:100px">Image</label><span><input type="text" name="image" style="width:600px" value="<?=isset($data)?$data["image"]:""?>" /></span><br />
        <?php
            if(isset($data))
            {?>
                <input type="hidden" name="toy_id" value="<?=$data["toy_id"]?>" />
            <?php
            }
        ?>
        <br />
        <br />
        <input type="submit" value="Actualizar" />
    </form>
</body>
</html>