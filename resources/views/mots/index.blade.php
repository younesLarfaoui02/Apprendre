<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.delete-btn:focus ,.delete-btn:hover{
		background: red;
		}
		main{
			height: 999vh;
		}
		tr:first-of-type {
			text-align: center;
		}
		td.center{
			font-size: xx-large;
 			text-align: center;
  			vertical-align: middle;
			font-family: Helvetica;
			color:#EF4135;
		}		
		td.center:first-of-type{
			font-size: xx-large;
 			text-align: center;
  			vertical-align: middle;
			font-family: Helvetica;
			color: white;
		}

	</style>
</head>

<body>
    
    <!-- Header -->
	<header style="background: linear-gradient(to bottom, #0055A4, #FFFFFF, #EF4135)">
			<nav class="navbar navbar-expand-lg navbar-light container">
				<a class="navbar-brand" href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAA6lBMVEX////+AAIQFXngAAANF3ARFXf///z//f/8//sQFXv75eIVFH0NFn8NF3YHCoE+QYH2/P7/+P8ECB5MRz4RFIH7AAdSQkPrDg5JAwL1BwA5OTk/SERDQ0MKCW3x8fECBS3YAADjAABFSi9BQGBBRFs+R01ARU9CRFNHQk9CQUdDQ0RARj1HQEEwTT5eQTldPT54MzFKenIMCmsLE1cIDWIODVkFAFdDQ2vx8+zv9Ovl+O313dXCAADWABPPAAADChcLGWQOEYw9QoALGm4ECRxURD4FDBNJTIABBQMABSYCBDE1PDY2NDlKAwEPeoZFAAACtElEQVR4nO3U21YTMRSA4XSazEw6TaGYAYYeGMCKUgQFPMuhlKIc+v6vY0ZcLq8126v/X7nI9bf23mp37/lgMnkxGcRuf29/OHz5ahi3g4PD6eHB66PjdZmGR2/eqrXRyenZ2dkocien795/GH8cC/RpPP785WtbpvP6YqG2Zz3nfc/byBWz3spqnqvYraZ5luWduiVTVe0cqUvtrpxLjI6cb0yiizyZ9NNOu1WKVFX1VN0Gk8QZHztti2sJEyVrUpYbA7Xme8nM+yKJ3DwZBZNMACVXYXfaQrsTTNaDiXc+MYlzzjQ542J8jfW9lX6aRhfJnkzE7klrZ6FuCq+74aDEvrFd29yT+ChZmqu+3JwEk2dqrTFJjI28OtY6IZM8lTQpMcEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDD5y/6HiffOW+uLyDnrr1ejg4TSPBM0af2eE2OsSRJjmvezf/4a54NJHn9MGpMs79StSqSy1Z6qS5PMjdYudtaH3ZEzkZqTqqqn6qYotHXOxK47EzWphUz+vCfdyOfEJoJzEu5JLbM6YXeqRZiT5p64JPacaDsK9yQ+ifDulGV7oW61u9LzuZ7rqM2v9Mk3AZFfdc43ZDrfuJiq79v3d9sS3d/fPW5J9LD1+HC8udwUablcDn4AcWIb64YWhIUAAAAASUVORK5CYII=" alt="Logo" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link mr-3 text-light btn btn-lg btn-danger rounded-pill py-3 px-5" href="#">Les mots difficiles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mr-3 text-light btn btn-lg btn-danger rounded-pill py-3 px-5" href="#">Les verbes difficiles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mr-3 text-light btn btn-lg btn-danger rounded-pill py-3 px-5" href="#">Les regles</a>
						</li>
					</ul>
				</div>
			</nav>
	</header>

	<!-- Main Content -->
	<main style="background : linear-gradient(to right, #0055A4, #0055A4, #EF4135, #EF4135);" >
		<div class="container">
			<h1 class="text-start text-white  d-inline my-3">list of difficults words</h1>
			<div class="text-right my-5">
			<button  class="btn btn-lg btn-success rounded-pill py-3 px-5 ">
				<a href="{{route('mots.create')}}" class="text-light">Nouveau Mot</a>
			</button>
			</div>
			<table class="table text-light">
				<thead>
					<tr>
						<th scope="col">Mot</th>
						<th scope="col">Signification</th>
						<th scope="col">Image</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mots as $mot)
						<tr>
							<td scope="row" class="center">
								{{$mot->mot}}
							</td>
							<td scope="row"  class="center">
								{{$mot->signification}}
							</td>
							<td scope="row" class="center">
								<img src="{{$mot->image}}" alt="not-found" class="rounded"/>
							</td>
							<td scope="row" class="center">
								<button  class="btn btn-lg  rounded-pill py-1 px-3 ">
									<a href="{{route('mots.edit',['mot' => $mot->id])}}"  title="Edit">
										<i class="fas fa-edit text-warning"></i>
									</a>
								</button>
								<form method="POST" action="{{ route('mots.destroy' , $mot->id) }}" class="d-inline">
									@csrf
									@method('DELETE')
									<button class="delete-btn btn btn-outline-secondary bg-danger" style="border : none ;" type="submit">
        								<i class="fas fa-trash text-light"></i>
      								</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</main>
</body>
</html>

