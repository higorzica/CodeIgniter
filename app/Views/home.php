<?= $this->extend('layouts/main_layout') ?>


<?= $this->section('content') ?>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-8 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="h-16 w-16 rounded-full object-contain object-center" alt="hero" src="<?= base_url('assets/img/logo_principal.png') ?>" style="width: 700px;height: 700px;">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-zinc-50">Olá - Seja Bem-vindo 🤝 ! Eu Sou Higor Zica </h1>
      <p class="mb-8 text-zinc-300 leading-relaxed">Meu nome é Higor Zica, sou técnico em informática e bacharel em Admnistração. Sou fascinado por programação e principalmente pelo desenvolvimento web/mobile, estando sempre a procura de conhecimento e novos desafios.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Entrar em contato</button>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font" id="projetos">
  <div class="container px-5 py-12 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-zinc-50">PROJETOS</h1>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 flex-wrap gap-3 -m-4">
    <?php foreach ($projetos as $projeto): ?>
        <div class="p-4 rounded-md border-solid border-2 border-white-900" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 30%, rgba(63,40,181,1) 62%, rgba(0,66,111,1) 100%);">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-80 h-80 object-contain object-center sm:mb-0 mb-4" src="<?= base_url("projetos/" . $projeto->foto) ?>">
                <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-zinc-50"><?= $projeto->titulo ?></h2>
                        <h3 class="text-gray-500 mb-3">UI Developer</h3>
                        <p class="mb-4 text-zinc-300"><?= $projeto->descricao ?></p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                        </span>
                        <a href="<?= site_url("ver_projeto/" . $projeto->id) ?>" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 mx-2 md:mt-0"> Detalhes 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="background-color: white;margin-left: 6px;"><path d="M10 20A10 10 0 1 0 0 10a10 10 0 0 0 10 10zM8.711 4.3l5.7 5.766L8.7 15.711l-1.4-1.422 4.289-4.242-4.3-4.347z"/></svg>
                        </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    </div>
  </div>
</section>


<?= $this->endSection() ?>