<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reservation</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
        background: #f7f5f2;
		font-family: 'Roboto', sans-serif;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px auto;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .position{
		margin-left:16px;
		margin-right:54%;
	}
    .table-title {
		color: #fff;
		background: #40b2cd;		
		padding: 16px 25px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
	.search-box {
        position: relative;
        float: right;
    }
	.search-box .input-group {
		min-width: 300px;
		position: absolute;
		right: 0;
	}
	.search-box .input-group-addon, .search-box input {
		border-color: #ddd;
		border-radius: 0;
	}	
    .search-box input {
        height: 34px;
        padding-right: 35px;
        background: #f4fcfd;
        border: none;
        border-radius: 2px !important;
    }
	.search-box input:focus {
        background: #fff;
	}
	.search-box input::placeholder {
        font-style: italic;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 6px 0;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 2px;
    }
    table.table {
        table-layout: fixed;
        margin-top: 15px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:first-child {
        width: 60px;
    }
    table.table th:last-child {
        width: 120px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
</style>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();
    
	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
</script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="position"> 
        <a class="navbar-brand" href="#">Reservation</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">test</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="<?php echo base_url('user/user')?>">Home<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo base_url('registrasi')?>">Registrasi</a>
        <a class="nav-item nav-link active ml-auto" href="<?php echo base_url('informasi')?>">Informasi</a>
        <a class="nav-item nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
        </div>
    </div>
    </nav>
	<div class="container">
        <!-- Daftar Rumah Sakit --> 
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
					<div class="col-sm-6">
						<h2>Informasi <b>Rumah Sakit</b></h2>
					</div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 22%;">Rumah Sakit</th>
                        <th style="width: 22%;">Alamat</th>
                        <th>Kota</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    foreach($rumah_sakit as $u){
                ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $u->nama_rs ?> </td>
                        <td> <?php echo $u->alamat ?> </td>
                        <td> <?php echo $u->kota ?> </td>
                        <td> <?php echo $u->jam_operasional ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
					<div class="col-sm-6">
						<h2>Informasi <b>Poli</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Poli</th>
                        <th style="width: 22%;">Nama Dokter</th>
                        <th> Ruangan </th>
                        <th> Jam Operasional </th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    foreach($poli as $u){
                ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $u->nama_poli ?> </td>
                        <td> <?php echo $u->nama_dokter ?> </td>
                        <td> <?php echo $u->ruangan ?> </td>
                        <td> <?php echo $u->jam_operasional ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
					<div class="col-sm-6">
						<h2>Reservation <b>Details</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th style="width: 22%;">Rumah Sakit</th>
                        <th>Poli</th>
                        <th>Antrean</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    foreach($antrean as $u){
                ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $u->nama_lengkap ?> </td>
                        <td> <?php echo $u->nama_rs ?> </td>
                        <td> <?php echo $u->poli ?> </td>
                        <td> <?php echo $u->no_antrean ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>     
</body>
</html>                                		                                                        