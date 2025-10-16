
const form = document.getElementById('chat-form');
const typingIndicator = document.getElementById('typing-indicator');
const chatBox = document.getElementById('chat-box');

// Typing animation delay 3–5s
form.addEventListener('submit', (e) => {
    if (e.submitter && e.submitter.name === 'clear') return;
    e.preventDefault();
    typingIndicator.style.display = "block";
    const delay = Math.random() * (5000 - 3000) + 3000;
    setTimeout(() => form.submit(), delay);
});

// Auto scroll
chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

// Expandable textarea
const textarea = form.querySelector('textarea');
textarea.addEventListener('input', () => {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
});