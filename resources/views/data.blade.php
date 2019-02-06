<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<table>
			<thead>
				<tr>
					<th style="width: 100px;">Tanggal Beli</th>
					<th>Pembeli</th>
					<th style="width: 120px;">Penjual</th>
					<th style="width: 150px;">Nama Produk</th>
					<th>Jumlah Pembelian</th>
					<th>Harga Satuan</th>
					<th style="width: 100px;">Sub Total Harga</th>
				</tr>
			</thead>
			<tbody id="table_body">

			</tbody>
		</table>
	</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$.get("/api/data", function(data, status){
	    console.log(data);
	    $.each(data, function(index){
	    	var html =  `<tr><td>` + data[index].sale_date + 
	    				`<td>` + data[index].user_name + `</td>` +
	    				`<td>` + data[index].store_name + `</td>` +
	    				`<td>` + data[index].product_name + `</td>` +
	    				`<td>` + data[index].qty + `</td>` +
	    				`<td>` + data[index].price + `</td>` +
	    				`<td>` + data[index].sub_total +
	    				`</td></tr>`;
	    	$('#table_body').append(html);
	    });
	  });
	});
</script>

<style type="text/css">
html,
body {
	min-height: 160%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-47%, -30%);
}

table {
	margin : 100px 0 100px 0;
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: center;
}

thead {
	th {
		background-color: #55608f;
	}
}

tr {
	text-align: center;
}
tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
</style>
</html>