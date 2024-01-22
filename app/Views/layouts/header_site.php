<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="<?= site_url("/") ?>" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="<?= base_url('assets/img/linux-header-icon.png') ?>" alt="">
      <span class="ml-3 text-xl">Higor Zica Dev.</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a href="<?= site_url("/") ?>" class="mr-5 hover:text-gray-900 cursor-pointer">Home</a>
      <a href="#projetos" class="mr-5 hover:text-gray-900 cursor-pointer">Projetos</a>
    </nav>
    <a href="<?= site_url("/login") ?>" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </a>
  </div>
</header>