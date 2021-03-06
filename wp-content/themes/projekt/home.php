<?php get_header(); ?>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php wp_head(); ?>
    </head>
<body id="scroll">
    <script type="text/javascript">
        $(document).ready(function() {
            $.localScroll();
        });
    </script>

    <section class="main-content">
        <div class="container">
            <div class="slider">
                <?php echo do_shortcode('[metaslider id="64"]'); ?>
                <div class="score">
                    <p>Następny mecz</p>
                    <h3>FC Barcelona <br>vs <br>Totenham</h3>
                    <div class="data"><i class="material-icons"></i>Niedziela 29.07 5:00
                    </div>
                    <div class="score-ico">
                        <i class="fa">&#xf1e3;</i>Presezon
                        <i class="fa">&#xf08d;</i>Rose Bowl, Pasadena
                    </div>
                    <a>następny mecz za:</a>
                    <span id="odliczanie"></span>
                    <script type="text/javascript">
                        k=+new Date(2018,06,30,0,00,00);
                        (function(){sec=(k-new Date())/1000;
                            document.getElementById('odliczanie').innerHTML=~~(sec/(3600*24))+' dni '+~~(sec/3600)%24+' godzin '+~~(sec/60)%60+' minut '+~~sec%60+' sekund';
                            if(sec>0)setTimeout(arguments.callee,1000)})()
                    </script>
                    </div>
            </div>
        </div>
    </section><!-- e: main-content -->

    <section class="main-post">
        <div class="container">
            <h1>Aktualności</h1>
            <div class="row">
            <?php

            new WP_Query([
                'category_name' => 'news',
            ])


            ?>

                <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
                    <!-- post -->
                        <a class="posty-link" href="<?php the_permalink()?>"

                        <div class="posty">

                            <?php the_post_thumbnail('medium', ['class' => 'news-post']); ?>
                            <div class="posty-title"><?php the_title(); ?></div>


                <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>
            </div>
            </div>

        </div>
        </a>
        <div class="pagin">
            <?php post_pagination(); ?>
        </div>


    </section>
    <section class="table">
<div class="container">
    <h1>La Liga</h1>
    <div class="row">
    <div class="table1">
        <table>
            <h2>Tabela</h2>
            <tr>
                <td>1</td>	<td><b>FC Barcelona</b></td> <td>0</td>
            </tr>
            <tr>
                <td>2</td>	<td>Real Madryt</td> <td>0</td>
            </tr>
            <tr>
                <td>3</td>	<td>Atletico</td> <td>0</td>
            </tr>
            <tr>
                <td>4</td>	<td>Valencia</td> <td>0</td>
            </tr>
            <tr>
                <td>5</td>	<td>Villareal</td> <td>0</td>
            </tr>
            <tr>
                <td>6</td>	<td>Real Betis</td> <td>0</td>
            </tr>
        </table>
        <div><a class="btn-tabele" href="http://localhost/projekt/?page_id=72">Zobacz pełną tabelę</a></div>
    </div>
    <div class="strzelcy">
        <table>
            <h2>Gole</h2>
            <tr>
                <td>1</td><td><b>L. Messi</b></td><td>(Barcelona)</td><td>34</td>
            </tr>
            <tr>
                <td>2</td><td>C. Ronaldo</td><td>(Real)</td><td>26</td>
            </tr>
            <tr>
                <td>3</td><td>L. Suarez</td><td>(Barcelona)</td><td>25</td>
            </tr>
            <tr>
                <td>4</td><td>I. Aspas</td><td>(Celta)</td><td>22</td>
            </tr>
            <tr>
                <td>5</td><td>C. Stuani</td><td>(Girona)</td><td>21</td>
            </tr>
            <tr>
                <td>6</td><td>A Griezmann</td><td>(Atletico)</td><td>19</td>
            </tr>
        </table>
        <div><a class="btn-tabele" href="http://localhost/projekt/?page_id=82">Zobacz pełną listę</a></div>
    </div>
        <div class="Asystenci">
            <table>
                <h2>Asysty</h2>
                <tr>
                    <td>1</td><td><b>L. Messi</b></td><td>(Barcelona)</td><td>12</td>
                </tr>
                <tr>
                    <td>2</td><td>L. Suarez</td><td>(Barcelona)</td><td>12</td>
                </tr>
                <tr>
                    <td>3</td><td>P. Fornals </td><td>(Villareal)</td><td>12</td>
                </tr>
                <tr>
                    <td>4</td><td>K. Benzema</td><td>(Real)</td><td>10</td>
                </tr>
                <tr>
                    <td>5</td><td>G. Guedes</td><td>(Valencia)</td><td>9</td>
                </tr>
                <tr>
                    <td>6</td><td>A Griezmann</td><td>(Atletico)</td><td>9</td>
                </tr>
            </table>
            <div><a class="btn-tabele" href="http://localhost/projekt/?page_id=84">Zobacz pełną listę</a></div>
        </div>
        </div>
</div>
</section>
    <section class="week">
    <div class="container">
        <div class="row">
            <div class="cytat">
                <h2>Cytat Tygodnia</h2>
                <p>Rozumiem, że klub, który przygarnął mnie w wieku 12 lat, zasługuje na moją najlepszą wersję, tak jak było do teraz, i wiem, że w najbliższej przyszłości nie mógłbym dawać z siebie maksimum na każdej płaszczyźnie, zarówno mentalnej, jak i fizycznej. Jeżeli wyobrażałbym sobie zakończenie kariery tutaj, stałoby się to właśnie w taki sposób. W momencie, gdy czuję się potrzebny, ważny, gdy jestem piłkarzem wyjściowego składu z szansami na zdobywanie trofeów i pozytywnymi odczuciami, które towarzyszyły mi w ciągu tego roku.</p>
                </div>
            <div class="picture">
                <h2>Zdjęcie tygodnia</h2>
                <img class="photo-week" src="<?php echo get_stylesheet_directory_uri(); ?>/img/iniesta.jpg" alt="iniesta"/>
                    </div>
                </div>
    </div>
</section>
    </header>

    <a id="bottom" href="#top" class="material-icons">&#xe5d8;</a>

<?php wp_footer(); ?>


<?php get_footer(); ?>




