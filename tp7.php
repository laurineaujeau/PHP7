<?php
 class Formulaire {
    function __construct(){
        echo '<form action="tp6.php" method="post">';
    }
    function ajouterzonetexte(){
        echo'<input type="text"/>';
    }
    function ajouterbouton(){
        echo'<input type="submit" value="Envoyer"/>';
    }
    function getform(){
        echo'</form>';
    }

}
class form2 extends Formulaire {
   function ajouterBox($TE){
        echo'<input type=\'checkbox\' name=\'sport\' value=\'$TE\'/>';
    }
    function ajouterRadio($FH){
        echo'<input type=\'radio\' name=\'genre\' value=\'$FH\'/>';
    }
}
$f=new form2();
$f->__construct();
echo 'Votre nom :';
$f->ajouterzonetexte();
echo'<br>';
echo 'Votre code :';
$f->ajouterzonetexte();
echo'<br>';
$f->ajouterbouton();
echo'<br>';
echo 'Femme ';
$f->ajouterRadio("femme");
echo'<br>';
echo 'Homme ';
$f->ajouterRadio("homme");
echo'<br>';
echo 'Tennis ';
$f->ajouterBox("Tennis");
echo'<br>';
echo 'Equitation ';
$f->ajouterBox("Equitation");
$f->getform();
?>
