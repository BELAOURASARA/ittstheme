<?php get_header(); ?>

    <div class="formation-main">
      <?php the_content();?>
    </div>
     
    <ul id="breadcrumbs">
        <li><a href="index.html"><i class="fas fa-home"></i></a></li>
        <li><a href="formations.html">Formations</a></li>
        <li>Domaines de compétence</li>
    </ul>

    <div class="formation-content">

        <div class="dropdown-categories">
            <button class="dropbtn">Choisir le critère d'affichage <i class="fa fa-sort-down"></i></button>
            <div class="dropdown-content">
                <ul>
                    <li> <a href="#">Par Catégorie</a> </li>
                    <li> <a href="#">Par domaine de compétence</a></li>
                    <li> <a href="#">Editeur / Constructeur</a> </li>
                    <li> <a href="#">Cursus Métier</a> </li>
                    <li> <a href="#">Méthodes et Référentiels</a></li>
                </ul>
            </div>
          </div>
     

        <div class="formation-thematics">
            <div class="thematic-item">
                <h3 class="thematic-title">L'Agilité</h3>
                <button onclick="document.location='formations_lists.html'" type="submit" >Voir les formations <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <div class="thematic-item">
                <h3 class="thematic-title">L'Agilité</h3>
                <button  onclick="document.location='formations_lists.html'" type="submit" >Voir les formations <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <div class="thematic-item">
                <h3 class="thematic-title">Intelligence Artificielle</h3>
                <button  onclick="document.location='formations_lists.html'" type="submit" >Voir les formations <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <div class="thematic-item">
                <h3 class="thematic-title">L'Agilité</h3>
                <button  onclick="document.location='formations_lists.html'" type="submit" >Voir les formations <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <div class="thematic-item">
                <h3 class="thematic-title">Langages de Programmation</h3>
                <button  onclick="document.location='formations_lists.html'" type="submit" >Voir les formations <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <div class="thematic-item">
                <h3 class="thematic-title">IBM</h3>
                <button  onclick="document.location='formations_lists.html'" type="submit" >Voir les formations <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
        </div>

    </div>

    

<?php get_footer(); ?>
