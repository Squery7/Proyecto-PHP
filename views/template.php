<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    
    <link href="views/styles/nav.css" type="text/css" rel="stylesheet">
    <link href="views/styles/footer.css" type="text/css" rel="stylesheet">
    <link href="views/styles/registro.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    

</head>
    <body>
   

        <div id="principal" class="principal">

            <div id="header" class="header">
                <!--Header-->
                <?php include "views/modules/header.php"; ?>
            </div>
        
            <div id="nav" class="nav">
                <!--Nav-->
                <?php include "views/modules/nav.php"; ?>
            </div>
        
            <div id="section" class="section">
                <!--Section-->
                <?php include "views/modules/section.php"; ?>
            </div>
        
            <div id="footer" class="footer">
                <!--Footer-->
                <?php include "views/modules/footer.php"; ?>
            </div>

        </div>

    </body>
</html>