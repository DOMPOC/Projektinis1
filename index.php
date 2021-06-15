<?php
header('Content-type: text/plain');
class Transportas {
    private $modelis;
    private $marke;
    private $kaina;
    private $svoris;
    private $aprasymas;
    private $zmones;

    function __construct($modelis , $marke) {
        $this->modelis = $modelis;
        $this->marke = $marke;
    }
    function get_modelis() {
        return $this->modelis;
    }
    function set_modelis($modelis) {
        $this->modelis = $modelis;
    }
    function get_marke() {
        return $this->marke;
    }
    function set_marke($marke){
        $this->marke = $marke;
    }
    function get_kaina() {
        return $this->kaina;
    }
    function set_kaina($kaina) {
        $this->kaina = $kaina;
    }
    function get_svoris() {
        return $this->svoris;
    }
    function set_svoris($svoris) {
        $this->svoris = $svoris;
    }
    function get_aprasymas() {
        return $this->aprasymas;
    }
    function set_aprasymas($aprasymas) {
        $this->aprasymas = $aprasymas;
    }
    function get_zmones() {
        return $this->zmones;
    }
    function set_zmones($zmones) {
        $this->zmones = $zmones;
    }


}
class Automobilis extends Transportas {
    private $variklis;
    private $galingumas;
    private $greitis;

    function get_variklis() {
        return $this->variklis;
    }
    function set_modelis($variklis) {
        $this->variklis = $variklis;
    }
    function get_galingumas() {
        return $this->galingumas;
    }
    function set_galingumas($galingumas) {
        $this->galingumas = $galingumas;
    }
    function get_greitis() {
        return $this->greitis;
    }
    function set_greitis($greitis) {
        $this->greitis = $greitis;
    }
}
class Motociklas extends Transportas{
    private $variklis;
    private $galingumas;
    private $greitis;
    private $rankenuspalva;

    function get_variklis() {
        return $this->variklis;
    }
    function set_modelis($variklis) {
        $this->variklis = $variklis;
    }
    function get_galingumas() {
        return $this->galingumas;
    }
    function set_galingumas($galingumas) {
        $this->galingumas = $galingumas;
    }
    function get_greitis() {
        return $this->greitis;
    }
    function set_greitis($greitis) {
        $this->greitis = $greitis;
    }
    function get_rankenuspalva(){
        return $this->rankenuspalva;
    }
    function set_rankenuspalva($rankenuspalva){
        $this->rankenuspalva = $rankenuspalva;
    }

}
class Dviratis extends Transportas{
    private $grandinesilgis;

    function get_grandinesilgis(){
        return $this->grandinesilgis;
    }
    function set_grandinesilgis($grandinesilgis){
        $this->grandinesilgis = $grandinesilgis;
    }
}
$auto1 = new Automobilis("Volkswagen", "Golf");
$auto1->set_kaina(5000);
$auto1->set_aprasymas("Nauja masina");
$auto1->set_svoris(1400);
$auto1->set_zmones(5);
$auto1->set_galingumas(125);


echo $auto1->get_modelis(). " ".$auto1->get_marke(). " ".$auto1->get_galingumas()."\n";
$moto = new Motociklas("Kawasaki", "Ninja");
$moto->set_kaina(10000);
$moto->set_aprasymas("Ziaurus motociklas");
$moto->set_svoris(300);
$moto->set_zmones(2);
$moto->set_galingumas(103);
$moto->set_rankenuspalva("Melyna");
echo $moto->get_modelis(). " ".$moto->get_marke()." ".$moto->get_rankenuspalva()."\n";

$dviratis = new Dviratis("KTM", "ZN5");
$dviratis->set_kaina(450);
$dviratis->set_aprasymas("Greitas dviratis");
$dviratis->set_svoris(25);
$dviratis->set_zmones(1);
$dviratis->set_grandinesilgis(2);
echo $dviratis->get_modelis(). " ".$dviratis->get_marke()." ".$dviratis->get_grandinesilgis()."\n";
?>
