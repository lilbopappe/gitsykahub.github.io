
<header class="header">
        <div class="container" style="background-color: #e5f6fe;">
                    <a href="index.php" style="width: 10%;">
                        <img src="/../logo/logo.jpg" class="logo" alt="Logo">
                    </a>
                    <p class="welcome-text"> Имя: <?= $_SESSION['user']['UserName'] ?></p>
                    <p class="welcome-text"> Имя: <?= $_SESSION['user']['UserAdmin'] ?></p>
                    <nav style="width: 50%;">

                    <a href="../views/demand.php" class="menu-link">МОИ ЗАЯВКИ</a>
                    <a href="../php/logout.php" class="menu-link">ВЫЙТИ</a>
                    </nav>
        
                    
        </div>
    </header>