
document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
});




const galleryContainer = document.getElementById('destinations');
galleryImages.forEach((imgSrc, index) => {
    const col = document.createElement('div');
    col.className = 'col-md-4';
    col.innerHTML = `
        <div class="card mb-4 shadow-sm">
            <img src="${imgSrc}" class="card-img-top" alt="Place ${index + 1}">
            <div class="card-body">
                <h5 class="card-title">Place ${index + 1}</h5>
                <p class="card-text">Description of Place ${index + 1}.</p>
                <a href="destinations/place${index + 1}.html" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    `;
    galleryContainer.appendChild(col);
});
