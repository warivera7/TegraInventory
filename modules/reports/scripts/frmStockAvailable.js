var type = 0;

$(document).ready(function () {
	LoadStock(type);
});

function LoadStock(type) {
	if (type == 0) {
		$('#table').DataTable({
			ajax: {
				// "url": "https://localhost:7213/Inventory", 
				"url": "http://tegrawarivera.somee.com/Inventory",
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