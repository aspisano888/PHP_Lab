<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../dist/output.css" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
		<script src="https://cdn.tailwindcss.com"></script>
        <title>SeaBook</title>
	</head>
    <body>
        <div class="modal  h-screen w-full fixed left-0 top-0 flex justify-center item-center bg-black bg-opacity-50 ">
				<div class="bg-center  w-[800px] bg-[url('./images/libro.png')] ">
					<div class=" flex flex-col items-center justify-center px-6 py-8 bg-bl mx-auto md:h-screen lg:py-0">
						<a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
							<img class="w-11 h-11 mr-2" src="./images/logo.png" alt="logo">SeaBook    
						</a>
						<div class="w-full bg-gray-800 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
							<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
								<h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
									Inicia sesión con tu cuenta
								</h1>
								<form class="space-y-4 md:space-y-6" action="#">
									<div>
										<label for="nickname" class="block mb-2 text-sm font-medium text-white dark:text-white">
											Nickname
										</label>
										<input type="nickname" name="nickname" id="nickname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname" required="">
									</div>
									<div>
										<label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">
											Contraseña
										</label>
										<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
									</div>
									<div class="flex items-center justify-between">
										<div class="flex items-start">
											<div class="flex items-center h-5">
												<input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
											</div>
											<div class="ml-3 text-sm">
												<label for="remember" class="text-gray-500 dark:text-gray-300">
													Recordar
												</label>
											</div>
										</div>
											<a href="#" class="text-sm font-medium text-white hover:underline dark:text-primary-500">
												¿Has olvidado tu contraseña?
											</a>
									</div>
									<button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Iniciar sesión</button>
									<p class="text-sm font-light text-gray-500 dark:text-gray-400">
										¿Aún no tienes cuenta? 	
										<a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">
											Registrarse
										</a> 
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   </body>
</html>


  