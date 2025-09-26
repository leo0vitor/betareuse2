
<div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden mt-10 border border-gray-200">
    <div class="md:flex">
        <div class="md:w-1/2 p-8 flex flex-col justify-center items-center bg-gray-50">
            <img src="<?= $dados['imagem'] ?>" alt="<?= htmlspecialchars($dados['titulo']) ?>" class="rounded-lg shadow-md w-full h-auto object-cover mb-4">
            <span class="inline-block bg-green-500 text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">Produto em destaque</span>
            <span class="block text-3xl font-bold text-gray-800 mb-2">R$ <?= number_format($dados['preco'], 2, ',', '.') ?></span>
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg text-lg transition mb-2" onclick="alert('Compra realizada com sucesso!')">
                Comprar agora
            </button>
            <span class="block text-xs text-gray-500">Pagamento seguro via BetaReuse</span>
        </div>
        <div class="md:w-1/2 p-8 flex flex-col justify-center">
            <h1 class="text-2xl font-bold text-gray-900 mb-4"><?= htmlspecialchars($dados['titulo']) ?></h1>
            <p class="text-gray-700 mb-4"><?= htmlspecialchars($dados['descricao']) ?></p>
            <div class="border-t pt-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Informações do vendedor</h2>
                <div class="flex items-center mb-2">
                    <div class="w-10 h-10 rounded-full bg-blue-200 flex items-center justify-center text-blue-700 font-bold mr-3">
                        <?= strtoupper(substr($dados['vendedor'], 0, 2)) ?>
                    </div>
                    <div>
                        <span class="block font-semibold text-gray-900"><?= htmlspecialchars($dados['vendedor']) ?></span>
                        <span class="block text-xs text-gray-500">Vendedor verificado</span>
                    </div>
                </div>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 font-semibold text-sm transition">Ver outros anúncios</a>
            </div>
        </div>
    </div>
</div>