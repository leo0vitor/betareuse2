<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Entrar</h2>
        
        <form action="#" method="POST" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Digite seu e-mail"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Senha -->
            <div>
                <label for="senha" class="block text-gray-700 font-medium mb-1">Senha</label>
                <input 
                    type="password" 
                    id="senha" 
                    name="senha" 
                    placeholder="Digite sua senha"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Botão Entrar -->
            <button 
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors"
            >
                Entrar
            </button>
        </form>
<p class="text-sm text-gray-600 text-center mt-4">
    Não tem conta?
    <a href="<?= URL; ?>/paginas/cadastro" class="text-blue-600 hover:underline">Cadastre-se</a>
</p>

        
    </div>
</div>
