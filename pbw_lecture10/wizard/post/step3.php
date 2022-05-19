<form method="POST" action="result.php">
    <input type="hidden" name="name" value="<?php echo $_POST["name"] ?>" />
    <input type="hidden" name="address" value="<?php echo $_POST["address"] ?>" />
    
    Masukkan umur: <input type="text" name="age" />
    <input type="submit" value="Preview" />
</form>