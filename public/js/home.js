// CountUp animation
document.addEventListener("DOMContentLoaded", function () {
    const pegawai = new CountUp('pegawai-count', 50);
    const tw = new CountUp('tw-count', 8);
    const trans = new CountUp('trans-count', 100, {suffix: '%'});
    pegawai.start();
    tw.start();
    trans.start();
});

// Scroll fade up animation
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, {
    threshold: 0.1
});

document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

// Banner Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const bannerToggle = document.getElementById('bannerToggle');
    const bannerIcon = document.getElementById('bannerIcon');
    const bannerClose = document.getElementById('bannerClose');
    const bannerCollapsed = document.getElementById('bannerCollapsed');
    const bannerExpanded = document.getElementById('bannerExpanded');
    const bannerContainer = document.querySelector('.info-banner-container');

    // Toggle banner on arrow click
    bannerToggle.addEventListener('click', function() {
        const isExpanded = bannerExpanded.classList.contains('show');
        
        if (!isExpanded) {
            // Expand - Show winner information below navbar
            bannerCollapsed.style.display = 'none';
            bannerExpanded.classList.add('show');
            bannerIcon.classList.add('rotated');
            bannerIcon.classList.remove('fa-chevron-down');
            bannerIcon.classList.add('fa-chevron-up');
            bannerToggle.title = 'Sembunyikan Pengumuman';
        } else {
            // Collapse - Hide winner info and show collapsed state
            bannerExpanded.classList.remove('show');
            bannerCollapsed.style.display = 'block';
            bannerIcon.classList.remove('rotated');
            bannerIcon.classList.remove('fa-chevron-up');
            bannerIcon.classList.add('fa-chevron-down');
            bannerToggle.title = 'Lihat Pengumuman Pemenang';
        }
    });

    // Close banner completely
    bannerClose.addEventListener('click', function() {
        bannerContainer.style.display = 'none';
    });

    // Auto-show winner info after 3 seconds (optional)
    setTimeout(() => {
        if (!bannerExpanded.classList.contains('show')) {
            bannerToggle.click();
        }
    }, 3000);
});