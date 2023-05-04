<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Tabuada
        </title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>

    <form action="tabuada.php" method="post">
        <label for="texto" >Digite um número para obter a tabuada</label><br>
        <input id="texto" type="text" name="numero">
        <input type="submit" value="submit">
    </form>
    <br>
    <br>
    <br>
    <br>



    <table>


           <?php $numero = $_POST['numero'];
            for($i=1 ; $i < 10 ; $i++){ ?>

        <tr> <th><?php  echo $i .' X '. $numero .' = '. $numero*$i ;?> </th></tr><?php
            }
           ?>


        <tr>
       <!-- <td> //foreach(TabuadaClass::getTabuada($_POST['numero']) as $list) { echo "$list";  }       ?></td> -->
        </tr
    </table>



    </body>

</html>








