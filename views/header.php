<div class="py-3" style="background-color: #6F9940;">

	<div class="pl-3 align-self-center" style="color: #fffafa;">
		<a href="index.php" style="color: #fffafa;">
			<h3 class="font-weight-bolder mr-0" style="text-align: center;">
				Kegite Club International (Ilya Du FUTO)<br>Federal University of
				Technology, Owerri.
			</h3>
		</a>
	</div>

	<nav class="navbar navbar-expand-md navbar-light btn-group mt-4 mb-0 pb-0">

		<button class="navbar-toggler" data-toggle="collapse"
			data-target="#headerMenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="headerMenu" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php">				<!-- No need specifying method attribute as the GET is the default -->
						<input type="hidden" name="command" value="HOME" /> <input
							type="submit" value="Home" class="btn btn-light" />
					</form>
				</li>

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php">
						<input type="hidden" name="command" value="HISTORY" /> <input
							type="submit" value="About Ilya FUTO" class="btn btn-light" />
					</form>
				</li>

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php" method="GET">
						<input type="hidden" name="command" value="CHIEF" /> <input
							type="submit" value="Chiefeses" class="btn btn-light" />
					</form>
				</li>

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php" method="GET">
						<input type="hidden" name="command" value="COMRAD" /> <input
							type="hidden" name="category" value="lsf" /> <input type="submit"
							value="Life Senior Fellowses" class="btn btn-light" />
					</form>
				
				</li>

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php" method="GET">
						<input type="hidden" name="command" value="COMRAD" /> <input
							type="hidden" name="category" value="sf" /> <input type="submit"
							value="Senior Fellowses" class="btn btn-light" />
					</form>
					
				</li>

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php" method="GET">
						<input type="hidden" name="command" value="COMRAD" /> <input
							type="hidden" name="category" value="f" /> <input type="submit"
							value="Fellowses" class="btn btn-light" />
					</form>
				</li>

				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php">
						<input type="hidden" name="command" value="GALLERY" /> <input
							type="submit" value="Gallery" class="btn btn-light" />
					</form>
				</li>
				
				<li class="nav-item">
					<form class="mx-1 mb-1" action="controller.php" method="GET">
						<input type="hidden" name="command" value="ADMIN_LOGIN" /> 
						<input type="submit" value="Admin Login" class="btn btn-light" />
					</form>
				</li>

			</ul>
		</div>

	</nav>

</div>









<!--  
// see the header in the JSP version. Amend it to suit PHP mvc
 -->


