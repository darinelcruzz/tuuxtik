<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TuuxtiK Express</title>
  <link rel="icon" href="{{ asset('img/tuuxtik_logo.png') }}">
  <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- ... -->
</head>
<body class="bg-secondary">
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
          <div class="mt-8 text-center font-bold uppercase tracking-widest">¡FACTURAMOS!</div>
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