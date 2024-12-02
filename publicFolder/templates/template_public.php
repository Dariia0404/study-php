<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public</title>
</head>
<body>

<?php
if (isset($part_name)) {
    include __DIR__ . "/../../publicFolder/parts/{$part_name}.php";
} else {
    include __DIR__ . "/../../publicFolder/parts/header.php"; 
}
?>

</body>
</html>