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
echo '<strong>Exercice 1</strong><br>';
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

echo '<br><br><strong>Exercice 2</strong><br>';
/*interface Shape{
    function getArea();
}*/
abstract class Shape{
    abstract function getArea();
}
//class Square implements Shape{
class Square extends Shape{
    private $width;
    private $height;
    function getArea(){echo "25 ";}

}
//class Circle implements Shape{
class Circle extends Shape{
    private $radius;
    function getArea(){echo "153.86 ";}

}
$s=new Square();
$c=new Circle();
$tab=array($s,$c);

for($i=0;$i<count($tab);$i++){ // fonction existente qui calcule la longueur d'un tableau ou d'une chaine de caractère, renvoie un int
    echo get_class($tab[$i]); // fonction existente qui renvoie un string
    echo " Area : ";
    echo $tab[$i]->getArea();
    echo'<br>';
}
echo '<br><br><strong>Exercice 3</strong><br>';
Trait Un{
    function small($text){
        echo '<small>'.$text.'</small>';
    }
    function big($text){
        echo '<h4>'.$text.'</h4>';
    }

}
Trait Deux{
    function small($text){
        echo '<i>'.$text.'</i>';
    }
    function big($text){
        echo '<h2>'.$text.'</h2>';
    }
}
class Text{
    use Un,Deux{
        Un::small insteadof Deux;//force l'utilisation de small de Un et bloque small de Deux
                                // affiche small de un
        Deux::big insteadof Un;// affiche big de Deux
        Deux::big as gros; // as remplace le nom de la fonction
                            // affiche big de Deux
        Un::small as petit;// affiche small de un

    }

}
$t= new Text();
$t->small("Banane");

$t->big("Banane");

$t->gros("Banane");

$t->petit("Banane");

?>
