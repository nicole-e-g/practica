<?php
/*Genere una tabla que contenga los números del 1 las 669, cada fila de la
columna deberá mostrar solamente 20 números: 
a) Indique el diseño de la base de datos para llevar el control de las figuras obtenidas. 
b) Crear un archivo registro.php. que deberán contener un formulario que permita el registro 
individual de las figuras, que consistirá en un campo de texto y un botón.
c) Emplear PDO para el registro de las figuras. 
d) En index.php. Resaltar en la tabla con color amarillo las figuras que van registrando en la base de datos.*/


//Creamos los parametros iniciales
  //estos podrían proceder de un formulario, sql, etc...
  $filas = 34;
  $columnas = 20;
  $n = 1;
?>                                                   
 </head>                                                                 
 <body>      
 
<table border="1">
 <?php
 for($t=0;$t<$filas;$t++)
{
    echo "<tr>";
    for($y=0;$y<$columnas;$y++)
    {
        echo "<td>".$n."</td>";
        $n++;
    }
}
   echo "</tr>";

 ?>
 </table>
 </body>                                                                 
 </html>
 <form method="post" action="#">
        <input type="number" name="numero" placeholder="Numero" required/><br>
        <input type="submit" name="submit" value="Guardar">
</form>
<?php
if (isset($_POST["submit"])) {
    $numero = $_POST["numero"];

    
}