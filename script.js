const navBtns = document.querySelectorAll('.nav-btn');
const sections = document.querySelectorAll('.section');
const darkToggle = document.getElementById('darkModeToggle');

// Show only selected section
function showSection(id){
    sections.forEach(sec => sec.style.display = sec.id === id ? 'flex' : 'none');
}

// Default: Home
showSection('home');

// Navigation
navBtns.forEach(btn=>{
    btn.addEventListener('click', e=>{
        showSection(btn.getAttribute('data-target'));
    });
});

// Typing effect
const typingText = "Life of a BSIS student is full of learning, coding, and exciting projects!";
const typingElement = document.getElementById("typing-text");
let index=0;
function type(){
    if(index<typingText.length){
        typingElement.innerHTML += typingText.charAt(index);
        index++;
        setTimeout(type,80);
    }
}
window.onload = type;

// Dark Mode Toggle
darkToggle.addEventListener('click', ()=>{
    document.body.classList.toggle('dark-mode');
    darkToggle.textContent = document.body.classList.contains('dark-mode') ? "☀️" : "🌙";
});
