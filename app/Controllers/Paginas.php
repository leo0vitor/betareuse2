<?php
class Paginas extends Controller {
    public function pesquisa() {
        $this->view('paginas/pesquisa');
    }
    public function notificacoes() {
        $this->view('paginas/notificacoes');
    }
    public function quem_somos() {
        $this->view('paginas/quem-somos');
    }
    public function carreiras() {
        $this->view('paginas/carreiras');
    }
    public function blog() {
        $this->view('paginas/blog');
    }
    public function imprensa() {
        $this->view('paginas/imprensa');
    }
    public function central_ajuda() {
        $this->view('paginas/central-ajuda');
    }
    public function dicas_seguranca() {
        $this->view('paginas/dicas-seguranca');
    }
    public function termos_uso() {
        $this->view('paginas/termos-uso');
    }
    public function politica_privacidade() {
        $this->view('paginas/politica-privacidade');
    }
    public function index() {
          $this->view('paginas/home');
    }

    public function sobre() {
           $this->view('paginas/sobre');
    }
    public function login() {
    
    $this->view('paginas/login');
   
    }
    public function anunciar() {

    $this->view('paginas/anunciar');

    }

    public function cadastro() {

    $this->view('paginas/cadastro');

}

    public function compra($id = null) {
        // Lista fixa de anúncios com imagens reais/ilustrativas
        $anuncios = [
            1 => [
                "titulo" => "iPhone 13",
                "preco" => 3500,
                "descricao" => "iPhone 13 em ótimo estado, com 128GB de memória, cor preta. Sem marcas de uso, bateria saudável, acompanha caixa e acessórios originais.",
                "imagem" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=400&q=80",
                "vendedor" => "João da Silva"
            ],
            2 => [
                "titulo" => "Carro",
                "preco" => 70000,
                "descricao" => "Carro 2020, completo, IPVA pago, único dono.",
                "imagem" => "https://images.unsplash.com/photo-1542362567-b07e54358753?auto=format&fit=crop&w=400&q=80",
                "vendedor" => "Maria Souza"
            ],
            3 => [
                "titulo" => "Apartamento 2 Quartos",
                "preco" => 1200,
                "descricao" => "Apartamento com 2 quartos, perto do centro, condomínio incluso.",
                "imagem" => "https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80",
                "vendedor" => "Carlos Lima"
            ],
            4 => [
                "titulo" => "Notebook Dell",
                "preco" => 2800,
                "descricao" => "Notebook Dell Inspiron, 16GB RAM, SSD 512GB, pouco uso.",
                "imagem" => "https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80",
                "vendedor" => "Ana Paula"
            ],
            5 => [
                "titulo" => "Bicicleta",
                "preco" => 700,
                "descricao" => "Bicicleta aro 29, freio a disco, excelente estado.",
                "imagem" => "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80",
                "vendedor" => "Pedro Santos"
            ],
            6 => [
                "titulo" => "Sofá 3 lugares",
                "preco" => 1100,
                "descricao" => "Sofá confortável, tecido suede, cor cinza, pouco uso.",
                "imagem" => "https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=400&q=80",
                "vendedor" => "Juliana Alves"
            ]
        ];
        if (!$id || !isset($anuncios[$id])) {
            die("Anúncio não encontrado!");
        }
        $dados = $anuncios[$id];
        $this->view('paginas/compra', $dados);
    }
    
















public function anuncio($id = null) {
    if (!$id) {
        die("Anúncio não encontrado!");
    }

    // Exemplo fixo de anúncios (troque por banco de dados depois)
    $anuncios = [
        1 => ["nome" => "iPhone 13", "preco" => "R$ 3.500", "descricao" => "iPhone 13 seminovo, ótimo estado, 128GB."],
        2 => ["nome" => "Carro Honda Civic", "preco" => "R$ 70.000", "descricao" => "Honda Civic 2020, completo, IPVA pago."],
        3 => ["nome" => "Apartamento 2 Quartos", "preco" => "R$ 1.200/mês", "descricao" => "Apartamento com 2 quartos, perto do centro."],
        4 => ["nome" => "Notebook Dell", "preco" => "R$ 2.800", "descricao" => "Notebook Dell Inspiron, 16GB RAM, SSD 512GB."]
    ];

    $dados = $anuncios[$id] ?? null;

    if (!$dados) {
        die("Anúncio não encontrado!");
    }

    $this->view('paginas/anuncio', $dados);
}






         public function categoria($nome = null) {
        // Evita erros se não passar categoria
        if (!$nome) {
            $nome = 'geral';
        }

        // Todas as categorias do menu
        $categorias = [
            "cupons", "hobbies", "infantil", "autos", "autopecas", "imoveis", "celulares", "roupas", "moveis"
        ];

        // Anúncios cadastrados
        $anuncios = [
            1 => (object)["id" => 1, "titulo" => "iPhone 13", "preco" => 3500],
            2 => (object)["id" => 2, "titulo" => "Carro", "preco" => 70000],
            3 => (object)["id" => 3, "titulo" => "Apartamento 2 Quartos", "preco" => 1200],
            4 => (object)["id" => 4, "titulo" => "Notebook Dell", "preco" => 2800],
            5 => (object)["id" => 5, "titulo" => "Bicicleta", "preco" => 700],
            6 => (object)["id" => 6, "titulo" => "Sofá 3 lugares", "preco" => 1100]
        ];

        // Produtos por categoria, incluindo os anúncios
        $produtos = [
            "celulares" => [ $anuncios[1], (object)["id" => 7, "titulo" => "Samsung S21", "preco" => 2900] ],
            "autos" => [ $anuncios[2], (object)["id" => 8, "titulo" => "Fiat Argo", "preco" => 55000] ],
            "imoveis" => [ $anuncios[3], (object)["id" => 9, "titulo" => "Casa 3 Quartos", "preco" => 250000] ],
            // Outras categorias podem ser preenchidas conforme necessário
        ];

        // Garante que todas as categorias existem, mesmo que vazias
        foreach ($categorias as $cat) {
            if (!isset($produtos[$cat])) {
                $produtos[$cat] = [];
            }
        }

        $dados = [
            "categoria" => ucfirst($nome),
            "produtos"  => $produtos[$nome] ?? []
        ];

        $this->view('paginas/categoria', $dados);
    }



}
























