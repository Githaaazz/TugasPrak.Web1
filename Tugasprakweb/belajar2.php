<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Gudang Kamera</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="belajar2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="Fujifilm XT30">
                    <label class="form-check-label" for="inlineRadio1">Fujifilm XT30</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Sony AR7 IV">
                    <label class="form-check-label" for="inlineRadio2">Sony AR7 IV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="Nikon Z6" >
                    <label class="form-check-label" for="inlineRadio3">Nikon Z6</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date Shipping</label>
                    <input type="date" name="tanggal_pengiriman" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" class="form-control" name="jenis_kurir">
                    <option selected>Choose Courier Type :</option>
                    <option value="tiki">Tiki</option>
                    <option value="sicepat">Si Cepat</option>
                    <option value="pos">Pos</option>
                    <option value="grab">Grab</option>
                    <option value="gojek">Gojek</option>
                   
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat_pengiriman" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="biaya_jaminan" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block" >

            </form>
            <?php
                
                $customer = $_POST['customer'];
                $item = $_POST['item'];
                $total_item = $_POST['total_item'];
                $tanggal_pengiriman = $_POST['tanggal_pengiriman'];
                $jenis_kurir = $_POST['jenis_kurir'];
                $alamat_pengiriman = $_POST['alamat_pengiriman'];
                $biaya_kurir = $_POST['biaya_kurir'];
                $biaya_jaminan = $_POST['biaya_jaminan'];
                $simpan = $_POST['simpan'];
                if($item == "Fujifilm XT30") {
                    $total_cost = 14500000 * $total_item + $biaya_jaminan + $biaya_jaminan;
                } else if ($item == "Sony AR7 IV") {
                    $total_cost = 49000000 * $total_item + $biaya_jaminan + $biaya_jaminan;
                } else{
                    $total_cost = 23500000 * $total_item + $biaya_jaminan + $biaya_jaminan;
                }
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result 
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $customer; ?></li>
                    <li class="list-group-item">Item : <?= $item; ?></li>
                    <li class="list-group-item">Date Shipping : <?= $tanggal_pengiriman; ?> </li>
                    <li class="list-group-item">Courier Type :<?= $jenis_kurir; ?></li>
                    <li class="list-group-item">Shipping Address :<?= $alamat_pengiriman; ?></li>
                    <li class="list-group-item">Courier Cost : <?= $biaya_kurir; ?></li>
                    <li class="list-group-item">Assurance Cost : <?= $biaya_jaminan; ?> </li>
                    <li class="list-group-item">Total Cost :<?= $total_cost; ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Fujifilm XT30 : Rp. 14.500.000,-</li>
                    <li class="list-group-item">Sony AR7 IV : Rp. 49.000.000,-</li>
                    <li class="list-group-item">Nikon Z6 : Rp 23.500.000,-</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>