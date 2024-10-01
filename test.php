<?php
$url = 'https://api.coindesk.com/v1/bpi/currentprice.json';
$response = file_get_contents($url);
if ($response === false) {
    die('Error Bro!');
}

$data = json_decode($response, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Price</title>
</head>

<body>
    <h1>BITCOIN PRICE</h1>
    <div>
        <p>USD : <?php echo $data['bpi']['USD']['rate']; ?></p>
        <p>GBP : <?php echo $data['bpi']['GBP']['rate']; ?></p>
        <p>EUR : <?php echo $data['bpi']['EUR']['rate']; ?></p>
    </div>
</body>

</html>