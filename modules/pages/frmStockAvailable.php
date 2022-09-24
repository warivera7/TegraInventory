<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../../../icons/tegra-icon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../../../assets/bootstrap/bootstrap.min.css" />

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="../../../assets/datatables/dataTables.bootstrap5.min.css" />

    <style>

        table.dataTable thead { 
            background-color: #0D6EFD;
            color: white;
            text-decoration: bold;
        }

    </style>

    <title>Tegra Inventory</title>
</head>
<body>
    <div class="container">
        <br>
        <span id="message"></span>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    &nbsp;
                </div>
            </div>
            <h1 class="mt-4 mb-4 text-center text-primary">Stock Available Report</h1>

            <div class="card-body">
                <form class="row gy-2 gx-3 align-items-center">
                    <div class="col-auto">
                        <label class="visually-hidden" for="txtSearch">Search product...</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="txtSearch" placeholder="Search product...">
                            <div class="input-group-text">
                                <img src="../../../icons/search-icon.png" />
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="chkNoStock" value="1">
                            <label class="form-check-label" for="chkNoStock">
                                Ignore products with no stock available
                            </label>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table" width="99.8%">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Last Operation Date</th>
                                <th>Available Qty.</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal bd-example-modal-lg" tabindex="-1" id="box_detail_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dynamic_modal_title">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row">
                        <table class="table table-striped table-bordered" id="table2">
                            <thead>
                                <tr>
                                    <th>Box #</th>
                                    <th>Last Operation Date</th>
                                    <th>Available Quantity</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">            
                    <button type="button" class="btn btn-primary" id="closeBoxDetail" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="../../../assets/jquery/jquery-3.6.0.js"></script>
<script src="../../../assets/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../../../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../../../assets/datatables/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" src="../scripts/frmPrueba.js"></script>

</html>