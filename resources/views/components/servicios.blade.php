<section class="py-20 text-gray-700 bg-gray-100" id="servicios">
    <h2 class="mb-12 text-4xl text-center sm:text-5xl">{{__('Nuestros Servicios')}}</h2>
    <div class="grid grid-cols-1 gap-6 mx-3 md:grid-cols-2 lg:grid-cols-2 sm:mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="bg-white rounded-sm shadow-xl p-7">
        <img height="300" width="300" class="mx-auto rounded-full" src="{{asset('img/servicios/servicios1.jpg')}}" alt="Desarrollo Web">
        <h3 class="py-3 text-xl font-semibold text-center">{{__('Arriendo de Vehículos de carga')}}</h3>
        <p>{{__('Texto descriptivo del servicio')}}.</p>
      </div>
      <div class="p-7 bg-white rounded-[3px] shadow-xl">
        <img height="300" width="300" class="mx-auto rounded-full" src="{{asset('img/servicios/servicios2.jpg')}}" alt="Maquetacion Web">
        <h3 class="py-3 text-xl font-semibold text-center">{{__('Transporte de carga')}}</h3>
        <p>{{__('Texto descriptivo del servicio')}}.</p>
      </div>       
    </div>          
</section>