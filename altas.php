<!DOCTYPE HTML>

<html>
    <head>
        <title>A S H C A</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
        <!--
        BODY{FONT:12px Tahoma,Geneva,sans-serif;MARGIN:9px}
        body {
            font-family: arial, helvetica, sans-serif;
            font-size: 14px;
            color: black;
            background-color: #b6d7a8;
            margin: 20px;
            padding: 0;
            text-shadow: -1px 1px 1px #999;
        }
        h1 {
            color: #ffc;
            background-color: #900;
            font-size: 2em;
            margin: 0;
            margin-bottom: 7px;
            padding: 4px;
            font-style: italic;
            text-align: center;
            letter-spacing: 0.5em;
            border-bottom-style: solid;
            border-bottom-width: 0.5em;
            border-bottom-color: #c00;
            border-radius: 8px 8px 8px 8px;
            text-transform: uppercase;
            box-shadow: 2px 2px 2px 1px #999;
            margin: 15px 30px;
        }
        h2 {
            color: white;
            background-color: #8ABF73;
            font-size: 1.5 em;
            margin: 0;
            padding: 10px;
            padding-left: 14px;
            border-radius: 8px 8px 8px 8px;
            text-align: right;
            box-shadow: 2px 2px 2px 1px #999;
            margin: 15px 30px;
        }
        h3 {
            color: black;
            background-color: #b6d7a8;
            font-size: 1.5em;
            border-radius: 3px 3px 3px 3px;
            text-align: center;
            padding: 10px;
            padding-left: 14px;
            margin: 10px 250px;
            border: 2px solid grey;
            box-shadow: 3px 3px 2px 1px #999;
        }
        img {
            /*border-style: dashed;*/
            border-width: 2px;
            border-color: #ccc;
        }
        a {
            text-decoration: none;
        }
        a:link {
            color: hsl(36,50%,50%);
        }
        a:hover {
            color: hsl(36,100%,50%);
        }
        strong {
            font-style: italic;
            text-transform: uppercase;
        }
        li {
            color: #900;
            font-style: italic;
        }
        table {
            background-color: #f3f3f3;
            background: #8ABF73;
            padding: 2px;
            border: 2px solid #008F00;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 3px 3px 2px 1px #999;
            padding:10px 10px 10px 10px;
            text-decoration: blink;
        }
        form {
            background-color: #D4D4D4;
            background: #b6d7a8;
            padding: 2px;
            border: 2px solid grey;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 3px 3px 2px 1px #999;
            padding:10px 10px 10px 10px;
            margin: 30px 150px;
        }
        p {
            font: 14px/1.5 "Times New Roman", times, serif;
            padding: 1px 1px;
            border: 2px black solid;
            border-width: 1px 5px 5px 1px;
            border-radius: 5px 5px 5px 5px;
            border-color: black grey grey black;
            margin: 30px 250px;
            text-align: center;
            background-color: #FFFFFF;
        }
        -->
        </style>
        <link rel="shorcut icon" href="/img/cnca.ico">
    </head>
    <body>
        <link rel="stylesheet" href="mbcsmbinsmenu0.css" type="text/css" />
        <?php
            header("Content-type: text/html; charset=utf8");
            ini_set('date.timezone','America/Mexico_City');
            session_start();
            if(!isset($_SESSION['nivel'])){
                header ("Location:index.php");
            } else {
                $nivel=$_SESSION['nivel'];
            }
        ?>
        <script>
            function mandar(){
        	    if (document.altas.estado.value=="S e l e c c i o n e") {
        		    alert("Es indispensable seleccionar el estado");
        			return false;
            	}
        		else if (!document.altas.nom_usuario.value){
        		    alert("Es indispensable el nombre del solicitante");
        			return false;
        		}
        		else if (!document.altas.cargo.value){
        		    alert("Es indispensable el cargo del usuario");
        			return false;
        		}
        		else if (document.altas.area.value=="Ninguno") {
        		    alert("Es indispensable el área");
        			return false;
        		}
        		else if (!document.altas.institucion.value){
        		    alert("Es indispensable la institucion solicitante");
        			return false;
        		}
        		else if (!document.altas.telefono.value){
        			alert("Es indispensable un teléfono de contacto");
        			return false;
        		}
        		else if (!document.altas.email.value){
            		alert("Es indispensable un correo electrónico");
            		return false;
        		}
        		else if (!document.altas.tipo.value){
        		    alert("Es indispensable indicar el tipo de institución");
        			return false;
        		}
        		else if (!document.altas.denominacion.value){
        		    alert("Es indispensable la denominacion");
        			return false;
        		}
        		else if (!document.altas.descripcion.value){
        		    alert("Es indispensable capturar la descripción");
        			return false;
        		}
        		else if (!document.altas.monto_sol.value){
        			alert("Es indispensable indicar el monto solicitado");
        			return false;
        		}
        		else if (!document.altas.documentos.value){
        			alert("Es indispensable indicar el o los documentos que sustentan la solicitud");
        			return false;
        		}
         		else {
               		document.altas.submit();
        		}
        	}
        	function salir(){
        	    window.history.back(-1);
        	}
        </script>
        <p><img src="./img/apoyo-tecnico.ico" alt="Asesores en Seguridad, Higiene, Capacitación y Adriestramiento"></p>
        <TABLE align="center">
            <TD width="100%" height="28" valign=middle >
                <div align="center"><B><font color="white" size="5" face="sans-serif">Altas de Clientes</font></B></font></div>
            </TD>
        </TABLE><BR>
        <h3>
            <ul id="mbinsmenu0ebul_table" class="mbinsmenu0ebul_menulist css_menu" style="width: 700px; height: 52px;">
                <li class="topitem spaced_li">
                    <div class="icon_1 buttonbg" style="width: 82px;">
                        <a href="./apoyosint.php" class="button_1">Inicio</a>
                    </div>
                </li>
                <li class="topitem spaced_li with_submenu">
                    <div class="arrow buttonbg" style="width: 122px;">
                        <div class="icon_2">
                            <a class="button_2">Opciones</a>
                        </div>
                    </div>
                    <ul class="gradient_menu gradient194 img_32">
                        <li>
                            <a href="./altas.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_1.png" alt="" />Altas de Clientes</a>
                        </li>
                        <li>
                            <a href="./bajas.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_2.png" alt="" />Bajas de Clientes</a>
                        </li>
                        <li>
                            <a href="./altasr.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_1.png" alt="" />Programación de Visitas</a>
                        </li>
                        <li>
                            <a href="./bajasr.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_2.png" alt="" />Bajas de Visitas</a>
                        </li>
                        <li>
                            <a href="./indicaciones.php".$envia class="with_img_32" title=""><img src="mbico_mbinsmenu0_3.png" alt="" />Captura de Indicaciones</a>
                        </li>
                        <li>
                            <a class="with_img_32 with_arrow" title=""><img src="mbico_mbinsmenu0_4.png" alt="" />Cambios</a>
                            <ul class="gradient_menu gradient148 img_32">
                                <li>
                                    <a href="./cambioss.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_5.png" alt="" />Cambios a Clientes</a>
                                </li>
                                <li>
                                    <a href="./cambiosr.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_6.png" alt="" />Cambios a Visistas</a>
                                </li>
                                <li>
                                    <a href="./cambiosi.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_7.png" alt="" />Cambios a Indicaciones</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="topitem spaced_li with_submenu">
                    <div class="arrow buttonbg" style="width: 135px;">
                        <div class="icon_3">
                            <a class="button_3">Reportes</a>
                        </div>
                    </div>
                    <ul class="gradient_menu gradient194 img_32">
                        <li>
                            <a href="./oficios.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_8.png" alt="" />Generar oficio de contestación</a>
                        </li>
                        <li>
                            <a href="./reporteti.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_8.png" alt="" />Reporte por tipo de RSP</a>
                        </li>
                        <li>
                            <a href="./reportets.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_9.png" alt="" />Reporte por tipo de Solicitud</a>
                        </li>
                        <li>
                            <a href="./reportegs.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_11.png" alt="" />Reporte general de Solicitudes</a>
                        </li>
                        <li>
                            <a href="./reportetot.php" target="_self" class="with_img_32" title=""><img src="mbico_mbinsmenu0_11.png" alt="" />Generar Carpeta de Cliente</a>
                        </li>
                    </ul>
                </li>
                <li class="topitem spaced_li">
                    <div class="icon_6 buttonbg" style="width: 82px;">
                        <a href="/apoyosint/index.php" class="button_6">Salir</a>
                    </div>
                </li>
            </ul>
        </h3><HR><BR>
        <FORM name='altas' method='post' action='acciones.php'>
            <input type="hidden" name="OPCION" VALUE="ALTAS">
            <input type="hidden" name="nivel" VALUE="<?php echo(@$nivel); ?>">
            <TABLE width="80%" align="center">
        	        <br><TD width="100%" height="28" valign=middle>
        	          <div align="center"><font color="white" size="4" face="sans-serif"> Módulo para el control de Clientes </font></font></div>
        			</TD>
        	</TABLE><br><hr>
            <h2>Datos del Solicitante :</h2><HR>
            <TABLE width="80%" align="center">
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Trato: </I></B></font></TD>
                    <TD bgcolor="#ffffff"><div><input type="text" size="50" id="trato" name="trato"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Nombre: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="nom_usuario" name="nom_usuario"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Apellido paterno: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="apaterno" name="apaterno"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Apellido materno: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="amaterno" name="amaterno"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Cargo: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="cargo" name="cargo"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Área: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="area" name="area"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Institución: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="institucion" name="institucion"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Calle: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="calle" name="calle"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Número: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="numero" name="numero"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Colonia: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="colonia" name="colonia"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Código Postal: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="codpos" name="codpos"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Delegación o Municipio: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="delomuni" name="delomuni"></div></td>
        		</TR>
                <TR bgcolor="#ffffcc">
                    <TD width="127" valign="center" height="48" ALIGN="right"><B><FONT FONT SIZE="3" COLOR="black" face="Arial" align="right">Estado:</FONT></B></TD>
                        <TD width="498" bgcolor="#ffffff">
            			    <SELECT name="estado">
            				    <option SELECTED>S e l e c c i o n e</option>
            					<option value="1">Aguascalientes</option>
            					<option value="2">Baja California </option>
            					<option value="3">Baja California Sur</option>
            					<option value="4">Campeche</option>
            					<option value="5">Chiapas</option>
            					<option value="6">Chihuahua</option>
            					<option value="7">Coahuila de Zaragoza</option>
            					<option value="8">Colima</option>
            					<option value="9">Distrito Federal</option>
            					<option value="10">Durango</option>
            					<option value="11">Estado de México</option>
            					<option value="12">Guanajuato</option>
            					<option value="13">Guerrero</option>
            					<option value="14">Hidalgo</option>
            					<option value="15">Jalisco</option>
            					<option value="16">Michoacán de Ocampo</option>
            					<option value="17">Morelos</option>
            					<option value="18">Nayarit</option>
            					<option value="19">Nuevo León</option>
            					<option value="20">Oaxaca</option>
            					<option value="21">Puebla</option>
                    			<option value="22">Querétaro</option>
            					<option value="23">Quintana Roo</option>
            					<option value="24">San Luis Potosí</option>
            					<option value="25">Sinaloa</option>
            					<option value="26">Sonora</option>
            					<option value="27">Tabasco</option>
            					<option value="28">Tamaulipas</option>
            					<option value="29">Tlaxcala</option>
            					<option value="30">Veracruz de Ignacio de la Llave</option>
            					<option value="31">Yucatán</option>
            					<option value="32">Zacatecas</option>
        	    			</SELECT></center>
        		    	</TD>
                    </TD>
                </TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Teléfono: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="telefono" name="telefono"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Extension: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="extension" name="extension"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Fax: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="fax" name="fax"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Correo electrónico: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="email" name="email"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Página Web: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="pagina" name="pagina"></div></td>
        		</TR>
          	</TABLE><BR><HR>
            <h2>Datos de la Solicitud :</h2><HR>
            <TABLE width="80%" align="center">
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Tipo: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="tipo" name="tipo"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Fecha de ingreso al SCA: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="date" id="fecha_ingsca" name="fecha_ingsca"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Referencia: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="referencia" name="referencia"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Denominación: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="denominacion"  name="denominacion"></textarea></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Descripción: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><textarea id="descripcion" name="descripcion" rows=5 cols=50></textarea></div></td>
        		</TR>
            	<TR bgcolor="#ffffcc">
        			<TD valign=middle  cellpadding=4 cellspacing=4 ><div align="right"><B><I><font color="black" size="3" face="Arial">Monto solicitado :</I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="number" id="monto_sol" name="monto_sol"></div></td>
        		</TR>
        		<TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Pendiente: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><input type="text" size="50" id="pendiente" name="pendiente"></div></td>
        		</TR>
                <TR bgcolor="#ffffcc">
        			<TD valign=middle><div align="right"><B><I><font color="black" size="3" face="Arial">Documentos: </I></B></font></TD>
        			<TD bgcolor="#ffffff"><div><textarea name="documentos" rows=5 cols=50></textarea></div></td>
        		</TR>
            </TABLE><br>
            <TABLE align=center width="50%">
        	    <TR>
        		    <td><div align="center"><input type="Button" onClick="mandar()" value="Guardar Infomación"></div></td>
        			<td><div align="center"><input type="reset" value="Limpiar Formulario"></div></td>
        		</TR>
        	</TABLE><BR><HR><BR>
        </FORM>
    </BODY>
</HTML>