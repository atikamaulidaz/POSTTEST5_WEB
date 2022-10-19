<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="stylesheet.css">
    <script>
       var konfir = confirm("Anda yakin ingin logout?");
       if(konfir == true){
        location.href = 'index.php';
       } else{
        location.href = 'beranda.php';
       }
    </script>
</head>
<body>
    
</body>
</html>