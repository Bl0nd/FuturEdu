//MENU FIXO
window.onscroll = function () {
    var top = document.documentElement.scrollTop;
    if (top > 900) {
        document.getElementById("topo-fixo").classList.add('menu-fixo');
    }
    else {
        document.getElementById("topo-fixo").classList.remove('menu-fixo');
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