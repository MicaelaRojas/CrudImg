<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <!-- About-->
   <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Página de registro de Estudiantes</h2>
                        <p class="text-white-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat eaque adipisci laudantium ipsum voluptates. 
                            Sed deserunt beatae laboriosam atque sint explicabo architecto, quia exercitationem rem consequuntur ipsam, laudantium quod voluptate?
                        </p>
                    </div>
                </div>
                <center><img class="img-fluid" src="template/student.png"  /></center>
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="template/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Estudiantes</h4>
                            <p class="text-black-50 mb-0"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat eaque adipisci </p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="template/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misión</h4>
                                    <p class="mb-0 text-white-50">Sed deserunt beatae laboriosam atque sint explicabo architecto, quia exercitationem rem consequuntur ipsam, laudantium quod voluptate.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="template/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Visión </h4>
                                    <p class="mb-0 text-white-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat eaque adipisci laudantium ipsum voluptates. 
                            Sed deserunt beatae laboriosam atque sint explicabo architecto, quia exercitationem rem consequuntur ipsam, laudantium quod voluptate?</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</x-app-layout>
