
document.getElementById('sendBtn').addEventListener('click', sendMsg);
document.getElementById('msg').addEventListener('keypress', function(e) {
  if (e.key === 'Enter') sendMsg();
});

function sendMsg() {
  const msg = document.getElementById('msg').value;
  if (!msg.trim()) return;

  const chatlog = document.getElementById('chatlog');
  chatlog.innerHTML += `<p><b>You:</b> ${msg}</p>`;
  document.getElementById('msg').value = '';

  fetch('chatbot.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'message=' + encodeURIComponent(msg)
  })
  .then(res => res.text())
  .then(reply => {
    chatlog.innerHTML += `<p><b>SunnyBot:</b> ${reply}</p>`;
    chatlog.scrollTop = chatlog.scrollHeight;
  })
  .catch(err => console.error('Error:', err));
}
