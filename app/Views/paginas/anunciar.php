<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-orange-100 to-blue-100">
    <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-2xl border border-gray-200">
        <div class="flex items-center justify-center mb-6">
            <div class="bg-orange-500 text-white rounded-full p-4 mr-3">
                <i class="fas fa-bullhorn text-3xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-800">Anuncie grátis seu produto!</h2>
        </div>
        <p class="text-center text-gray-600 mb-8">Preencha os dados abaixo e publique seu anúncio para milhares de compradores.</p>
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Título -->
            <div>
                <label for="titulo" class="block text-gray-700 font-medium mb-1">Título do anúncio <span class="text-xs text-gray-400">(seja claro e objetivo)</span></label>
                <input 
                    type="text" 
                    id="titulo" 
                    name="titulo" 
                    placeholder="Ex: Celular Samsung Galaxy S21"
                    class="w-full px-4 py-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-orange-50"
                    required
                >
            </div>

            <!-- Categoria -->
            <div>
                <label for="categoria" class="block text-gray-700 font-medium mb-1">Categoria <span class="text-xs text-gray-400">(ajude compradores a encontrar seu produto)</span></label>
                <select 
                    id="categoria" 
                    name="categoria" 
                    class="w-full px-4 py-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-orange-50"
                    required
                >
                    <option value="">Selecione...</option>
                    <option value="autos">Autos</option>
                    <option value="celulares">Celulares</option>
                    <option value="moveis">Móveis</option>
                    <option value="eletro">Eletrodomésticos</option>
                    <option value="imoveis">Imóveis</option>
                    <option value="moda">Moda</option>
                </select>
            </div>

            <!-- Preço -->
            <div>
                <label for="preco" class="block text-gray-700 font-medium mb-1">Preço <span class="text-xs text-gray-400">(em reais)</span></label>
                <input 
                    type="number" 
                    id="preco" 
                    name="preco" 
                    placeholder="Ex: 1200"
                    class="w-full px-4 py-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-orange-50"
                    required
                >
            </div>

            <!-- Descrição -->
            <div>
                <label for="descricao" class="block text-gray-700 font-medium mb-1">Descrição <span class="text-xs text-gray-400">(detalhe o estado, uso, acessórios, etc.)</span></label>
                <textarea 
                    id="descricao" 
                    name="descricao" 
                    rows="4"
                    placeholder="Descreva o produto..."
                    class="w-full px-4 py-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-orange-50"
                    required
                ></textarea>
            </div>

            <!-- Imagens -->
            <div>
                <label for="imagens" class="block text-gray-700 font-medium mb-1">Fotos do produto <span class="text-xs text-gray-400">(capriche nas imagens!)</span></label>
                <input 
                    type="file" 
                    id="imagens" 
                    name="imagens[]" 
                    multiple
                    accept="image/*"
                    class="w-full text-gray-700 bg-orange-50 border border-blue-300 rounded-lg px-4 py-3"
                >
            </div>

            <!-- Botão de envio -->
            <button 
                type="submit"
                class="w-full bg-gradient-to-r from-orange-500 to-blue-500 text-white py-3 rounded-xl font-bold text-lg shadow hover:from-orange-600 hover:to-blue-600 transition-colors"
            >
                <i class="fas fa-paper-plane mr-2"></i> Publicar Anúncio
            </button>
        </form>
        <div class="mt-8 text-center text-sm text-gray-400">
            <i class="fas fa-lock mr-1"></i> Seus dados estão protegidos. Anúncios passam por moderação para garantir a segurança da comunidade.
        </div>
    </div>
</div>
