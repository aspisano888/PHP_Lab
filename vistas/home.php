
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

 		<link href="../dist/output.css" rel="stylesheet">
		 <link href="https://cdn.jsdelivr.net/npm/daisyui@3.0.20/dist/full.css" rel="stylesheet" type="text/css" />
         <script src="https://cdn.tailwindcss.com"></script>
         <link rel="stylesheet" href="../images/swiper-bundle.min.css">
		 <title>SeaBook</title>
	</head>
	<body >
			<header class= "px-3 py-4 flex items-center justify-between bg-cover bg-center bg-opacity-100 bg-[url('../images/libro.png')]">   						
		<!--		<div class="justify-self-end m-[0px] ">
					<a href="../vistas/login.html" class="px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
						Login
					</a>              
					<a href="#" class="px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
						Sign up
					</a>          	
				</div>	-->
				<div class="m-[0px] flex">
					<h1 class="font-bold text-black text-7xl pl-[15px] pr-2 font-black text-gray-900 dark:text-white drop-shadow-2xl">SeaBook</h1>
					<img src ="../images/logo.png" style="width:70px;height:70px;" class="pl-2">
				</div>				
				<div class="m-[0px]">		
					<input class= "placeholder:italic placeholder:text-slate-400 block bg-white w-[100px] border border-slate-300 rounded-md shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search..." type="text" name="search"/>                                     <!--"placeholder:italic placeholder:text-slate-400 block bg-white w-20 border border-slate-300 rounded-md py-0.5 pl-9 pr-0.5 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" -->
				</div>
			</header>

			<div class="grid grid-cols-1 flex items-center justify-center bg-gradient-to-r from-blue-200 to-blue-100   ">
<!-- carrousel imagenes -->
				<div id="default-carousel" class="relative h-[290px] w-full "  data-carousel="slide">
					<!-- Carousel wrapper -->
					<div class="relative h-56 overflow-hidden rounded-lg md:h-[290px]">
						 <!-- Item 1 -->
						<div class="  duration-100 ease-in-out" data-carousel-item active >
							<img src="../images/logo.png" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 2 -->
						<div class="  duration-100 ease-in-out" data-carousel-item active >
							<img src="../images/libro.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 3 -->
						<div class="  duration-100 ease-in-out" data-carousel-item active>
							<img src="../images/remera.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 4 -->
						<div class="  duration-100 ease-in-out" data-carousel-item active>
							<img src="../images/cel.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 5 -->
						<div class="  duration-100 ease-in-out" data-carousel-item active>
							<img src="../images/cartel.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
					</div>

				</div>

<!-- slider     --><h2 class="text-lg font-medium text-[#333] pl-[70px] pt-[70px]">
						Clasificación 1
					</h2>
					<div class="slide-container max-w-[980px] w-full  px-0 py-2 swiper">
						<div class="slide-content mx-10 my-5 overflow-hidden">
							<div class="card-wrapper swiper-wrapper">
						<!-- slide 1-->
								<div class="card bg-white rounded-[25px] swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/logo.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 1</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>

						<!-- slide 2-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/remera.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 2</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>

						<!-- slide 3-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/libro.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 3</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>
						<!-- slide 4-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/cartel.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 4</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>
						<!-- slide 5-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/cel.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 5</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>								
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>		
<!-- slider     -->
					<h2 class="text-lg font-medium text-[#333] pl-[70px] pt-[50px]">
						Clasificación 2
					</h2>
					<div class="slide-container max-w-[980px] w-full  px-0 py-2 swiper">
						<div class="slide-content mx-10 my-0 overflow-hidden">
							<div class="card-wrapper swiper-wrapper">
						<!-- slide 1-->
								<div class="card bg-white rounded-[25px] swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/logo.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 1</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>

						<!-- slide 2-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/remera.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 2</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>

						<!-- slide 3-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/libro.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 3</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>
						<!-- slide 4-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/cartel.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 4</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>
						<!-- slide 5-->
								<div class="card bg-white rounded-[25px] w-80 swiper-slide">
									<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
										<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>

										<div class="relative h-[150px] w-[150px] rounded-[50%] bg-[#EFEFEF] p-[3px]">
											<img src="../images/cel.png" alt="" class="h-full w-full object-cover rounded-[50%] rounded-[50%] border-4 border-solid border-[#4070F4]">
										</div>
									</div>
									<div class="card-content flex flex-col items-center px-3.5 py-2.5">
										<h2 class="text-lg font-medium text-[#333]">Libro 5</h2>
										<p class=" text-sm text-[#707070] text-center">descripción</p>
										<button class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">PRESTAR</button>
									</div>
								</div>								
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
				</div>	
			</div>

			<footer class="bg-gradient-to-r from-blue-200 to-blue-100">
				<div class="pt-[100px]">

				</div>
			</footer>


	</body>

	<script src= "../images/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".slide-content",{
			slidesPerView: 3,
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
		});
	</script>
	
</html>