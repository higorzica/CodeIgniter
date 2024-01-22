<?= $this->extend('layouts/main_layout') ?>


<?= $this->section('content') ?>
<div class="flex flex-col items-center justify-center" style="height: 80vh;">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Login</h2>
    <form class="flex flex-col">
      <input type="email" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Digite seu E-mail">
      <input type="password" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Digite sua Senha">
      <div class="flex items-center justify-between flex-wrap">
        <label for="remember-me" class="text-sm text-gray-900 cursor-pointer">
        
        <p class="text-gray-900 mt-4">Criar uma nova conta ?<a href="#" class="text-sm text-blue-500 -200 hover:underline mt-4"> Criar agora!</a></p>
      </div>
      <button type="submit" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Login</button>
    </form>
  </div>
</div>



<?= $this->endSection() ?>