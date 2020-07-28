<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estils_botiga.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/accion.js"></script>
</head>

<body>
    <!-- Banner portada -->
    <div class="jumbotron text-center banner" style="margin-bottom:0">
        <h1>Hort de Sant Pau</h1>
        <p>Cooperativa Fruita Ecològica</p> 
    </div>
    <!-- Barra de menú i enllaços -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registra't</a>
                </li>    
            </ul>
        </div>  
    </nav>
    <!-- Preus producte. Canviar el preus aqui -->
    <?php 
        $Poma = 2.5;
        $Pera = 2;
        $Platan = 1.75;
        $Mandarina = 1.80;
        $Taronja = 2.5;
        $Préssec = 2.75;
        $Albercoc = 2.25;
        $Iogurt = 2;
    ?>

    <div class="container" style="margin-top:30px">
        <form action="cistella.php" method="GET" name="cistella">
            <!-- botó cistella -->
            <div class="row">
                <div class="col-sm-12">
                    <p> <input type="submit" name="Cistella" value="Cistella" class="ml-auto d-block" ></p>
                </div>
            </div>
            
            <div class="row" style="margin-top:30px">
                <!-- poma -->
                <div class="col-sm-6 col-md-3" >
                    <h2>Pomes</h2>
                    <h5>de l'horta de Lleida</h5>
                    <img src="img/poma2.jpg" alt="poma" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$Poma?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Poma]" min="0" max="5" value="0" class="mx-auto d-block">
                    <input type="hidden" name="preu[Poma]" value=<?=$Poma?> >
                    <hr class="d-sm-none">
                </div>
                <!-- pera -->
                <div class="col-sm-6 col-md-3">
                    <h2>Peres</h2>
                    <h5>de l'horta de Lleida</h5>
                    <img src="img/peres2.jpg" alt="peres" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Pera?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Pera]" min="0" max="6" value="0" class="mx-auto d-block">
                    <input type="hidden" name="preu[Pera]" value=<?=$Pera?> >
                    <hr class="d-sm-none">
                </div>
                <!-- platan -->
                <div class="col-sm-6 col-md-3">
                    <h2>Platans</h2>
                    <h5>de l'horta de Lleida</h5>
                    <img src="img/platans2.jpg" alt="platans" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Platan?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Platan]" min="0" max="6" value="0" class="mx-auto d-block">
                    <input type="hidden" name="preu[Platan]" value=<?=$Platan?> >
                    <hr class="d-sm-none">
                </div>
                <!-- mandarina -->
                <div class="col-sm-6 col-md-3">
                    <h2>Mandarines</h2>
                    <h5>vingudes de Castelló</h5>
                    <img src="img/mandarina2.jpg" alt="mandarina" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Mandarina?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Mandarina]" min="0" max="6" value="0" class="mx-auto d-block" >
                    <input type="hidden" name="preu[Mandarina]" value=<?=$Mandarina?> >
                    <hr class="d-sm-none">
                </div>
            </div> 
                
            <div class="row" style="margin-top:40px">
                <!-- taronja -->
                <div class="col-sm-6 col-md-3">
                    <h2>Taronges</h2>
                    <h5>vingudes de Castelló</h5>
                    <img src="img/taronja2.jpg" alt="taronja" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Taronja?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Taronja]" min="0" max="5" value="0" class="mx-auto d-block">
                    <input type="hidden" name="preu[Taronja]" value=<?=$Taronja?> >
                    <hr class="d-sm-none">
                </div>
                <!-- pressec -->
                <div class="col-sm-6 col-md-3">
                    <h2>Préssecs</h2>
                    <h5>de Vallhonesta</h5>
                    <img src="img/pressec2.jpg" alt="préssec" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Préssec?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Préssec]" min="0" max="6" value="0" class="mx-auto d-block">
                    <input type="hidden" name="preu[Préssec]" value=<?=$Préssec?> >
                    <hr class="d-sm-none">
                </div>
                <!-- albercoc -->
                <div class="col-sm-6 col-md-3">
                    <h2>Albercocs</h2>
                    <h5>de l'horta de Lleida</h5>
                    <img src="img/albercoc2.jpg" alt="albercoc" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Albercoc?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Albercoc]" min="0" max="6" value="0" class="mx-auto d-block">
                    <input type="hidden" name="preu[Albercoc]" value=<?=$Albercoc?> >
                    <hr class="d-sm-none">
                </div>
                <!-- iogurt -->
                <div class="col-sm-6 col-md-3">
                    <h2>Iogurts</h2>
                    <h5>de St.Joan d'Oló</h5>
                    <img src="img/iogurt2.jpg" alt="iogurts" class="rounded-circle rounded mx-auto d-block">
                    <p><span class="preu"><?=$Iogurt?> €/Kg </span><br> Quants kg en vols?</p>
                    <input type="number" name="comanda[Iogurt]" min="0" max="6" value="0" class="mx-auto d-block" >
                    <input type="hidden" name="preu[Iogurt]" value=<?=$Iogurt?> >
                    <hr class="d-sm-none">
                </div>
            </div> 
        </form>
    </div>
    <!-- footer -->
    <div class="footer bg-light" style="margin-bottom:0">
        <p>Comunitat Hort de Sant Pau</p>
    </div>
</body>
</html>
