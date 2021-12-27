<?php
use PHPUnit\Framework\TestCase;
require_once './app/Contrasenya.php';
class ContrasenyaTest extends TestCase{
private $passP=null;
public $estrellas5="⭐⭐⭐⭐⭐";
public $estrellas4="⭐⭐⭐⭐";
public $estrellas3="⭐⭐⭐";
public $estrellas2="⭐⭐";
public $estrellas1="⭐";
public function  setUp():void{
    $this->passP=new Contrasenya("! ");
  
}
/*
public function testMD():void{   
     $estadoMD=$this->passP->tamMayorDiez();
     $this->assertEquals(1,$estadoMD);  
 }
public function testMV():void{
    $estadoMV=$this->passP->tamMayorVeinte();    
    $this->assertEquals(1,$estadoMV);
}
public function testE():void{
    $estadoE=$this->passP->espacios();
     $this->assertEquals(1,$estadoE);
}
public function testCE():void{
    $estadoCE=$this->passP->caracteresEspec();
    $this->assertEquals(1,$estadoCE);
}
public function testAN():void{
    $estadoAN=$this->passP->alfaNumerico();
    $this->assertSame(1,$estadoAN);   
}
*/
public function testValidar(){
    $estadoV=$this->passP->validar();
    if($estadoV==5){
        fwrite(STDERR, print_r($this->estrellas5, TRUE));
    }elseif($estadoV==4){
        fwrite(STDERR, print_r($this->estrellas4, TRUE));
    }elseif($estadoV==3){
        fwrite(STDERR, print_r($this->estrellas3, TRUE));
    }elseif($estadoV==2){
        fwrite(STDERR, print_r($this->estrellas2, TRUE));
    }elseif($estadoV==1){
        fwrite(STDERR, print_r($this->estrellas1, TRUE));
    }elseif($estadoV==0){
        fwrite(STDERR, print_r("sin estrellas", TRUE));
    }
}

}
?>