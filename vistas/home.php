
<?php
include("../models/Conex.php");
//include("./vistas/login.php");
$conex = Conectarse();
$libro = "SELECT * FROM libro";
$categoria = "SELECT * FROM categoria";

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
		<script src="https://cdn.tailwindcss.com"></script>
		<link href="./dist/output.css" rel="stylesheet">
		<script src="../js/util.js"></script>
		<title>SeaBook</title>
	</head>
	<body  >
		<header class= "px-3 py-4 flex items-center  bg-cover bg-opacity-100 bg-[url('../images/libro.png')]">   						
			<div class="justify-self-end m-[0px] ">
				<button class="show-Modal px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out showModal">
					Logout
				</button>     
			<!--	<a href="#" class="px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
					Sign up
				</a>      -->    	
			</div>	
			<div class="m-[0px] flex">
				<h1 class="font-bold text-white-900 text-7xl pl-[250px] pr-2 font-black dark:text-white drop-shadow-2xl">
					SeaBook
				</h1>
				<img src ="../images/logo.png" style="width:70px;height:70px;" class="pl-2">
			</div>				
			<div class="pl-[220px] m-[0px]">		
				<input class= "placeholder:italic placeholder:text-slate-400 block bg-white w-[100px] border border-slate-300 rounded-md shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search..." type="text" name="search"/>                                     <!--"placeholder:italic placeholder:text-slate-400 block bg-white w-20 border border-slate-300 rounded-md py-0.5 pl-9 pr-0.5 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" -->
			</div>
		</header>
		<div class=" grid grid-cols-1 flex items-center justify-center bg-gradient-to-r from-blue-200 to-blue-100">
			<div class=" h-[290px] bg-cover bg-[url('../images/CYK4ES3RWVBFVEZKD3EZXHGPUQ.png')]">
				<div class="relative h-56 overflow-hidden rounded-lg md:h-[290px]"></div>
			</div>		
				<?php	
					$resultadoCat=mysqli_query($conex, $categoria);
					foreach($resultadoCat as $cat){
						?>
				<h2 class="text-3xl font-medium text-[#333] pl-[50px] pt-[20px] ">
					<?php echo $cat["nombre"];?>
				</h2>
				<div class="flex flex-wrap justify-center mt-1">
					<?php	
						$resultado=mysqli_query($conex, $libro);
						foreach($resultado as $lib){
							if ($lib["idCategoria"] === $cat["id"]){
					?>
						<!-- card 1 -->
					<div class="p-4 max-w-sm">
						<div class="flex rounded-lg h-full bg-teal-400 p-2 flex-col">
							<div class="flex items-center mb-3">
								<figure class="pl-7"><img src="data:image/png;base64,<?php echo base64_encode($lib['imagen']); ?>" class="h-full w-full  border-4 border-solid border-[#4070F4] max-w-[110px] w-full  px-0 py-0" alt="car!"/></figure>
							</div>
							<div class="flex flex-col justify-center flex-grow">
								<h2 class=" card-title text-lg font-medium text-[#333]">
									<?php echo $lib["titulo"];?>
								</h2>
								<p class=" ">
									<?php echo $lib["autor"];?>
								</p>
								<a href="#" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">VER
									<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
										stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
										<path d="M5 12h14M12 5l7 7-7 7"></path>
									</svg>
								</a>
							</div>
						</div>
					</div>
						<?php
						}
							}
							mysqli_free_result($resultado);
						?>
				</div>
				<?php 
				}
				mysqli_free_result($resultadoCat);
				?>
		</div>
		<footer class="bg-gradient-to-r from-blue-200 to-blue-100">
			<div class="pt-[100px]">

			</div>
		</footer>
	</body>



	<script>
	/*	var swiper = new Swiper(".slide-content",{
			slidesPerView: 5,
			spaceBetween: 25,
			slidesPerGroup:3,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});*/
	</script>


</html>
