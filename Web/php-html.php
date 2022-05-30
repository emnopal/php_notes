<!--
    Pisahin antara php dan html, php di atas, html dibawah biar rapih dan mudah dibaca dan tidak ngebingungin
    ketika pengen ngurus header, session, cookie ataupun requests
-->

<?php
    $notes = "secara default php bisa bekerja berbarengan dengan html";
    $notes2 = "bisa disingkat dengan tanpa harus nulis php lagi, cukup tambahin = aja, kalau cuma ingin di print out, jadi gausah ada perintah echo lagi";
    $notes3 = "dia bisa juga pake css dan js: "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <h3><?php echo $notes; ?></h3>
    <h3><?= $notes2; ?></h3>
    <h3 id="testjs" style="color:blue;">
        <script>
            // contoh code js
            let d = new Date();
            // php di dalam js, tapi cuma bisa dipake buat print out variable di php doang
            document.getElementById("testjs").innerHTML = "<?= $notes3; ?>" + "<br> disini contoh js nya:"  + d;
        </script>
    </h3>
</body>
</html>