//Scrip para mudar e selecionar as categorias
document.querySelectorAll('.categories button').forEach(button => {
    button.addEventListener('click', function () {
        const category = this.getAttribute('data-category'); // Categoria selecionada
        const products = document.querySelectorAll('.produto');

        products.forEach(product => {
            const productCategory = product.getAttribute('data-category'); // Categoria do produto

            // Mostra todos os produtos se a categoria for "all", ou somente os correspondentes
            if (category === 'all' || productCategory === category) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });
});
