<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssAdmin.css">
</head>
<body>
    <button class="toggle-sidebar" onclick="toggleSidebar()">
        <span class="toggle-icon" id="sidebar-icon">></span>
    </button>

    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Biodata Admin</a></li>
            <li><a href="#">Biodata Dosen</a></li>
            <li><a href="#">Biodata Mahasiswa</a></li>
            <li><a href="#">Unggah Prestasi Akademik</a></li>
            <li><a href="#">Validasi Prestasi Non-Akademik</a></li>
            <li><a href="#" onclick="confirmLogout()">Keluar</a></li>
        </ul>
    </div>

    <div class="main-content" id="main-content">
        <div class="header">
            <h1>Selamat Datang, [Admin]</h1>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const sidebarIcon = document.getElementById('sidebar-icon');

            // Toggle visibility of sidebar
            if (sidebar.style.display === 'none' || !sidebar.style.display) {
                sidebar.style.display = 'block'; // Show sidebar
                mainContent.style.marginLeft = '250px'; // Adjust main content margin
                sidebarIcon.textContent = '<'; // Change icon to '<'
            } else {
                sidebar.style.display = 'none'; // Hide sidebar
                mainContent.style.marginLeft = '0'; // Reset main content margin
                sidebarIcon.textContent = '>'; // Change icon to '>'
            }
        }

        function showTab(tabName) {
            const tabs = document.querySelectorAll('.tab');
            const cards = document.querySelectorAll('.card');

            // Reset all tabs and cards
            tabs.forEach(tab => tab.classList.remove('active'));
            cards.forEach(card => (card.style.display = 'none'));

            // Show the selected tab and its content
            document.querySelector(`#${tabName}`).style.display = 'block';
            document.querySelector(`.tab[onclick="showTab('${tabName}')"]`).classList.add('active');
        }

        function confirmLogout() {
            const confirmed = window.confirm("Apakah Anda yakin keluar?");
            if (confirmed) {
                window.location.href = "login.php?message=logout";
            }
        }
    </script>

</body>
</html>
