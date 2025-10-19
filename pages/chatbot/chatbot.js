
const form = document.getElementById('chat-form');
const chatBox = document.getElementById('chat-box');
const textarea = form.querySelector('textarea');

// Create a hidden input to hold the message for PHP
let hiddenMessageInput = document.createElement('input');
hiddenMessageInput.type = 'hidden';
hiddenMessageInput.name = 'message';
form.appendChild(hiddenMessageInput);

form.addEventListener('submit', (e) => {
    if (e.submitter && e.submitter.name === 'clear') return; // skip clear button
    e.preventDefault();

    const message = textarea.value.trim();
    if (!message) return;

    // Show user's message immediately
    const userMessage = document.createElement('div');
    userMessage.classList.add('message', 'user-msg');
    userMessage.innerHTML = `<strong>You:</strong> ${message}`;
    chatBox.appendChild(userMessage);
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

    // Save message in hidden field for PHP
    hiddenMessageInput.value = message;

    // Clear textarea for new typing
    textarea.value = '';
    textarea.style.height = 'auto';

    // Show typing indicator after user message
    const typing = document.createElement('p');
    typing.classList.add('typing');
    typing.textContent = "🤖 Dummy is typing...";
    chatBox.appendChild(typing);
    chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

    // Wait 3–5s, then submit the form
    const delay = Math.random() * (5000 - 3000) + 3000;
    setTimeout(() => {
        typing.remove();
        form.submit(); // send to PHP
    }, delay);
});

// Auto scroll on load
chatBox.scrollTo({ top: chatBox.scrollHeight, behavior: 'smooth' });

// Expandable textarea
textarea.addEventListener('input', () => {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
});
