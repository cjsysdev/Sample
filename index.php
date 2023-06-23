<?php
include 'convert.php';

$filepath = 'Sample/install.txt';
$filename = basename($filepath);
$filename = explode('.', $filename);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Convert Text File to PDF</title>
</head>

<body>
    <h2>Upload Text File</h2>
    <!-- <?php echo $filename[0]; ?> -->
    <form action="convert.php" method="post" enctype="multipart/form-data">
        <input type="file" name="text_file">
        <input type="submit" value="Convert to PDF">
    </form>
</body>

</html>