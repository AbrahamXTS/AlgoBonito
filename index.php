<?php require("./layout/header.php"); require("./includes/database.php"); ?>

    <header class="header">
        <div class="flex container">
            <img class="branding" src="./images/logo.png" alt="Frontend Store"/>
            <h1 class="branding-text">Donde siempre encontrarás algo bonito</h1>
        </div>
    </header>

    <section class="container">
        <h2 class="subtitulo">Ofertas Flash</h2>
        <div class="grid container ofertas">
            <?php 
                $informacion = $db->query("SELECT * FROM ofertasFlash");
                while($row = $informacion->fetch_assoc()) {
                    echo '<a href="#">
                            <img class="producto" src="'.$row['imagen'].'" alt="'.$row['nombre'].'" />
                            <section class="informacion">
                                <h3>'.$row['nombre'].'</h3>
                                <p>$'.$row['precio'].'</p>
                            </section>
                          </a>';
                }
                $informacion-> close();
            ?>
        </div>
    </section>

    <section>
        <a href="#">
            <img class="banner" src="./images/banner.jpg" alt="banner"/>
        </a>
    </section>

    <main class="container">
        <h2 class="subtitulo">Productos Principales</h2>
            <div class="grid container ofertas">
                <?php 
                    $informacion = $db->query("SELECT * FROM productosPrincipales");
                    while($row = $informacion->fetch_assoc()) {
                        echo '<a href="#">
                                <img class="producto" src="'.$row['imagen'].'" alt="'.$row['nombre'].'" />
                                <section class="informacion">
                                    <h3>'.$row['nombre'].'</h3>
                                    <p>$'.$row['precio'].'</p>
                                </section>
                            </a>';
                    }
                    $informacion-> close();
                ?>
            </div>
    </main>

<?php require("./layout/footer.php"); ?>