<!-- cabecera -->
    <?php include('header.php')
    ?>

    <!-- menú -->
    <nav>
        <ul>
            <li><a href="#">Din Djarin</a></li>
            <li><a href="#">Grogu</a></li>
            <li><a href="#">Cara Dune</a></li>
            <li><a href="#">Greef Karga</a></li>
            <li><a href="#">IG-11</a></li>
        </ul>
    </nav>
    <!-- bloque debajo nav -->
    <div id="container">
        <article class="planetas">
            <div class="image-wrap">
                <img src="img/tatooine.jpg">
            </div>
            <div class="planetas-info">
                <a href="#">Tatooine</a>
                <button class="acceso">Acceder</button>
            </div>
        </article>
        <article class="planetas">
            <div class="image-wrap">
                <img src="img/nevarro.png">
            </div>
            <div class="planetas-info">
                <a href="#">Nevarro</a>
                <button class="acceso">Acceder</button>
            </div>
        </article>
        </article>
        <article class="planetas">
            <div class="planetas-wrap">
                <img src="img/arvala-7.png">
            </div>
            <div class="planetas-info">
                <a href="#">Arvala-7</a>
                <button class="acceso">Acceder</button>
            </div>
        </article>
    </div>
    <!-- contenido central -->
    <main id="principal">
        <section id="contenido">
            <aside id="yoda1">
                <img src="img/aside_baby.jpg">
            </aside>
            <!-- artículos -->
            <article id="articulos">
                <div id="serie">
                    <h3 class="titulo">La serie</h3>
                    <img class="img1" src="img/img1.jpg">
                    <p>Ambientada tras la caída del Imperio y antes de la aparición de la Primera Orden, la serie sigue los pasos de Mando, un cazarrecompensas perteneciente a la legendaria tribu de los mandalorianos, un pistolero solitario que trabaja en los confines de la galaxia, donde no alcanza la autoridad de la Nueva República. <input type="button" value="Ver más" class="vermas">
                    </p>
                </div>
                   
                <div id="episodio1">
                    <h3 class="titulo">Episodio 1</h3>
                    <img class="img2" src="img/img2.jpeg">
                    <p>Cinco años después de la caída del Imperio,un cazarrecompensas mandaloriano recoge una recompensa después de un intercambio de peleas en un bar. Se reúne con el líder de su gremio, Greef Carga, que en su mayoría tiene recompensas de bajos salarios que no cubrirán los gastos de viaje. <input type="button" value="Ver más" class="vermas">
                </div>
                <div id="episodio2">
                    <h3 class="titulo">Episodio 2</h3>
                    <img class="img2" src="img/img3.jpg">
                    <p>El Mandaloriano regresa a su nave con el bebe a cuestas después de asesinar a los criminales que interrumpían la paz en un lugar de Arvala-7.<input type="button" value="Ver más" class="vermas"></p>
                </div>
                   
            </article>
            <!-- aside derecha -->
            <aside id="yoda2">
                <img src="img/aside_baby2.jpg">
            </aside>
        </section>
    </main>
   
    <!-- footer -->
    <?php include('footer.php')
    ?>
    
</body>

</html>