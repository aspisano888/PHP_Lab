<?php
//include("../models/Conex.php");
include_once("./controller/homeController.php");

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
	<!--	<script src="../js/util.js"></script>-->
		<title>SeaBook</title>
	</head>
	<body>				
			<nav class="bg-white border-gray-200 dark:bg-gray-900 bg-cover bg-opacity-100 bg-[url('./images/libro.png')]">
				<div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
					<a href="../index.php?view=<?php echo $_SESSION['home']?>" class="flex items-center">
						<img src ="./images/logo.png" style="width:70px;height:70px" class="h-8 mr-3" alt="Flowbite Logo" />
						<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SeaBook</span>
					</a>
					<div class="flex items-center md:order-2">
						<a href="../index.php?view=signout" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign in</a>
						<button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
							<span class="sr-only">Open main menu</span>
							<svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
						</button>
					</div>
					<div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
						<ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
						</ul>
					</div>
				</div>
			</nav>
		<div class=" grid grid-cols-1 flex items-center justify-center bg-gradient-to-r from-blue-200 to-blue-100">
			<div class=" h-[290px] bg-cover bg-[url('./images/CYK4ES3RWVBFVEZKD3EZXHGPUQ.png')]">
				<div class="relative h-56 overflow-hidden rounded-lg md:h-[290px]"></div>
			</div>		
				<?php	
					for($i=0;$i<count($cat);$i++){
				?>
				<h2 class="text-3xl font-medium text-[#333] pl-[50px] pt-[20px] ">
					<?php echo $cat[$i]["nombre"];?>
				</h2>
				<div class="flex flex-wrap justify-center mt-1">
					<?php	
						for($j=0;$j<count($pd);$j++){
							if ($pd[$j]["idCategoria"] === $cat[$i]["id"]){
					?>
						<!-- card  -->
					<div class="p-4 max-w-sm">
						<div class="flex rounded-lg h-full bg-teal-400 p-2 flex-col">
							<div class="flex items-center mb-3">
								<figure class="pl-7"><img src="data:image/png;base64,<?php echo base64_encode($pd[$j]['imagen']); ?>" class="h-full w-full  border-4 border-solid border-[#4070F4] max-w-[110px] w-full  px-0 py-0" alt="car!"/></figure>
							</div>
							<div class="flex flex-col justify-center flex-grow">
								<h2 class=" card-title text-lg font-medium text-[#333]">
									<?php echo $pd[$j]["titulo"];?>
								</h2>
								<p class=" ">
									<?php echo $pd[$j]["autor"];?>
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
						?>
				</div>
				<?php 
				}
				?>
		</div>
		<footer class="bg-gradient-to-r from-blue-200 to-blue-100">
			<div class="pt-[100px]">

			</div>
		</footer>
	</body>
</html>
