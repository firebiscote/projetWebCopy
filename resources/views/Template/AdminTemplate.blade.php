<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title>{{$title}}</title>
		@yield('css')
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
    </head>
    <body class="p-3 mb-2 bg-info text-dark">
		<header class="header" id="top"></header>
		<div class="w-100">
			<div class="row">
			  <div class="col-sm">
				<img id="logo" src="{{url('image/cesi.png')}}" alt=""/>
			  </div>
			  <div class="col-sm">
				<h1 id="titrePage">{{$title}}</h1>
			</div>
			  <div class="col-sm mt-2 text-right">
				<h5 id="identification">Nom-Prénom</h5>
				<p>Administrateur</p>
			  </div>
			</div>
		  </div>
		 
			<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-dark borderB" >
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Offre
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Rechercher</a>
								<a class="dropdown-item" href="#">Mes offres</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Entreprise
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Rechercher</a>
								<a class="dropdown-item" href="#">Mes entreprises</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Délégué</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Étudiant</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Wish-list</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Mes demandes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pilote</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		

        @yield('content')

		<style>
			
			#logo {
				width: 350px;
				height: 100px;
			}

			#titrePage
			{
				text-align: center;
				margin-top:20px;
			}
			
		</style>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
	</body>
</html>

