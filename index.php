<!DOCTYPE html>
<html lang="en">
<head>
    <script src="./javascript/funciones.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    
        require_once("./backend/validarSesion.php");
        include("./clases/Fabrica.php");       

    ?>
</head>
<body bgcolor="silver">
    <form id="form" method="post" action="./backend/formatopdf.php" enctype="multipart/form-data">
        <table align="left" style="border:solid">
            <tr>
                <td colspan="2"><h4>Datos Personales</h4></td>
            </tr>
            <tr>
                <td colspan="2"><hr/></td>
            </tr>
            <tr>
                <td>DNI:</td>
                <td style="text-align:left;padding-left:20px"> 
                <input type="number" name="txtDni" id="txtDni" min="1000000" max="55000000"><span id="DniError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td style="text-align:left;padding-left:20px"> 
                    <input type="text" name="txtApellido" id="txtApellido"><span id="ApellidoError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td style="text-align:left;padding-left:20px">
                    <input type="text" name="txtNombre" id="txtNombre"><span id="NombreError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td style="text-align:left;padding-left:20px">
                    <select name="cboSexo"id="cboSexo">                    
                            <option value="--" selected>Seleccione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                    </select>
                    <span id="SexoError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><h4>Datos Laborales</h4></td>
            </tr>
            <tr>
                <td colspan="2"><hr/></td>
            </tr>
            <tr>
                <td>Legajo:</td>
                <td style="text-align:left;padding-left:20px"> 
                <input type="number" name="txtLegajo" id="txtLegajo" min="100" max="550"><span id="LegajoError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td>Sueldo:</td>
                <td style="text-align:left;padding-left:20px"> 
                    <input type="number" name="txtSueldo" id="txtSueldo"><span id="SueldoError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td>Turno:</td>                
            </tr>
            <tr>
                <td style="text-align:left;padding-left:20px">
                <input type="radio" id="Mañana" name="radios" value="Mañana" checked>
                </td>
                <td>Mañana</td>
            </tr>
            <tr>
                <td style="text-align:left;padding-left:20px">
                <input type="radio" id="Tarde" name="radios" value="Tarde">
                </td>
                <td>Tarde</td>
            </tr>
            <tr>
                <td style="text-align:left;padding-left:20px">
                <input type="radio" id="Noche" name="radios" value="Noche">
                </td>
                <td>Noche</td>
            </tr>
            <tr>
                <td>Foto:</td>
                <td style="text-align:left;padding-left:20px"> 
                    <input type="file" name="Foto" id="pathFoto"><span id="FotoError" style="display:none;">*</span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr/></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="reset" value="Limpiar" id="Limpiar">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="button" id="boton" value="Enviar" onclick="AdministrarValidaciones()">
                </td>

            </tr>
            <tr>
            <td align="left">
                <a href="./backend/cerrarSesion.php"><h3>Desloguear</h3></a>
            </td>
            <td align="right">
                <input type="submit" value="Formato PDF">
            </td> 
            </tr>
        </table>
        <div id="Mostrar">
            <table align="center">
                <tbody>
                    <tr>
                        <td colspan="2">
                            <h4>
                                Info
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="divGrilla" style="width:900px; height:416px; overflow: scroll;"></div>                                                        
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
    <input type="hidden" id="hdnModificar" name="hdnModificar">
    </form>
    
</body>
</html>