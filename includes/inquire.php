<!-- Floating Button -->
    <div class="floating-btn" id="inquireBtn">
        <i class="bi bi-chat-dots"></i> Inquire
    </div>

    <!-- Floating Options -->
    <div class="floating-options" id="inquireOptions">
        <a href="https://wa.me/1234567890" target="_blank" class="floating-option">
            <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
        <a href="#" class="floating-option" id="getQuote">
            <i class="bi bi-pencil-square"></i> Get a Quote
        </a>
    </div>

    <!-- Custom JS -->
    <script>
        const inquireBtn = document.getElementById('inquireBtn');
        const inquireOptions = document.getElementById('inquireOptions');

        inquireBtn.addEventListener('click', () => {
            inquireOptions.style.display = inquireOptions.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>