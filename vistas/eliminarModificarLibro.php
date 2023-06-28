
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
		<title>Listado Libros</title>
	</head>
	<body>
    		<nav class="bg-white border-gray-200 dark:bg-gray-900  bg-opacity-100 bg-[url('./images/libro.png')]">
				<div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
					<a href="./index.php?view=<?php echo $_SESSION['home']?>" class="flex items-center">
						<img src ="./images/logo.png" style="width:70px;height:70px" class="h-8 mr-3" alt="Flowbite Logo" />
						<span class="self-center text-5xl font-semibold whitespace-nowrap dark:text-white">SeaBook</span>
					</a>
					<div class="flex items-center md:order-2">
						<a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign out</a>
						<button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
							<span class="sr-only">Open main menu</span>
							<svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
						</button>
					</div>
					<div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
						<ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
							<li>
								<a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
									Agregar
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
        <div class="overflow-x-auto grid grid-auto-row py-[30px]">
            <table class="table table-xs flex items-center  ">
                <thead>
                <tr class="font-[bold] text-3xl ">
                    <td></td> 
                    <td class="pl-[85px]">Titulo</td> 
                    <td>Editorial</td> 
                    <td>Isbn</td> 
                    <td>Autor</td> 
                </tr>
                </thead> 
                <tbody>
                    <?php
                    for($i=0;$i<count($pd);$i++){
                    ?>
                    <tr>
                        <td class="">
							<figure class=""><img src="data:image/png;base64,<?php echo base64_encode($pd[$i]['imagen']);?>" class="border-2 border-solid border-[#4070F4] max-w-[70px] h-full w-full " /></figure>
                        </td>
                        <th class="pl-0"><?php echo $pd[$i]["titulo"];?></th> 
                        <td><?php echo $pd[$i]["editorial"];?></td> 
                        <td><?php echo $pd[$i]["isbn"];?></td> 
                        <td><?php echo $pd[$i]["autor"];?></td> 
                        <td >
                            <a href="./controller/editarLibroController.php?id=<?php echo $pd[$i]["id"];?>">Editar</a>
                        </td>
                        <td >
                            <a href="./controller/eliminarLibroController.php?id=<?php echo $pd[$i]["id"];?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
			        }
		            ?>
                </tfoot>
            </table>
        </div>
	</body>
</html>