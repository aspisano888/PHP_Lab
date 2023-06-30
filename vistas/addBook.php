

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     	<link href="../dist/output.css" rel="stylesheet">
     	<title>SeaBook</title>
     	<link href="https://cdn.jsdelivr.net/npm/daisyui@3.0.20/dist/full.css" rel="stylesheet" type="text/css" />
      	<script src="https://cdn.tailwindcss.com"></script>
	</head>	
	<body>
		<nav class="bg-white border-gray-200 dark:bg-gray-900 bg-center bg-cover bg-opacity-100 bg-[url('./images/libro.png')]">
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
					</ul>
				</div>
			</div>
		</nav>
		<div class="object-center py-[100px] bg-gradient-to-r from-blue-200 to-blue-100">
        	<form class="pl-[10px] pr-[10px]" action="./index.php?view=procesarAgregado" enctype="multipart/form-data" method="post" >
                <table class=" align-center border-separate border-spacing-3  border border-slate-500 ">
                    <thead>
                        <tr class="font-[bold] text-3xl ">
                            <td class=" pl-[10px] text-black">Titulo</td>
                            <td class="pl-[10px] text-black">Editorial</td>
                            <td class="pl-[10px] text-black">Isbn</td>
                            <td class="pl-[10px] text-black">Autor</td>
                            <td class="pl-[10px] text-black">Imagen</td>
                            <td class="pl-[10px] text-black">Descripcion</td>
                            <td class="pl-[10px] text-black">Categoria</td>
                        </tr>
                    </thead> 
                	<tbody>
						<tr>
							<td class="pl-[10px] text-black"><input type="text" class="bg-white w-[110px] border-3" name="titulo"> </td>
							<td class="pl-[10px] text-black"><input type="text" class="w-[150px] border-3 bg-white" name="editorial"> </td>
							<td class="pl-[10px] text-black"><input type="text" class="w-[150px] border-3 bg-white"  name="isbn"> </td>
                            <td class="pl-[10px] text-black"><input type="text" class="w-[150px] border-3 bg-white"  name="autor"> </td>
							<td class="pl-[10px] text-black "><input type="file" class=" w-[210px]  border-3 bg-white"  name="imagen"> </td>
							<td class="pl-[10px] text-black"><input type="text" class="w-[150px] border-3 bg-white"  name="descripcion"> </td>
                            <td class="pl-[10px] text-black">
                                <select id="categories" name="category" class="border-black text-black btn hover:bg-transparent w-[125px] h-[2px] bg-transparent pr-[10px]">
                                    <option selected>Category</option>
                                    <?php for($i=0;$i<count($cat);$i++){ ?>
                                            <option  class="table__input" value="<?php echo $cat[$i]['id'];?>" name=""><?php echo $cat[$i]['nombre'];?></option>
                                    <?php } ?>
                                </select>
                            </td>
							<td><input type="submit" name="insert" value="Agregar" class="btn btn-success hover:bg-blue-500 font-semibold border-black w-20"></td>
						<tr>
					</tfoot>
            	</table>
			</form> 
		</div>
        <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        	<div class="grid grid-flow-col gap-4">
          		<a class="link link-hover">About us</a> 
          		<a class="link link-hover">Contact</a> 
          		<a class="link link-hover">Jobs</a> 
          		<a class="link link-hover">Press kit</a>
        	</div> 
        	<div>
          		<div class="grid grid-flow-col gap-4">
           			<a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
            		<a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
            		<a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
          		</div>
        	</div> 
        	<div>
          		<p>Copyright © 2023 - All right reserved by SeaBook & Cia</p>
        	</div>
      	</footer>
    </body>
</html>
