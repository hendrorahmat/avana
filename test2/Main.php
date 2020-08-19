<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Types\Type_A;
use App\Types\Type_B;
use App\Validator;

$validator = new Validator(new Type_A);
$errors = $validator->validate()->getErrors();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Row</th>
                <th>Error</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($errors as $index => $error) : ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $error['error'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>