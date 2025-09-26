<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">
        Produtos da categoria: <?= ucfirst($dados['categoria']); ?>
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php if (!empty($dados['produtos'])): ?>
            <?php foreach($dados['produtos'] as $produto): ?>
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="font-semibold text-lg"><?= $produto->titulo; ?></h2>
                    <p class="text-gray-600">R$ <?= number_format($produto->preco, 2, ',', '.'); ?></p>
                    <a href="<?= URL; ?>/paginas/produto/<?= $produto->id; ?>" 
                       class="text-blue-600 hover:underline">
                       Ver detalhes
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-gray-600">Nenhum produto encontrado nesta categoria.</p>
        <?php endif; ?>
    </div>
</div>
