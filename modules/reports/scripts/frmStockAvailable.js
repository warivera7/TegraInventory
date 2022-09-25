var type = 0;

$(document).ready(function () {
	LoadStock(type);
});

function LoadStock(type)
{
	if (type == 0)
	{
		$('#table').DataTable({
			ajax: {
				// "url": "https://localhost:7213/Inventory",
				"url": "../actions/loadAPI.php?request=1",
				"method": "GET",
				"dataSrc": ""
			},
			destroy: true,
			searching: false,
			lengthChange: false,
			"columns": [
				{ "data": "product" },
				{ "data": "lastOperationDate" },
				{
					"data": "quantity",
					render: function (data, type, row) {
						return '<a href="javascript:LoadDetail(' + "'" + row.productId + "'" + ')">' + data + '</a>'
					}
				}
			]
		});
	}
	else if (type == 1)
	{
		var prodToSearch = "";

		if ($('#txtSearch').val() == "")
			prodToSearch = "-"
		else
			prodToSearch = $('#txtSearch').val();

		// var url = "https://localhost:7213/Inventory/SearchProducts/" + prodToSearch + "/" + $('#chkNoStock').is(':checked');
		var url = "../actions/loadAPI.php?request=2&prodToSearch=" + prodToSearch + "&chkNoStock=" + $('#chkNoStock').is(':checked');

		$('#table').DataTable({
			ajax: {
				"url": url,
				"method": "GET",
				"dataSrc": ""
			},
			destroy: true,
			searching: false,
			lengthChange: false,
			"columns": [
				{ "data": "product" },
				{ "data": "lastOperationDate" },
				{
					"data": "quantity",
					render: function (data, type, row) {
						return '<a href="javascript:LoadDetail(' + "'" + row.productId + "'" + ')">' + data + '</a>'
					}
				}
			]
		});
	}
}


function LoadDetail(product) {
	// var url = "https://localhost:7213/Inventory/GetBoxes/" + product;
	var url = "../actions/loadAPI.php?request=3&product=" + product;

	$('#table2').DataTable({
		ajax: {
			"url": url,
			"method": "GET",
			"dataSrc": ""
		},
		destroy: true,
		searching: false,
		lengthChange: false,
		"columns": [
			{ "data": "boxCode" },
			{ "data": "detailCreationDate" },
			{ "data": "detailQuantity" }
		]
	});

	$('#box_detail_modal').modal('show');
}

$('#txtSearch').keyup(function (evt, t) {
	if ($('#txtSearch').val().length > 0) {
		LoadStock(1);
	}
	else {
		LoadStock(0, "");
	}
});

$('#chkNoStock').change(function () {
	if ($('#txtSearch').val().length > 0 || $('#chkNoStock').is(':checked'))
		LoadStock(1);
	else
		LoadStock(0);
});

$('#closeBoxDetail').click(function () {
	$('#box_detail_modal').modal('hide');
}); 