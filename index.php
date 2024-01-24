<?php
include_once 'header.php';
error_reporting(0);

$pelanggan   = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(id_pelanggan) AS pelanggan FROM tbl_pelanggan"));

$sql1 = mysqli_query($con, "SELECT * FROM tbl_pemasukan");
while ($data = mysqli_fetch_array($sql1)) {
    $subtotal = $data['stok'] * $data['harga'];
    $pemasukan = $pemasukan + $subtotal;
}
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Pelanggan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pelanggan['pelanggan']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Pemasukan</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= 'Rp. ' . number_format($pemasukan, 0, ',', '.'); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-download fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Row-->

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="download.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Frajarakminimarket.com%2Frak-sayur-minimarket-display-produk-sayur-di-toko%2F&psig=AOvVaw1VgXatiCZh6fUCIpBErFhu&ust=1705705365250000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLDOpemF6IMDFQAAAAAdAAAAABAD" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Frajarakminimarket.com%2Frak-sayur-minimarket-display-produk-sayur-di-toko%2F&psig=AOvVaw1VgXatiCZh6fUCIpBErFhu&ust=1705705365250000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLDOpemF6IMDFQAAAAAdAAAAABAD" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1591085686350-798c0f9faa7f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" alt="fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->

</div>
<!---Container Fluid-->

<?php include_once 'footer.php'; ?>