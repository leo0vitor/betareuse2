<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Cadastro</h2>

        <form action="<?= URL; ?>/paginas/cadastrarUsuario" method="POST" class="space-y-4">

            <div>
                <label class="block text-gray-700">Nome</label>
                <input type="text" name="nome" required 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Senha</label>
                <input type="password" name="senha" required 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Cadastrar
            </button>

            <p class="text-sm text-gray-600 text-center mt-4">
                Já tem uma conta? 
                <a href="<?= URL; ?>/paginas/login" class="text-blue-600 hover:underline">Entrar</a>
            </p>
        </form>
    </div>
</div>
