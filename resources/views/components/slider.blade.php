<div class="w-full m-auto overflow-hidden ">
    <div class=" h-[50vh] w-[700%] flex ml-[-100%] lg:h-[90vh]" id="slider">            
        <div class="relative w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider1.jpg')}}"/>                  
                <img src="{{asset('img/slider/slider1.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>                  
            </picture>           
        </div>
        <div class="w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider2.jpg')}}" class="object-cover"/>
                <img src="{{asset('img/slider/slider2.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>                  
            </picture>            
        </div>
        <div class="w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider3.jpg')}}"/>
                <img src="{{asset('img/slider/slider3.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>
            </picture>
        </div>
        <div class="w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider4.jpg')}}"/>
                <img src="{{asset('img/slider/slider3.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>
            </picture>
        </div>
        <div class="w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider5.jpg')}}"/>
                <img src="{{asset('img/slider/slider3.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>
            </picture>
        </div>
        <div class="w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider6.jpg')}}"/>
                <img src="{{asset('img/slider/slider3.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>
            </picture>
        </div>
         <div class="w-full slider__section">
            <picture>
                <source media="(min-width: 1024px)" srcset="{{asset('img/slider/slider7.jpg')}}"/>
                <img src="{{asset('img/slider/slider3.jpg')}}" alt="Slider1" class="block object-cover w-full h-full"/>
            </picture>
        </div>
                             
        <div class="cursor-pointer flex items-center justify-center text-4xl font-bold z-40 absolute  leading-[23px] left-3 sm:left-14 top-[30%] sm:top-1/2 w-11 h-11 bg-gray-100 shadow-md rounded-full text-gray-900 text-opacity-60  hover:bg-gray-200" id="btn-left">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                </path>
            </svg>
        </div>
        <div class="flex items-center justify-center w-11 h-11 shadow-md right-3 sm:right-14 hover:bg-gray-200 cursor-pointer z-40  absolute top-[30%] sm:top-1/2 text-4xl  text-gray-900 text-opacity-70 leading-[23px]  bg-gray-100 rounded-full" id="btn-right">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </div>
    </div>
</div> 