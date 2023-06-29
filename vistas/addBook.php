

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
			<nav class="bg-white border-gray-200 dark:bg-gray-900 bg-cover bg-opacity-100 bg-[url('./images/libro.png')]">
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
								<a href="./index.php?view=listarLibros" class="block py-2 pl-3 pr-4 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
									Listar
								</a>
							</li>
							<li>
								<a href="./index.php?view=eliminarLibro" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
									Eliminar/Modificar
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
    <body>
		<div class="object-center py-[100px] ">
        <form class="" action="./index.php?view=procesarAgregado" enctype="multipart/form-data" method="post" >
                <table class=" align-center border-separate border-spacing-2 border border-slate-500 ">
                    <thead>
                        <tr class="font-[bold] text-3xl ">
                            <td class="pl-[10px]">Titulo</td>
                            <td class="pl-[10px]">Editorial</td>
                            <td class="pl-[10px]">Isbn</td>
                            <td class="pl-[10px]">Autor</td>
                            <td class="pl-[10px]">Imagen</td>
                            <td class="pl-[10px]">Descripcion</td>
                            <td class="pl-[10px]">Categoria</td>
                        </tr>
                    </thead> 
                	<tbody>
						<tr>
							<td class="pl-[10px]"><input type="text" class="w-[150px] border-3" name="titulo"> </td>
							<td class="pl-[10px]"><input type="text" class="w-[150px] border-3" name="editorial"> </td>
							<td class="pl-[10px]"><input type="text" class="w-[150px] border-3"  name="isbn"> </td>
                            <td class="pl-[10px]"><input type="text" class="w-[150px] border-3"  name="autor"> </td>
							<td class="pl-[10px]"><input type="file" class="border-3"  name="imagen"> </td>
							<td class="pl-[5px]"><input type="text" class="w-[150px] border-3"  name="descripcion"> </td>
                            <td class="pl-[10px]">
                                <select id="categories" name="category" class="pr-[5px]">
                                    <option selected>Category</option>
                                    <?php for($i=0;$i<count($cat);$i++){ ?>
                                            <option  class="table__input" value="<?php echo $cat[$i]['id'];?>" name=""><?php echo $cat[$i]['nombre'];?></option>
                                    <?php } ?>
                                </select>
                            </td>
							<td><input type="submit" name="insert" value="Agregar" class="container__submit container__submit_actualizar"></td>
						<tr>
					</tfoot>
            	</table>
			</form> 
		</div>
    </body>
</html>
