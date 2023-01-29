<?php 

date_default_timezone_set("America/Bogota");?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>horarios</title>
    <link rel="stylesheet" href="pag-principal.css">
  </head>
  <body>
    <h1>TRABAJOS PENDIENTES </h1>                           <tr>
<th><a href="transportista.php"><button>regresar</a></button></th>

<div class="container">
  <div class="abs-center">

  </tr>


    
<form action="" class="border p-3 form" method="POST">
 

<table class="form-group">

<tr>

<td>  
     <label > fecha</label><br>
<input type="text"  class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo date("d-m-Y");
                            ?>" readonly> </td>

<td>
    <label >hora salida</label><br>
         <input type="text" class="form-control mb-3" name="horasalidad" placeholder="hora_salida" value="<?php echo date("h:i a");
?>" readonly></td>


</tr>


</table>

<input type="submit" class="btn btn-primary"></button>
                                                         

</div>

                          


  </div>
</div>
</tr>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>