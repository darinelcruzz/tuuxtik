<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TuuxtiK Express</title>
  <link rel="icon" href="{{ asset('img/tuuxtik_logo.png') }}">
  <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- ... -->
</head>
<body class="bg-secondary">
  @php
    if(isset($_POST["email"])){

      // $to = "contacto@tuuxtik.mx";
      $to = "darinelcruzz@gmail.com";
      $subject = "Solicitud de servicio";
      $from=$_POST["email"];
      $msg=$_POST["message"];
      $headers = "From: $from";

      mail($to,$subject,$msg,$headers);
    }
  @endphp
  <div class="container bg-white w-5/6 md:w-1/2 mx-auto text-gray-200 rounded-md p-2 border-2 border-primary md:mt-36">

    {{-- <div class="flex justify-around flex-wrap content-center"> --}}
    <div class="grid grid-cols-2 gap-1 md:gap-2 content-center">
      {{-- <div class="flex-1"> --}}
      <div class="col-span-2 md:col-span-1">
        <img src="{{ asset('img/tuuxtik_logo.png') }}" class="w-full">          
      </div>

      {{-- <div class="flex-1 text-primary font-poppins text-xl pt-24"> --}}
      <div class="col-span-2 md:col-span-1 text-primary font-poppins md:text-xl md:pt-24">
          <p class="text-center md:text-left">Cuando quieras, donde quieras...</p>
          <p class="uppercase text-center md:text-left">tu mejor opción</p>
          <p class="font-bold mt-8 tracking-widest text-center md:text-left">Realizamos todo tipo de envíos</p>
          <div class="mt-4 grid grid-cols-2 md:gap-1 px-2">
              <div class="col-span-1">
                  <ul class="list-disc list-inside" role="list">
                      <li class="capitalize">paquetería</li>
                      <li class="capitalize">supermercado</li>
                      <li class="capitalize">mercancía</li>
                      <li class="capitalize">farmacia</li>
                  </ul>
              </div>
              <div class="col-span-1">
                  <ul class="list-disc list-inside" role="list">
                      <li class="capitalize">documentación</li>
                      <li class="capitalize">restaurantes</li>
                      <li class="capitalize">viajes foráneos</li>
                      <li>Y mucho más...</li>
                  </ul>
              </div>
          </div>
          <div class="mt-8 text-center font-bold uppercase tracking-widest">
            ¡FACTURAMOS! <br>
            <div x-data="{ showModal : false }">
              <!-- Button -->
              <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-primary text-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-300 font-bold hover:bg-secondary hover:text-primary">CONTÁCTANOS</button>

              <!-- Modal Background -->
              <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                  <!-- Modal -->
                  <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                      <!-- Title -->
                      <span class="font-bold block text-2xl mb-3">Envíanos un mensaje</span>
                      <!-- Some beer 🍺 -->
                      <form action="/" method="post" class="w-full">
                        @csrf

  <div class="flex flex-wrap mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Nombre
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="name" type="text" placeholder="Luis Hernández" required>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Correo
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" type="email" placeholder="ejemplo@dominio.com" required>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Mensaje
      </label>
      <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Lorem ipsum dolor sit amet..." rows="4" required name="message"></textarea>
      <p class="text-gray-600 text-xs italic">Nos comunicaremos contigo tan pronto como podamos.</p>
    </div>
  </div>


                      <!-- Buttons -->
                      <div class="text-right space-x-5 mt-5">
                          <button type="submit" class="px-4 py-2 text-sm bg-primary rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-300 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Enviar</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          </div>
      </div>
        
    </div>

    <div class="w-full bg-secondary h-3 mt-6 md:mt-0">&nbsp;</div>
    
    <div class="w-full bg-primary flex justify-between font-noto px-4 py-6">
        <div class="font-bold flex-1">
            <i class="fab fa-whatsapp"></i> &nbsp;961 425 0801<br>
            <i class="fas fa-envelope"></i> &nbsp;contacto@tuuxtik.mx
        </div>

        <div class="font-bold flex-initial text-right">
            <a href="https://facebook.com/tuuxtikexpress" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="https://instagram.com/tuuxtikexpress" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
    </div>
      
  </div>
</body>
</html>