<?php


class Comida implements JsonSerializable{
    //Atributos
    private $Onigiri;
    private $Maki_Sushi;
    private $Ramen;
    private $Takoyaki;
    private $Nikuman;
    //Softdrinks
    private $Te_matcha;
    private $Fanta;
    private $Ramune;
    private $Sake;
    private $Happoshu;

    //Constructor
    function __construct($og, $ms, $rm, $ty, $nk,$tm,$fnt,$rmn,$sk,$hpu){
        $this -> Onigiri = $og;
        $this -> Maki_Sushi = $ms;
        $this -> Ramen = $rm;
        $this -> Takoyaki = $ty;  
        $this -> Nikuman = $nk;  
        $this -> Te_matcha = $tm;        
        $this -> Fanta = $fnt;          
        $this -> Ramune = $rmn;       
        $this -> Sake = $sk;  
        $this -> Happoshu = $hpu;
    }   

    //Methodos
        function getComida(){
                echo "<tr>";
        echo "<td>$this->Onigiri</td>";
        echo "<td>$this->Maki_Sushi</td>";
        echo "<td>$this->Ramen</td>";
        echo "<td>$this->Takoyaki</td>";
        echo "<td>$this->Nikuman</td>";
        echo "<td>$this->Te_matcha</td>";
        echo "<td>$this->Fanta</td>";
        echo "<td>$this->Ramune</td>";
        echo "<td>$this->Sake</td>";
        echo "<td>$this->Happoshu</td>";

        echo "</tr>";
        }

        function jsonSerialize(){
            return get_object_vars($this);
        }




}
?>