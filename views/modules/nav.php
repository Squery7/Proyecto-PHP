<nav>
    <ul>

   
       
        <?php if (isset($_GET["action"])):?>

            <!--Inicio-->
            <?php if ($_GET["action"]=="inicio"):?>
                <li>
                <a class="a-inicio" href="index.php?action=inicio">Inicio</a>
                </li>
            <?php else: ?>
                <li>
                <a class="a-inicio" href="index.php?action=inicio">Inicio</a>
                </li>

            <?php endif ?>
            <!--Nosotros-->
            <?php if ($_GET["action"]=="nosotros"):?>
                <li>
                    <a style="color:pink;" class="a-nosotros" href="index.php?action=nosotros">Nosotros</a>
                </li>
            <?php else: ?>
                <li>
                    <a class="a-nosotros" style="color:none;" href="index.php?action=nosotros">Nosotros</a>
                </li>
            <?php endif ?>
            <!--ctalogo-->
            <?php if ($_GET["action"]=="catalogo"):?>
                <li>
                    <a class="a-catalogo" style="color:pink;"  href="index.php?action=catalogo">Catálogo</a>
                </li>

            <?php else: ?>
                <li>
                    <a class="a-catalogo" style="color:none;"  href="index.php?action=catalogo">Catálogo</a>
                </li>
            <?php endif ?>
            
            <!--perfil-->
            <?php if ($_GET["action"]=="perfil"):?>
                <li>
                    <a class="a-perfil" style="color:pink;" href="index.php?action=perfil">Perfil</a>
                </li>
            <?php else: ?>
                <li>
                    <a class="a-perfil" style="color:none;" href="index.php?action=perfil">Perfil</a>
                </li>

            <?php endif ?>
            <!--Contactenos-->

            <?php if ($_GET["action"]=="contactenos"):?>
                <li>
                    <a class="a-contactenos" style="color:pink;"  href="index.php?action=contactenos">Contáctenos</a>
                </li>
            <?php else: ?>
                <li>
                    <a class="a-contactenos" style="color:none;" href="index.php?action=contactenos">Contáctenos</a>
                </li>
            <?php endif ?>
        <?php else: ?>
            <li>
                <a class="a-inicio" href="index.php?action=inicio">Inicio</a>
            </li>
            <li>
                <a style="color:none;" class="a-nosotros" href="index.php?action=nosotros">Nosotros</a>
            </li>
            <li>
                <a class="a-catalogo" style="color:none;"  href="index.php?action=catalogo">Catálogo</a>
            </li>

            <li>
                <a class="a-perfil" style="color:none;" href="index.php?action=perfil">Perfil</a>
            </li>
            <li>
                <a class="a-contactenos" style="color:none;"  href="index.php?action=contactenos">Contáctenos</a>
            </li>
        <?php endif ?>

        <!--botones al incio-->

        
    </ul>
</nav>
<br/>