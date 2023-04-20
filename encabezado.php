<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Odenfis">
    <title>PostgreSQL-PHP | Por Ismael Balladares</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="./bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav>
        <a href="https://tecsup.instructure.com/courses/25788">PostgreSQL-PHP | Por Ismael Balladares</a>

            <ul >
                <li >
                    <a  href="./listar.php">Listar (arreglo)</a>
                </li>
                <li >
                    <a  href="./listarCursor.php">Listar (cursor)</a>
                </li>
                <li>
                    <a href="./formulario.php">Agregar</a>
                </li>
            </ul>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
    <style>
    nav{
        padding: 20px;
        background-color:#ffbb00;
        text-align: center;
      }
      nav ul{
        list-style: none;
        display: inline-block;
        padding:18px;
     }
     nav ul li{
        float: left;

    }
    nav ul li a {
        color: white;
        font-weight: bold;
        text-decoration: none;
        font-size: 20px;
        padding: 18px;
    }
    nav ul li a:hover{
        transition: 1s ease-in-out;
        background-color: rgb(255, 255, 255);
        color: #ffbb00;
        
      }
</style>
        