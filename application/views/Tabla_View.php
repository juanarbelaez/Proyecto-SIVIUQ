<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fabian David Osorio Sarmiento">

    <title>Tablas</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/js/clean-blog.min.js"></script>

    

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/inicio_controller">Inicio</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Administrador_Controller">Atras</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?=base_url();?>assets/img/bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>SIVI-UQ</h1>
                        <hr class="small">
                        <span class="subheading">Nunca antes gestionar y administrar los proyectos de investigación había sido tan fácil</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 table-responsive" >

            	<table class="table table-hover table-bordered">
		<tbody>
			<th><h3>Programa</h3></th>
			<th><h3>Facultad</h3></th>
			<th><h3>Grupo </h3></th>
			<th><h3>Tipo Vinculacion</h3></th>
			<th><h3>Nombre</h3></th>
			<th><h3>Documento</h3></th>
			<th><h3>Celular</h3></th>
			<th><h3>Correo </h3></th>
			
			</tbody>

			
			<?php 
			if($data!=false){
				for($i=0; $i<count($data); $i++){
				
				foreach ($data[$i] as $row){
					
					
			
			echo "<tr>";
			echo "<td>". $row->PROGRAMA . "</td>";
			echo "<td>".$row->FACULTAD. "</td>";
			echo "<td>".$row->GRUPO_INVESTIGACION. "</td>";
			echo "<td>".$row->TIPO_VINCULACION. "</td>";

			echo "<td>".$row->NOMBRE. "</td>";
			echo "<td>".$row->DOCUMENTO. "</td>";
			echo "<td>".$row->CELULAR. "</td>";
			echo "<td>".$row->CORREO. "</td>";
			echo "</tr>";
			}
				}
			}
			else{
				echo "no hay investigadores";
			
			}
			?>
	
	
	</table>


         	</div>  
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy;</p>
                    <p class="copyright text-muted">Fabian David Osorio Sarmiento</p>
                    <p class="copyright text-muted">Jeison Julian Barbosa</p>
                    <p class="copyright text-muted">Juan Sebastian Florez Saavedra</p>
                </div>
            </div>
        </div>
    </footer>

    

</body>

</html>



	<table>
		<tr>
			<th><h3>Programa</h3></th>
			<th><h3>Facultad</h3></th>
			<th><h3>Grupo </h3></th>
			<th><h3>Tipo Vinculacion</h3></th>
			<th><h3>Nombre</h3></th>
			<th><h3>Documento</h3></th>
			<th><h3>Celular</h3></th>
			<th><h3>Correo </h3></th>
		</tr>
			
			<?php 
			if($data!=false){
				for($i=0; $i<count($data); $i++){
				
				foreach ($data[$i] as $row){
					
					
			
			echo "<tr>";
			echo "<td>". $row->PROGRAMA . "</td>";
			echo "<td>".$row->FACULTAD. "</td>";
			echo "<td>".$row->GRUPO_INVESTIGACION. "</td>";
			echo "<td>".$row->TIPO_VINCULACION. "</td>";

			echo "<td>".$row->NOMBRE. "</td>";
			echo "<td>".$row->DOCUMENTO. "</td>";
			echo "<td>".$row->CELULAR. "</td>";
			echo "<td>".$row->CORREO. "</td>";
			echo "</tr>";
			}
				}
			}
			else{
				echo "no hay investigadores";
			
			}
			?>
	
	
	</table>

