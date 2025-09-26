<?php

use Soap\Url;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetaReuse2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= URL ?>/public/css/estilo.css">
</head>
<body class="bg-gray-50 font-sans">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                    <a href="<?= URL; ?>/paginas/home"  class="flex items-center space-x-4 h-16">
                        <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center text-white font-extrabold text-xl tracking-wide shadow-lg">
                            Reuse
                        </div>
                        <div class="hidden md:flex flex-col justify-center h-full">
                            <p class="text-lg font-bold text-gray-800">Reuse</p>
                            <p class="text-xs text-gray-600">compra e venda</p>
                        </div>
                    </a>
                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl mx-4">
                    <div class="relative">
                        <form action="<?= URL ?>/paginas/pesquisa" method="get" class="flex">
                            <input 
                                type="text" 
                                name="q"
                                placeholder="O que você está procurando?" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                            <button type="submit" class="absolute right-0 top-0 h-full px-6 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition-colors">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- User Actions -->
                <div class="flex items-center space-x-4">
                   
                    <a href="<?= URL; ?>/paginas/anunciar" 
                      class="hidden md:flex items-center space-x-2 bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition-colors">
                     <i class="fas fa-plus-circle text-lg"></i>
                    <span class="font-medium">Anunciar grátis</span>
                    </a>

                    <a href="<?= URL; ?>/paginas/notificacoes" class="hidden md:flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="font-medium">Notificações</span>
                    </a>

                    <a href="<?= URL; ?>/paginas/login" 
                    class="hidden md:flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                    <i class="fas fa-user-circle text-lg"></i>
                    <span class="font-medium">Entrar</span>
                    </a>

                    <button class="md:hidden text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
<!-- Barra de Categorias -->
<nav class="bg-white shadow-sm border-t border-gray-200">
    <div class="container mx-auto px-4 py-3 flex space-x-6 overflow-x-auto scrollbar-hide">
        <a href="<?= URL; ?>/paginas/categoria/cupons" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-ticket-alt"></i><span>Cupons</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/hobbies" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-paint-brush"></i><span>Hobbies</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/infantil" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-baby"></i><span>Infantil</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/autos" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-car"></i><span>Autos</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/autopecas" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-cogs"></i><span>Autopeças</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/celulares" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-mobile-alt"></i><span>Celulares</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/imoveis" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-home"></i><span>Imóveis</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/decoracao" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-couch"></i><span>Decoração</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/eletro" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-tv"></i><span>Eletro</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/moveis" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-bed"></i><span>Móveis</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/esportes" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-futbol"></i><span>Esportes</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/agro" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-tractor"></i><span>Agro</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/moda" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-tshirt"></i><span>Moda</span>
        </a>
        <a href="<?= URL; ?>/paginas/categoria/todas" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 whitespace-nowrap">
            <i class="fas fa-th"></i><span>Categorias</span>
        </a>
    </div>
</nav>

        