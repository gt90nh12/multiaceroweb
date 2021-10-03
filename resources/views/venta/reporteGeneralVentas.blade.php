<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Reporte general ventas</h2>
	<table>
		<thead>
			<tr>
				<th style="width: 1px">FECHA DE LA VENTA</th>
				<th>CLIENTE</th>
				<th>CI / NIT</th>
				<th>N° DOCUMENTO</th>
				<th>TOTAL</th>
				<th>DESCUENTO</th>
				<th>TOTAL FINAL</th>
			</tr>
		</thead>
		<tbody>
			@foreach($todasLasVentas as $item)
			<tr>
				<td>{{$item->created_at}}</td>
				<td>{{$item->nombre_razon_social}}</td>
				<td>{{$item->tipo_documento}}</td>
				<td>{{$item->num_documento}}</td>
				<td>{{$item->monto_total+$item->descuento_total}} Bs.</td>
				<td>{{$item->descuento_total}} Bs.</td>
				<td>{{$item->monto_total}} Bs.</td>
			</tr>
			@endforeach
		</tbody>
	</table>            
</body>
</html>>