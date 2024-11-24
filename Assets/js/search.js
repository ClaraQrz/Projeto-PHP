//Script para pesquisa de itens
document.getElementById('search-bar').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase(); // Texto digitado, convertido para minúsculas
    const products = document.querySelectorAll('.produto'); // Seleciona todos os produtos

    products.forEach(product => {
        const productName = product.getAttribute('data-name'); // Obtém o nome do produto no atributo data-name
        if (productName.includes(searchValue)) {
            product.style.display = 'block'; // Exibe o produto se a pesquisa for correspondente
        } else {
            product.style.display = 'none'; // Oculta o produto se não corresponder
        }
    });
});