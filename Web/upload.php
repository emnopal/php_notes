<?php

/*
Di PHP, untuk file yang di upload dari server, kita bisa menangkapnya dari global variable $_FILES
Setiap ada file yang di upload, secara otomatis $_FILES akan berisi informasi seputar file yang di upload
Saat di upload ke server, file akan secara otomatis disimpan di temporary folder di server,
dari situ kita bisa pindahkan ke lokasi yang kita inginkan
kalau file tidak digunakan, maka ketika request selesai, file akan otomatis dihapus

$_FILES['userfile']['name']
The original name of the file on the client machine.

$_FILES['userfile']['type']
The mime type of the file, if the browser provided this information. An example would be "image/gif".
This mime type is however not checked on the PHP side and therefore don't take its value for granted.

$_FILES['userfile']['size']
The size, in bytes, of the uploaded file.

$_FILES['userfile']['tmp_name']
The temporary filename of the file in which the uploaded file was stored on the server.

$_FILES['userfile']['error']
The error code associated with this file upload.


*/

// function to check and make new directory
function makeDir(string $path): bool {
    if (is_dir($path)) {
        return true;
    }
    mkdir($path);
    return false;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){ // wajib pake request method post

    // Metadata dan handling upload file di php

    $file_name = $_FILES['upload_file']['name']; // nama file
    $file_type = $_FILES['upload_file']['type']; // tipe file
    $file_size = $_FILES['upload_file']['size']; // ukuran file
    $file_tmp_name = $_FILES['upload_file']['tmp_name']; // lokasi file di server
    $file_error = $_FILES['upload_file']['error']; // status code file
    // jadi di php itu file cuma temporary, jadi ketika selesai request maka file langsung di delete
    // solusinya: pindahkan file ke lokasi yang kita inginkan
    // untuk manipulas file, bisa dicek disini: https://www.php.net/manual/en/ref.filesystem.php
    // move_uploaded_file($file_tmp_name, $moved_file);
    $moved_dir = __DIR__.'/uploaded_files/';
    makeDir($moved_dir, 0777);
    move_uploaded_file($file_tmp_name, $moved_dir . $file_name);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- liat metadata filenya -->

<?php if($_SERVER['REQUEST_METHOD'] == "POST"){ ?>
    <h1>Upload File</h1>
    <table>
        <tr>
            <td>File Name</td>
            <td><?= $file_name ?></td>
        </tr>
        <tr>
            <td>File Type</td>
            <td><?= $file_type ?></td>
        </tr>
        <tr>
            <td>File Size</td>
            <td><?= $file_size/1000 ?> KB</td>
        </tr>
        <tr>
            <td>File Tmp Name</td>
            <td><?= $file_tmp_name ?></td>
        </tr>
        <tr>
            <td>Moved file</td>
            <td><?= $moved_dir . $file_name ?></td>
        </tr>
        <tr>
            <td>File Error</td>
            <td><?= $file_error ?></td>
        </tr>
    </table>
<?php } ?>

<h1>Form Upload</h1>
    <!-- kalau upload file wajib multipart/form-data, selain itu, maka tidak akan dianggap file -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label> File :
            <input type="file" name="upload_file">
        </label>
        <input type="submit" value="Upload">
    </form>
</body>
</html>