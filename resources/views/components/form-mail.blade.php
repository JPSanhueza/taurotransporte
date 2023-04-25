<div class="py-20 text-gray-700 bg-white" id="contacto">
    <h2 class="text-5xl text-center mb-7 ">{{__('Contacto')}}</h2>
    <div class="grid items-center justify-center grid-cols-1 mx-auto sm:grid-cols-2 max-w-7xl sm:px-6 lg:px-8">

      <div class="mx-auto mt-14 w-96">
        <picture>
            <source media="(min-width: 1024px)" srcset="{{asset('img/contacto/contacto2.jpg')}}" width="351px" height="352px" class="mx-auto">
            <img width="200px" height="200px" src="{{asset('img/contacto/contacto2.jpg')}}" alt="logo" class="mx-auto mb-7">
      </picture>
      </div>


      <div class="">
        @livewire('contact-form')
      </div>
    </div>

</div>
