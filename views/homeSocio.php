
<?php
include("../models/Conex.php");
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
 		<link href="./dist/output.css" rel="stylesheet">
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
		<script src= "../images/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="../images/swiper-bundle.min.css">
		<title>SeaBook</title>
	</head>
	<body  >
		<header class= "px-3 py-4 flex items-center justify-between bg-cover bg-center bg-opacity-100 bg-[url('../images/libro.png')]">   						
			<div class="m-[0px] flex">
				<h1 class="font-bold text-white-900 text-7xl pl-[15px] pr-2 font-black dark:text-white drop-shadow-2xl">
					SeaBook
				</h1>
				<img src ="../images/logo.png" style="width:70px;height:70px;" class="pl-2">
			</div>				
			<div class="m-[0px]">		
				<input class= "placeholder:italic placeholder:text-slate-400 block bg-white w-[100px] border border-slate-300 rounded-md shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search..." type="text" name="search"/>                                     <!--"placeholder:italic placeholder:text-slate-400 block bg-white w-20 border border-slate-300 rounded-md py-0.5 pl-9 pr-0.5 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" -->
			</div>
		</header>
		<div class=" grid grid-cols-1 flex items-center justify-center bg-gradient-to-r from-blue-200 to-blue-100   ">
			<div class=" h-[290px] bg-cover bg-[url('../images/CYK4ES3RWVBFVEZKD3EZXHGPUQ.png')]">
				<div class="relative h-56 overflow-hidden rounded-lg md:h-[290px]">
					
				</div>
			</div>
			<!-- slider 1-->
			<?php	
				$resultadoCat=mysqli_query($conex, $categoria);
				foreach($resultadoCat as $cat){
			?>
			<h2 class="text-lg font-medium text-[#333] pl-[70px] pt-[50px]">
				<?php echo $cat["nombre"];?>
			</h2>
			<div class=" slide-container max-w-[1500px] w-full  px-0 py-0  swiper">
				<div class="slide-content mx-10 my-5 overflow-hidden">
					<!-- slides-->
					<div class="card-wrapper swiper-wrapper ">
						<?php	
							$resultado=mysqli_query($conex, $libro);
							foreach($resultado as $lib){
								if ($lib["idCategoria"] === $cat["id"]){
						?>
						<div class="card bg-white rounded-[25px] swiper-slide">
							<div class="image-content flex flex-col items-center px-3.5 py-2.5 gap-y-[5px] relative px-0 py-[25px]">
								<span class="overlay absolute h-full w-full bg-[#4070F4] left-0 top-0 rounded-[25px_25px_0_25px]"></span>
								<div class="relative h-[150px] w-[150px]  bg-[#EFEFEF] p-[3px]">
									<img src="data:image/png;base64,<?php echo base64_encode($lib['imagen']); ?>" alt="" class="h-full w-full  border-4 border-solid border-[#4070F4]">
								</div>
							</div>
							<div class="card-content flex flex-col items-center px-3.5 py-2.5">
								<h2 class="text-lg font-medium text-[#333]"><?php echo $lib["titulo"];?></h2>
								<p class=" text-sm text-[#707070] text-center"><?php echo $lib["autor"];?></p>
								<button href="./vistas/descriptionLibro.php?id=<?php echo $lib["id"];?>" class=" bg-[#4070F4] text-base text-white m-3.5 px-4 py-2 rounded-md border-[none] cursor-pointer transition-all duration-[0.3s] ease-[ease]">VER</button>
							</div>
						</div>
						<?php 
								}
							}
							mysqli_free_result($resultado);
						?>								
					</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
				</div>	
			</div>		
			<?php 
				}
				mysqli_free_result($resultadoCat);
			?>		
		<footer class="bg-gradient-to-r from-blue-200 to-blue-100">
			<div class="pt-[100px]">

			</div>
		</footer>
	</body>

	<script src="../js/util.js"></script>
    <script>
        var swiper = new Swiper(".slide-content",{
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
        });
	</script>


</html>