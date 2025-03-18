@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

<main>
    <section class="font-poppins py-16">
      <div class="hidden md:flex justify-center items-center gap-5">
        {{-- <div>
          <img src="./images/img/error.png" alt="Error 404" />
        </div> --}}
        <div class="text-center">
          <h1 class="text-[#74A68D] font-semibold text-[187px]">404</h1>
          <p class="text-[#151515] text-[16px] font-normal">
            ¡Ups! Parece que te has perdido. La página que buscas no está
            disponible. Pero no te preocupes, ¡estamos aquí para ayudarte!
          </p>
        </div>
      </div>
      <div class="flex flex-col md:hidden justify-center items-center gap-5">
        {{-- <div class="flex justify-end">
          <img src="./images/img/error_1.png" alt="error" />
        </div> --}}
        <div class="text-center">
          <h1 class="text-[#74A68D] font-semibold text-[187px] leading-none">
            404
          </h1>
          <p class="text-[#151515] text-[16px] font-normal text-center">
            ¡Ups! Parece que te has perdido. La página que buscas no está
            disponible. Pero no te preocupes, ¡estamos aquí para ayudarte!
          </p>
        </div>
{{-- 
        <div>
          <img src="./images/img/error_2.png" alt="error" />
        </div> --}}
      </div>
    </section>
  </main>


@section('scripts_importados')

@stop

@stop