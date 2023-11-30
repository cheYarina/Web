<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gallery</title>
    <link rel="stylesheet" href="../css/mStyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.1.0/simple-lightbox.min.css">
    
   
</head>

<body>
    <nav class="navbar">
    <div class="row right-content" id="header">
    <?php
                if (isset($_SESSION["username"])) {
                    echo '<span style="margin-left: 0%; padding-bottom: 0%; margin-bottom: 0%; float:left;color:#f4f0f0;">Welcome, ' . $_SESSION["fullname"] . '! ';
                    echo '<br><a href="../BackEnd/logout.php" style="text-decoration: none; float:left; color: #f4f0f0 ";>Logout <i class="fas fa-sign-out-alt"></i></a></span>';
                }
                ?>
        <div id="dropdown-menu">
            <span>MENU<i class="ico burger-ico"></i></span>
            <div class="dropdown-content menu-rtl">
                <ul>
                    <a href="contact.php">
                        <li>Home<i class="ico ico-l user-ico"></i></li>
                    </a>
                    <a href="mydigitalcv.php">
                        <li>My Digital CV<i class="ico ico-l wallet-ico"></i></li>
                    </a>
                    <a href="page3.php">
                        <li>Gallery<i class="ico ico-l gallery-ico"></i></li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div style="float:left; display: initial;">
    <?php
    if (isset($_SESSION["username"])) {
        echo '<span style="margin-left: 0%; padding-bottom: 0%; margin-bottom: 0%; color:#f4f0f0;">Welcome, ' . $_SESSION["fullname"] . '! ';
        echo '<br><a href="../BackEnd/logout.php" style="text-decoration: none; color: #f4f0f0">Logout <i class="fas fa-sign-out-alt"></i></a></span>';
    }
    ?>
    </div>
</nav>
   
    <div class="Gallery" id="galleryContainer"></div>

    <script>
       fetch('gallery.json')
            .then(response => response.json())
            .then(data => {
                const galleryContainer = document.getElementById('galleryContainer');

                data.images.forEach(image => {
                    const framepic = document.createElement('div');
                    framepic.classList.add('framepic');

                    const a = document.createElement('a');
                    a.href = image.url;

                    const img = document.createElement('img');
                    img.src = image.url;
                    img.alt = image.alt;
                    img.classList.add('mposter');

                    a.appendChild(img);
                    framepic.appendChild(a);
                    galleryContainer.appendChild(framepic);
                });

                const lightbox = new SimpleLightbox('.Gallery a', {
                   
                });
            })
            .catch(error => console.error('Error fetching gallery:', error));
    </script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.1.0/simple-lightbox.min.js"></script>
</body>
</html>