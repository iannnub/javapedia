document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS
    AOS.init({
        duration: 800,
        once: true
    });

    const form = document.getElementById('contactForm');
    const modal = document.getElementById('successModal');
    const closeModalBtn = document.getElementById('closeModal');
    
    // Form submission handler
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const submitBtn = form.querySelector('.form__button');
        const btnText = submitBtn.querySelector('span');
        const btnIcon = submitBtn.querySelector('.button__icon');
        
        // Show loading state
        btnText.textContent = 'Mengirim...';
        btnIcon.classList.add('ri-loader-4-line', 'button__icon--spinning');
        btnIcon.classList.remove('ri-send-plane-line');
        submitBtn.disabled = true;
        
        try {
            const formData = new FormData(form);
            const response = await fetch('process_contact.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json().catch(() => ({}));

            if (!response.ok || result.status === 'error') {
                throw new Error(result.message || 'Gagal mengirim pesan.');
            }
            
            // Show success modal
            modal.classList.add('show');
            
            // Reset form
            form.reset();
            
        } catch (error) {
            console.error('Error:', error);
            alert(error.message || 'Maaf, terjadi kesalahan. Silakan coba lagi.');
            
        } finally {
            // Reset button state
            btnText.textContent = 'Kirim Pesan';
            btnIcon.classList.remove('ri-loader-4-line', 'button__icon--spinning');
            btnIcon.classList.add('ri-send-plane-line');
            submitBtn.disabled = false;
        }
    });
    
    // Close modal handler
    closeModalBtn.addEventListener('click', () => {
        modal.classList.remove('show');
    });
    
    // Close modal when clicking outside
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('show');
        }
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            modal.classList.remove('show');
        }
    });
});