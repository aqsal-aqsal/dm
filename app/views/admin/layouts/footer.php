        </main>
        
        <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-500">
            &copy; <?= date('Y'); ?> Admin Panel Masjid Darul Mu'awanah.
        </footer>
    </div>
</div>

<script>
    // Simple mobile sidebar toggle (optional)
    const btn = document.querySelector('button.md\\:hidden');
    const sidebar = document.querySelector('aside');
    
    if(btn && sidebar) {
        btn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('absolute');
            sidebar.classList.toggle('z-50');
            sidebar.classList.toggle('h-full');
            sidebar.classList.toggle('shadow-xl');
        });
    }
</script>

<?php if (isset($_SESSION['welcome_animation'])): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const overlay = document.getElementById('lottie-welcome-overlay');
         if (overlay) {
             overlay.style.display = 'flex';
             
             const animation = lottie.loadAnimation({
                 container: document.getElementById('lottie-container'),
                 renderer: 'svg',
                 loop: true,
                 autoplay: true,
                 animationData: <?= file_get_contents('assets/json/welcome.json'); ?>
              });

             // Fallback: hide overlay if animation fails or takes too long
             const fallbackTimeout = setTimeout(() => {
                overlay.style.opacity = '0';
                overlay.style.transition = 'opacity 0.5s ease';
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 500);
            }, 5000);

            animation.addEventListener('complete', function() {
                clearTimeout(fallbackTimeout);
                setTimeout(() => {
                    overlay.style.opacity = '0';
                    overlay.style.transition = 'opacity 0.5s ease';
                    setTimeout(() => {
                        overlay.style.display = 'none';
                    }, 500);
                }, 1000);
            });
        }
    });
</script>
<?php unset($_SESSION['welcome_animation']); ?>
<?php endif; ?>

</body>
</html>
