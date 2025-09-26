<?php
// app/Views/paginas/anuncio.php
$anuncio = $dados; // vindo do controller
?>
<div class="container mx-auto px-6 py-10">
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-2xl font-bold mb-4"><?= htmlspecialchars($anuncio['nome']) ?></h2>
        <p class="text-gray-600 text-lg mb-4"><?= htmlspecialchars($anuncio['preco']) ?></p>
        <p class="text-gray-700 mb-6"><?= nl2br(htmlspecialchars($anuncio['descricao'])) ?></p>

        <a href="<?= URLROOT ?>/paginas/home" class="inline-block mr-3 text-sm text-gray-600">Voltar</a>
        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Comprar Agora</button>
    </div>
</div>
