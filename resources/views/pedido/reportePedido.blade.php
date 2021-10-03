<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style>
		.left{
			width:20%;
			height:100px;
			float:left;
			text-align: center;
			/*background:#ccc;*/
		}
		.right{
			width:20%;
			height:100px;
			float:right;
			text-align: center;
			/*background:#ddd;*/
		}
		.center{
			width:20%;
			height:100px;
			/*background:red;*/
			left:0;
			right:0;
			margin:0 auto;
		}
	</style>
</head>
<body>
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="float-left mt-3">
					<!-- <img src="http://multiacero.test/assets/images/logo-light.png" alt="" height="22px"> -->
					<h4>MULTIACERO - KAPA</h4>
					<h5>Sucursal CASA MATRIZ</h5>
					<address>
						Bolivia - La Paz<br>
						El Alto<br>
						Av. Santa Vera Cruz N.-3944 Zona Huayna Potosi 3ra Seccion<br>
						Correo: Multiacero@gmail.com<br>
						Telefono: 71532434
					</address>
					<p class="font-12"><strong>N° AUTORIZACION:</strong><span class="float-right">001</span></p>
				</div>
			</div><!-- end col -->
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-sm-12">
				<div style="text-align: center;">
					<h1>CONFORMIDAD</h1>
				</div>
			</div><!-- end col -->
		</div>
		<div class="row mt-4 alinear">
			<div class="col-sm-3">
				<h6>NOMBRE / RAZON SOCIAL</h6>
				Peralta
			</div> <!-- end col-->
			
		</div> 
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table mt-4">
						<thead>
							<tr><th>CODIGO</th>
								<th>DESCRIPCION</th>
								<th>PRECIO UNITARIO</th>
								<th>CANTIDAD</th>
								<th class="text-right">TOTAL</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>#pdt0</td>
								<td>
									<b>Fierro Corrugado ASTM A615-Grado 60</b> <br>
									Espesor 0.35 mm | Ancho 1.20 mts | Largo 1.5 mts | Norma ASTMA-792 
								</td>
								<td>105.00 Bs.</td>
								<td>1</td>
								<td class="text-right">105.00 Bs.</td>
							</tr>
						</tbody>
					</table>
				</div> <!-- end table-responsive-->
			</div> <!-- end col -->
		</div>

		<div class="row">
			<div class="col-sm-9">
				<h5>SON: CIENTO CINCO 00/100 BOLIVIANOS.  </h5>
			</div> <!-- end col -->
			<div class="col-sm-3">
				<div class="float-right mt-3 mt-sm-0">
					<h5>TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;105.00 Bs.</h5>
				</div>
			</div> <!-- end col -->
		</div>
		<!-- end row-->
		
		<br>
		<br>
		<br>

		<div class="row mt-4">
			<div class="left">
				<p>----------------------------------</p>
				<p>Cliente</p>
				<p>Peralta</p>

			</div>
			<div class="right">
				<p>----------------------------------</p>
				<p>Conductor</p>
				<p>Jorge Deyvis Alanoca Cusicanqui</p>
			</div>
			<div class="center"></div>
		</div>    
		<!-- end row -->  
		
		<div class="d-print-none mt-4">
			<div class="text-right">
				<form id="form1" action="http://multiacero.test/ventas/store" method="POST">
					<input type="hidden" name="_token" value="5QXtAvSFAkj6xYICGkqFE4ZzIPgTvWbjjPtneBvR">
					<input type="hidden" name="max" value="1">
					<input type="hidden" name="0" value="1,105,1,105">

					<input type="hidden" name="descuentoTotal" value="0">
					<input type="hidden" name="totalGeneral" value="105">
					<input type="hidden" name="totalFinal" value="105">
					<input type="hidden" id="cod" name="cod" value="C5-79-75-E5-0D">
					<input type="hidden" name="id_cliente" value="1">
					<input type="hidden" name="id_sucursal" value="undefined">
					<input type="hidden" name="id_cajero" value="1">
					<input type="hidden" name="nfa" value="4">
				</form>
			</div>
		</div>   
	</div>          
</body>
</html>