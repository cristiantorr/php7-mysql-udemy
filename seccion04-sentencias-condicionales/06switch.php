<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales sintaxis alterna</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Condicionales sintaxis alterna</h1>
        <ul>
           <li>Alternativa a usar varios "IF"</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $estado = "soltera";
            print "Lo invitamos a un viaje por el Amazonas ";
            switch ($estado) {
                case 'soltero':
                case 'soltera':
                    print "donde podrá conocer a otras personas como usted ";
                    break;

                case 'casado':
                case 'casada':
                    print "convivir con su familia ";
                    break;

                case 'divorciado':
                    print "para que olvide sus problemas ";
                    break;

                case 'viudo':
                    print "donde podrá reflexionar en sus mejores recuerdos ";
                    break;

                case 'es complicado':
                case 'arrejuntado':
                case 'separado':
                    print "donde podrá simplificar su vida ";
                    break;

                default:
                    print "donde podrá definir su vida ";
            }
            print " en una extraordinaria aventura de dos semanas, todo incluido.";
        ?>
    </div>
</body>
</html>
