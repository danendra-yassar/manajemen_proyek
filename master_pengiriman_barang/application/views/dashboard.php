<style>
	ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 60px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
</style>

<!-- Small boxes (Stat box) -->
<div class="row">
 <div class="content-wrapper">
  <section class="content-header">
   <h1>
   <div class="col-md-12 content">
  			  <div class="panel panel-default">
				<div class="panel-heading">
					Dashboard
				</div>
			<div class="panel-body">
  				<p>Arep di isi opo terserah</p>
			</div>
		</div>
   </h1>
</section>
	<section class="content">
		<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
				<div class="inner">
					<h3>36</h3>

					<p>Barang</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<a href="../index.php/barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
				<div class="inner">
					<h3>3<sup style="font-size: 20px">%</sup></h3>

					<p>Pengiriman</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="../index.php/pengiriman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
				<div class="inner">
					<h3>9</h3>

					<p>Kurir</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="../index.php/kurir" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
				<div class="inner">
					<h3>3</h3>

					<p>Kategori</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="../index.php/kategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</section>
</div>
<section class="contain-header">
	<div class="content-wrapper">
		<div class="col-md-6 offset-md-3">
			<h4>Latest News</h4>
			<ul class="timeline">
				<li>
					<a href="../index.php/pengiriman">Paket Anggar Jati Saesario sedang dikirim</a>
					<a href="../index.php/pengiriman" class="float-right">( 4 Juni 2020 )</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
				</li>
				<li>
					<a href="../index.php/kurir">Ian Mbo resmi diterima sebagai kurir</a>
					<a href="../index.php/kurir" class="float-right">( 4 Juni 2020 )</a>
					<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
				</li>
				<li>
					<a href="#">Awesome Employers</a>
					<a href="#" class="float-right">1 April, 2014</a>
					<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
				</li>
			</ul>
		</div>
	</div>
</section>
	<footer class="main-footer">
    			<strong>Copyright &copy; MJD Express 2020</strong>
    			All rights reserved.
    			<div class="float-right d-none d-sm-inline-block">
      			<b>Version</b> 0.0.1
    			</div>
	</footer>
