// Basic functionality for the OLX clone
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.querySelector('input[type="text"]');
    const searchButton = document.querySelector('.fa-search').parentElement;
    
    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            alert(`Buscando por: ${searchTerm}`);
            // Em um app real, redirecionaria para os resultados
        }
    });

    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchButton.click();
        }
    });

    // Category click handlers
    const categoryCards = document.querySelectorAll('.category-card');
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            const category = this.querySelector('p').textContent;
            alert(`Navegando para categoria: ${category}`);
        });
    });

    // Ad click handlers
    const adCards = document.querySelectorAll('.ad-card');
    adCards.forEach(card => {
        card.addEventListener('click', function(e) {
            if (!e.target.closest('button')) {
                const title = this.querySelector('h3').textContent;
                alert(`Abrindo anúncio: ${title}`);
            }
        });
    });

    // Message buttons
    const messageButtons = document.querySelectorAll('.message-button');
    messageButtons.forEach(button => {
        button.addEventListener('click', function() {
            const product = this.closest('.ad-card').querySelector('h3').textContent;
            alert(`Iniciando conversa sobre: ${product}`);
        });
    });
});
