<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Интернет магазин</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/template/css/bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap&subset=cyrillic,cyrillic-ext,latin-ext">
<!-- 	<link rel="stylesheet/less" href="/template/style.less"> -->
	<style>
		a{
			color: black;
		}
		.nav-link:hover,
		a.active{
			background-color: rgba(0,0,0,0.1);
		}
		.table_products svg {
				width: 20px !important;
		}
		main{
			padding-bottom: 30px;
		}
		@media (max-width: 992px){
			.table_products thead {
				display: none;
			}
			.table_products tbody tr{
				display: block;
				width: 100%;
			}.table_products tbody tr td{
				display: block;
			}
			.table_products tbody tr td:nth-child(1){

			}
			.table_products tbody tr td:nth-child(2){

			}
			.table_products tbody tr td:nth-child(3){

			}
			.table_products tbody tr td:nth-child(4){

			}
			.table_products tbody tr td:nth-child(5){

			}
		}
		@media (min-width: 1024px){
			.sidebar{
				height: 100vh;
			}
		}
	</style>
</head>

<body>
	
	<nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Beauty</a> 
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="/user/logout">Выход</a>
			</li>
		</ul>
	</nav>
	
	<div class="container-fluid">
	  <div class="row">
	    <nav class="col-md-2 d-md-block bg-light sidebar">
	      <div class="sidebar-sticky">
	        <ul class="nav flex-column pt-md-5">
	          <li class="nav-item">
	            <a class="nav-link" href="/admin/">
	              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
	              Главная <span class="sr-only">(current)</span>
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="/admin/orders">
	              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
	              Заказы
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="/admin/products">
	              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
	              Продукты
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="/admin/categories">
	              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
	              Категории
	            </a>
	          </li>
	          <!-- <li class="nav-item">
	            <a class="nav-link" href="#">
	              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
	              Integrations
	            </a>
	          </li> -->
	          <!-- <li class="nav-item">
	            <a class="nav-link" href="#">
	              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
	              Customers
	            </a>
	          </li> -->
	        </ul>

	        
	      </div>
    </nav>