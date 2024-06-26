<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Administrador/css/style.css">
<link rel="stylesheet" href="../Administrador/css/Crud.css">
    <!--Bootstrap 5 icons CDN-->
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="css/Crud_carp.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/6adaba3b1c.js" crossorigin="anonymous"></script>
    

    <title>Creador de Carpinteros</title>

    <link rel="stylesheet" href="crud.css">
  </head>
  <body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3><span>Admin</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/william.jpg)"></div>
                <h4>William Alexander Jiménez Bogotá</h4>
                <small>Administrador</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="index.html" class="active">
                            <span class="#"><i class="fa-solid fa-house" style="color: #ffffff;"></i></span>
                            <small>Inicio</small>
                        </a>
                    </li>
                    <li>
                       <a href="Actualizar.html">
                            <span class="#"><i class="fa-solid fa-id-card" style="color: #ffffff;"></i></span>
                            <small>Configuraion Perfil</small>
                        </a>
                    </li>
                    <li>
                        <a href="VistaRapida.html">
                             <span class="#"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></span>
                             <small>Vista Rapida</small>
                         </a>
                     </li>
                    <li>
                       <a href="Clientes.html">
                            <span class="#"><i class="fa-solid fa-users" style="color: #ffffff;"></i></span>
                            <small>Clientes</small>
                        </a>
                    </li>
                    <li>
                       <a href="Carpinteros.html">
                            <span class="#"><i class="fa-solid fa-screwdriver-wrench" style="color: #ffffff;"></i></span>
                            <small>Carpinteros</small>
                        </a>
                    </li>
                    <li>
                        <a href="NuevoCarpintero.html">
                             <span class="#"><i class="fa-solid fa-user-plus" style="color: #ffffff;"></i></span>
                             <small>Nuevo Carpintero</small>
                         </a>
                     </li>
                    <li>
                       <a href="Ventas.html">
                            <span class="#"><i class="fa-solid fa-chart-line" style="color: #ffffff;"></i></span>
                            <small>Ventas</small>
                        </a>
                    </li>
                    <li>
                        <a href="Chats.html">
                             <span class="#"><i class="fa-solid fa-message" style="color: #ffffff;"></i></span>
                             <small>Chats</small>
                         </a>
                     </li>
                    <li>
                       <a href="Producto.html">
                            <span class="#"><i class="fa-solid fa-toolbox" style="color: #ffffff;"></i></span>
                            <small>Producto</small>
                        </a>
                    </li>
                    <li>
                        <a href="PedirMateria.html">
                             <span class="#"><i class="fa-solid fa-truck" style="color: #ffffff;"></i></span>
                             <small>Pedir Material</small>
                         </a>
                     </li>
                     <li>
                        <a href="Proveedores.html">
                             <span class="#"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></span>
                             <small>Provedores</small>
                         </a>
                     </li>
                     <li>
                        <a href="Comentarios.html">
                             <span class="#"><i class="fa-solid fa-comment-dots" style="color: #ffffff;"></i></span>
                             <small>Comentarios</small>
                         </a>
                     </li>
                    
                     <li>
                        <a href="Envios.html">
                             <span class="#"><i class="fa-solid fa-clipboard-list" style="color: #ffffff;"></i></span>
                             <small>Envios</small>
                         </a>
                     </li>
                    </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars">WJ CARPINTERIA</span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span class="#"><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></span>
                    </label>
                    
                    <div class="notify-icon"> 
                        <span class="#"><i class="fa-regular fa-envelope" style="color: #da1010;"></i></span>
                       <a href="Error505.html"><span class="notify">4</span></a>
                    </div>
                    
                    <div class="notify-icon">
                        <span class="#"><i class="fa-solid fa-bell" style="color: #FFD43B;"></i></span>
                       <a href="Error404.html"><span class="notify">3</span></a> 
                    </div>
                    
                    <div class="user">
                        
                        
                        <span class="#"></span>
                        <a href="../Login.html"><i class="fa-solid fa-right-from-bracket" style="color: #b61111;"></i></a>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>¡Wow! Que ventas!!</h1>
                <small>¡¡Bienvenido William!!</small>
            </div>
            
    

            <h1>Lista de Carpinteros</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Dirección</th>
            <th>Correo</th>
            <th>Número</th>
            <th>Tipo de Documento</th>
            <th>Número de Identificación</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['fecha_nacimiento']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['numero']; ?></td>
            <td><?php echo $row['tipo_documento']; ?></td>
            <td><?php echo $row['numero_identificacion']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
   
    <h2>Agregar Nuevo Usuario</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="numero" placeholder="Número" required>
        <select name="tipo_documento" required>
            <option value="CC">CC</option>
            <option value="CE">CE</option>
            <option value="PAS">PAS</option>
        </select>
        <input type="text" name="numero_identificacion" placeholder="Número de Identificación" required>
        <button type="submit">Agregar</button>
    </form>

    
    <script type="text/javascript" src="./js/app.js"></script>
  </body>
</html>