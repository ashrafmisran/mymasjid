<div class="main-panel">
	<div class="content" style="margin-top: 60px">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">@yield('title')</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="dashboard">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="@yield('title-link')">@yield('title')</a>
					</li>
				</ul>
			</div>
			@yield('panel-body')
		</div>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<nav class="pull-left">
				<ul class="nav">
					<li class="nav-item">
					<li class="nav-item">
						<a class="nav-link" href="#">
							Cadangan / Laporan / Mohon Bantuan
						</a>
					</li>
				</ul>
			</nav>
			<div class="copyright ml-auto">
				2020 &copy; dibangunkan dengan <i class="fa fa-heart heart text-danger"></i> oleh <a href="https://www.khairat2u.com">KHAIRAT2U.COM</a>
			</div>				
		</div>
	</footer>
</div>