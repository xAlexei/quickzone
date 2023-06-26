<?php   
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);
    $id = 20;

    $query = "SELECT * FROM business b INNER JOIN products p ON p.businessNameID = b._id WHERE b._id = $id";
    $res = mysqli_query($conn, $query) or die( mysqli_error($conn));

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Quickzone</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600"></p>
                <h1 class="font-24 font-800 mb-0">Carga tus productos</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
<?php $i=0; while($row = mysqli_fetch_array($res)){ $i++; ?>
                <div class='d-flex mb-4'>
         <div class='align-self-center'>
            <img src="<?php echo $row['linkImage'] ?>" class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'><?php echo $row['productName'];?></h2>
            <p class='mb-0 font-11 mt-2 line-height-s'><?php echo $row['descript']?></p>
            <p class='mb-0 font-11 mt-2 line-height-s'><?php echo $row['price']?></p>
        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
            <a href=""><i style='font-size: 35px;' class='uil uil-edit'></i></a>
            <a href=""><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
        </div>
    </div>
    <?php }?>
    </div>
</div>