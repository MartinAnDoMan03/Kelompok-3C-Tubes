document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 50,
                    behavior: 'smooth'
                });
            }
        });
    });
});


let currentIndex = 3;

function showCard(index) {
    const cards = document.getElementById('cards');
    const cardWidth = document.querySelector('.card').offsetWidth;
    const newPosition = -index * cardWidth;
    cards.style.transform = `translateX(${newPosition}px)`;
}

function nextCard() {
    const cards = document.getElementById('cards');
    const cardCount = document.querySelectorAll('.card').length;
    currentIndex = (currentIndex + 1) % cardCount;
    showCard(currentIndex);
}

function prevCard() {
    const cards = document.getElementById('cards');
    const cardCount = document.querySelectorAll('.card').length;
    currentIndex = (currentIndex - 1 + cardCount) % cardCount;
    showCard(currentIndex);
}

function showInitialCard() {
    const cards = document.getElementById('cards');
    const cardWidth = document.querySelector('.card').offsetWidth;
    const initialPosition = -currentIndex * cardWidth;
    cards.style.transform = `translateX(${initialPosition}px)`;
}

showInitialCard();