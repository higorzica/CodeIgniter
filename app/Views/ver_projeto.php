<?= $this->extend('layouts/main_layout') ?>


<?= $this->section('content') ?>

<?php if(empty($verprojetos)): ?> 
<section class="text-gray-600 body-font">
  <div class="bg-white flex justify-center align-center text-center">
    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-zinc-50">Não existem mais fotos deste projeto!</h1>
  </div>
</section>

<?php else: ?>
<section class="text-gray-600 body-font">

<div class="bg-white">
  <div class="pt-6">
    <nav aria-label="Breadcrumb">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <li>
          <div class="flex items-center">
            <a href="<?= site_url("/") ?>" class="mr-2 text-sm font-medium text-zinc-50">Home</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="#" class="mr-2 text-sm font-medium text-zinc-50">Projeto: <?= $verprojetos[0]['titulo'] ?></a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
      </ol>
    </nav>

    <!-- Image gallery -->
    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
        <?php foreach ($verprojetos as $projeto): ?>
            <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                <img src="<?= base_url("projetos/" . $projeto['nomearquivo']) ?>" alt="images secondary" class="h-full w-full object-cover object-center">
            </div>
      <?php endforeach; ?>

    </div>

    <!-- Product info -->
    <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-bold tracking-tight text-zinc-50 sm:text-3xl"> <?= $verprojetos[0]['titulo'] ?> </h1>
      </div>

      <!-- Options -->


      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
        <!-- Description and details -->
        <div>
          <div class="space-y-6">
            <p class="text-base text-zinc-300"><?= $verprojetos[0]['descricao'] ?></p>
          </div>
        </div>

        <div class="mt-10">
          <h3 class="text-sm font-medium text-zinc-300">Tecnologias usadas: </h3>

          <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-zinc-300">HTML</span></li>
              <li class="text-gray-400"><span class="text-zinc-300">CSS</span></li>
              <li class="text-gray-400"><span class="text-zinc-300">PHP</li>
              <li class="text-gray-400"><span class="text-zinc-300">JAVASCRIPT</span></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>

<?= $this->endSection() ?>