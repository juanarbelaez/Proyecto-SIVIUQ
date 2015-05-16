
<h2>Administrador SIVI-UQ</h2>
<ul id="navegadorMenu" class="navegadorMenu">
	<li>
		<a id="formularioProyecto" class="formularioProyecto"  href="<?php echo base_url(); ?>index.php/Proyecto_Controller" value="Registrar Proyecto" type="submit" name="Registrar_Proyecto">
		 	<span>Registrar Proyecto</span>
	 	</a>
	</li>
	<li>
		<a id="formularioInvestigador" class="formularioInvestigador" href="<?php echo base_url(); ?>index.php/Investigador_Controller" value="Registrar Investigador" type="submit" name="Registrar_Investigador">
			<span>Registrar Investigador</span>
		</a>
	</li>
	<li>
		<a id="formularioListar" class="formularioListar" href="<?php echo base_url(); ?>index.php/Listar_Controller" value="Listar" type="submit" name="Listar">
			<span>Listar</span>
		</a>
	</li>
	<li>
		<a id="formularioDConvocatoria" class="formularioDConvocatoria" href="<?php echo base_url(); ?>index.php/Administrador_Controller/descargarConvocatoria" value="Descargar Convocatoria" type="submit" name="Descargar_Convocatoria">
			<span>Descargar Convocatoria</span>
		</a>
	</li>
	<li>
		<a id="formularioDFormato" class="formularioDFormato" href="<?php echo base_url(); ?>index.php/Administrador_Controller/descargarFormato" value="Descargar Formato" type="submit" name="Descargar_Formato">
			<span>Descargar Formato</span>
		</a>
	</li>
	<li>
		<a id="formularioDCPresupuesto" class="formularioDCPresupuesto" href="<?php echo base_url(); ?>index.php/Administrador_Controller/descargarCuadro" value="Descargar Cuadro Presupuesto" type="submit" name="Descargar_Cuadro">
			<span>Descargar Cuadro Presupuesto</span>
		</a>
	</li>
	<li>
		<a id="pruebas" class="formularioDCPresupuesto" href="<?php echo base_url(); ?>index.php/pruebas/index" value="Presentar pruebas" type="submit" name="reporte_pruebas">
			<span>Pruebas</span>
		</a>
	</li>
	<li>
		<a id="get_where" class="formularioDCPresupuesto" href="<?php echo base_url(); ?>index.php/EstudianteSemillero_Controller/obtener" value="Presentar get" type="submit" name="get">
			<span>Get Where</span>
		</a>
	</li>

</ul>