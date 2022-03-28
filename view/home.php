<?php
ob_start();
$title = "Accueil";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-xl-6">
            <div class="tutodiv">
                <h1>Jeu 1: Mots</h1>
                <p>Pour jouer, il faut entrer son pseudo, appuyer sur "Enter". Puis sur la nouvelle pages<br>
                    qui s'ouvre il faut sélectionner un thème dans la liste déroulante.<br>
                    Les règles du jeu sont simples un mot ou une expression en français vous sera proposé<br>
                    et vous aurez à choisir entre 4 mots/expressions anglais(e)s, la bonne réponse.<br>
                    Il y a 5 mots à deviner en tout par partie.
                </p>
            </div>
            <div class="tutodiv">
                <h1>Jeu 2: Images</h1>
                <p>Pour jouer, il faut entrer son pseudo, appuyer sur "Enter". Puis sur la nouvelle pages<br>
                    qui s'ouvre il faut sélectionner un thème dans la liste déroulante.<br>
                    Les règles du jeu sont simples une image vous sera proposé<br>
                    et vous aurez à choisir entre 4 mots anglais, la bonne réponse<br>.
                    Il y a 5 mots à deviner en tout par partie.
                </p>
            </div>
        </div>
        <div class="col-6 col-xl-6">
            <H1 class="centerhorizontaly">Présentation du site</H1>
            <br>
            <br>
            <div id="presentation" class="centerhorizontaly">
                <p>
                    jbhbhjiinnjjniijnijnijijjninjijnijnijnijniijjiiijnnjinhbbhjbhhbjjbh<br>
                    jniijniniijiioioioioioioioioiiiiojjiojoijoijoijoiojijijoijjhhhjnhjnh<br>
                    jbhbhjiinnjjniijnijnijijjninjijnijnijnijniijjiiijnnjinnbnininninii<br>
                    jniijniniijiioioioioioioioioiiiiojjiojoijoijoijoiojijijoijhjninjinj<br>
                    jbhbhjiinnjjniijnijnijijjninjijnijnijnijniijjiiijnnjinibhbbibiiii<br>
                    jniijniniijiioioioioioioioioiiiiojjiojoijoijoijoiojijijoibniibbniihb<br>
                    jbhbhjiinnjjniijnijnijijjninjijnijnijnijniijjiiijnnjinijhinninniini<br>
                    jniijniniijiioioioioioioioioiiiiojjiojoijoijoijoiojijijoiibibnibniinbib
                </p>
            </div>
        </div>
    </div>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
