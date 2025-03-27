<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: cerrarSesion.php');
    exit;
}
require_once 'datos/conexion.php';
$MiConexion = ConexionBD();
require_once 'datos/CEstudiante.php';
require_once 'datos/CCurso.php';
$usu = new CEstudiante();
$cur = new CCurso();
$listadoCursos = $cur->listarCursos($MiConexion);
$cantCursos = count($listadoCursos);
$nuevo = $_REQUEST['nuevo'];
$EstElegido=array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once 'head.php';
    ?>
</head>

<body>
    <div>
        <header>
            <?php
            require_once 'header.php';
            ?>
        </header>
        <div>
            <div>
                <div>
                    <h2>Trabajos</h2>
                </div>
                <div>
                    <h4><?php echo ($nuevo==1)? "Registro de Trabajo Nuevo":"Modificación de Trabajo";?></h4>
                </div>
            </div>
            <div>

                <?php
                if ($nuevo == 0) {
                    $idTrab=$_REQUEST['Est'];
                    $TrabElegido= $est->buscarTrabajo($MiConexion,$idTrab);
                      
                if(!empty($TrabElegido)){
                    $_POST['titulo'] = $TrabElegido[''];
                    $_POST['descripcion'] = $TrabElegido['NOMBRE'];
                    $_POST['enlace'] = $TrabElegido['APELLIDO'];
                    $_POST['usuario'] = $TrabElegido['CURSO'];
                    $_POST['id']=$idTrab;
                }
            }
                ?>
                <form action="guardarEstudiante.php?nuevo=<?php echo $nuevo; ?><?php echo ($nuevo==0)?"&id=".$idUsu:""; ?>" method="post">
                    <div>
                        <label for="id">Nro: <input type="text" name="id" id="id" disabled value="<?php echo !empty($_POST['id']) ? $_POST['id'] : ''; ?>"></label>
                    </div>
                    <div>
                        <label for="cod>Código de Barra: <input type="text" name="cod" id="cod" required="requerido" minlength="10" maxlength="15" value="<?php echo !empty($_POST['cod']) ? $_POST['cod'] : ''; ?>"></label>
                    </div>
                    <div>
                        <label for="nombre">Nombre*: <input type="text" name="nombre" id="nombre" required="requerido" minlength="3" maxlength="25" value="<?php echo !empty($_POST['nombre']) ? $_POST['nombre'] : ''; ?>"></label>
                        <label for="apellido">Apellido*: <input type="text" name="apellido" id="apellido" required="requerido" minlength="2" maxlength="25" value="<?php echo !empty($_POST['apellido']) ? $_POST['apellido'] : ''; ?>"></label>
                    </div>
                    <div>
                        <label for="curso">Curso*: <input type="text" name="curso" id="curso" required="requerido" minlength="12" maxlength="25" value="<?php echo !empty($_POST['curso']) ? $_POST['curso'] : ''; ?>"></label>
                        <label for="contrasenia">Contraseña: <input type="text" name="contrasenia" id="contrasenia" maxlength="25" value="<?php echo !empty($_POST['contrasenia']) ? $_POST['contrasenia'] : ''; ?>"></label>
                    </div>
                    <div>
                        <label for="administrador">Administrador: <input type="text" name="administrador" id="administrador" required="requerido" minlength="12" maxlength="25" value="<?php echo !empty($_POST['administrador']) ? $_POST['administrador'] : ''; ?>"></label>
                    <div><span>Los campos marcados con * son obligatorios</span></div>
                    <div>
                        <button type="submit" value="Confirmar" name="Confirmar" onClick="return confirm ('¿Desea guardar el nuevo estudiante?');">Confirmar</button>
                    </div>
                </form>
                <form name="cancelar" action="index.php" method="post">
                    <button type="submit" value="Cancelar" name="Cancelar" onclick="return confirm ('¿Desea cancelar? - No se guardarán los datos')">Cancelar</button>
                </form>
            </div>
        </div>
        <footer>
            <?php
            require_once 'footer.php';
            ?>
        </footer>
    </div>
</body>

</html>