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

</body>
</html>
