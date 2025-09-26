
<!-- Página inicial do BetaReuse2: categorias, anúncios em destaque e todos os anúncios -->
<div class="container mx-auto px-6 py-10">
    <!-- Seção de categorias populares -->
    <h2 class="text-2xl font-bold mb-6">Categorias populares</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Categoria: Cupons -->
        <a href="<?= URL ?>/paginas/categoria/cupons" class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-lg transition hover:scale-105">
            <i class="fas fa-ticket-alt text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-lg font-semibold">Cupons</h3>
        </a>
        <!-- Categoria: Hobbies -->
        <a href="<?= URL ?>/paginas/categoria/hobbies" class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-lg transition hover:scale-105">
            <i class="fas fa-paint-brush text-pink-500 text-4xl mb-4"></i>
            <h3 class="text-lg font-semibold">Hobbies</h3>
        </a>
        <!-- Categoria: Infantil -->
        <a href="<?= URL ?>/paginas/categoria/infantil" class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-lg transition hover:scale-105">
            <i class="fas fa-child text-purple-500 text-4xl mb-4"></i>
            <h3 class="text-lg font-semibold">Infantil</h3>
        </a>
    </div>

    <!-- Seção de anúncios em destaque -->
    <h2 class="text-2xl font-bold mt-12 mb-6">Anúncios em destaque</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Anúncio: iPhone 13 -->
        <a href="<?= URL ?>/paginas/compra/1" class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition block">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=400&q=80" alt="iPhone 13" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold">iPhone 13</h3>
                <p class="text-gray-600">R$ 3.500</p>
            </div>
        </a>
        <!-- Anúncio: Carro -->
        <a href="<?= URL ?>/paginas/compra/2" class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition block">
            <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?auto=format&fit=crop&w=400&q=80" alt="Carro" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold">Carro</h3>
                <p class="text-gray-600">R$ 70.000</p>
            </div>
        </a>
        <!-- Anúncio: Apartamento 2 Quartos -->
        <a href="<?= URL ?>/paginas/compra/3" class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition block">
            <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80" alt="Apartamento 2 Quartos" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold">Apartamento 2 Quartos</h3>
                <p class="text-gray-600">R$ 1.200/mês</p>
            </div>
        </a>
    </div>

    <!-- Seção de todos os anúncios -->
    <h2 class="text-2xl font-bold mt-12 mb-6">Todos os anúncios</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Anúncio: Notebook Dell -->
        <a href="<?= URL ?>/paginas/compra/4" class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition block">
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80" alt="Notebook Dell" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold">Notebook Dell</h3>
                <p class="text-gray-600">R$ 2.800</p>
            </div>
        </a>
        <!-- Anúncio: Bicicleta -->
        <a href="<?= URL ?>/paginas/compra/5" class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition block">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Bicicleta" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold">Bicicleta</h3>
                <p class="text-gray-600">R$ 700</p>
            </div>
        </a>
        <!-- Anúncio: Sofá 3 lugares -->
        <a href="<?= URL ?>/paginas/compra/6" class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition block">
            <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=400&q=80" alt="Sofá 3 lugares" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold">Sofá 3 lugares</h3>
                <p class="text-gray-600">R$ 1.100</p>
            </div>
        </a>
    </div>
</div>
