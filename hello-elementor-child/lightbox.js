document.addEventListener('DOMContentLoaded', function() {
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'dbx-lightbox-overlay';
    overlay.innerHTML = `
        <span class="dbx-lightbox-close">&times;</span>
        <img src="" alt="Enlarged image" />
    `;
    document.body.appendChild(overlay);

    const overlayImg = overlay.querySelector('img');
    const closeBtn = overlay.querySelector('.dbx-lightbox-close');

    // Open lightbox on image click
    document.querySelectorAll('.dbx-single-content img').forEach(img => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', function(e) {
            overlayImg.src = img.src;
            overlay.classList.add('active');
        });
    });

    // Close on overlay or close button click
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay || e.target === closeBtn) {
            overlay.classList.remove('active');
            overlayImg.src = '';
        }
    });

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            overlay.classList.remove('active');
            overlayImg.src = '';
        }
    });
}); 