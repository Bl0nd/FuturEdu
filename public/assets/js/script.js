//MENU FIXO
window.onscroll = function () {
    adicionarClassefixed();
};

function adicionarClassefixed() {
    var container = document.querySelector(".container");
    
    // Verifica a posição de rolagem da página
    if (window.scrollY >= 200) {
       container.classList.add('fixed');
    } else {
        container.classList.remove('fixed');
    }
}

// Carrosel
document.addEventListener("DOMContentLoaded", function () {
    const carrossel = document.querySelector(".carrosel");
    const imagens = document.querySelectorAll(".carrosel-img");
    const totalImagens = imagens.length;
    const imagensPorSlide = 5;
    let index = 0;

    function avancarCarrossel() {
        index += imagensPorSlide;
        if (index >= totalImagens) {
            index = 0; // Reinicia ao fim
        }
        const deslocamento = -index * (imagens[0].offsetWidth + 10); // Corrigido para considerar gap
        carrossel.style.transform = `translateX(${deslocamento}px)`;
    }

    setInterval(avancarCarrossel, 3000); // Troca a cada 3 segundos
});

//Menu Mobile
document.querySelector(".abrir-menu").onclick = function () {
    document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".fechar-menu").onclick = function () {
    document.documentElement.classList.remove("menu-ativo");
}