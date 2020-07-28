<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estils_botiga.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">
  

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Comanda</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Agenda</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Registra't</a>
          </li>    
        </ul>
    </div>  
  </nav>

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b> La teva Comanda </b></h1>
    <h6> fruites i verdures <span class="w3-tag">de l'hort</span></h6>
  </header>

 <!-- Factura -->
  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped">
          <thead>
            <tr>
            <th scope="col"> </th>
            <th scope="col">Producte</th>
            <th scope="col">Preu/kg</th>
            <th scope="col">Kg</th>
            <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
    <?php  
        $total = 0;  
        $producte = $_GET["comanda"];
        $preus = $_GET["preu"]; 

        foreach($producte as $nom=>$quantitat){
            if($quantitat!=0){
                $total_producte = $preus[$nom]*$quantitat;
                $total += $total_producte
    ?>
            <tr>
                <th scope="row"> </th>
                <td><?=$nom?></td>
                <td><?=$preus[$nom]?></td>
                <td><?=$quantitat?></td>
                <td><?=$total_producte?></td>
            </tr>
    <?php           
            }
        }   
    ?>
            <tr>
                <th scope="row"> </th>
                <td></td>
                <td >  </td>
                <td> </td>
                <td class="total" ><?= $total ?>€ </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  

<!-- Footer -->
  <footer class="footer bg-light" style="margin-bottom:0">
        <p>Comunitat Hort de Sant Pau</p>
  </footer>



</body>
</html>
