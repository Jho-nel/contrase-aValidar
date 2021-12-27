<?php
class Contrasenya{
    private $passwordUser;
  
    public function __construct(String $passwordUser){
 
        $this->passwordUser=$passwordUser;
 
    }
    public function getPassword(){
 
        return $this->passwordUser;
    }

    
    public function validar():int{
  
        $cont=0;
        $cont=$cont+$this->tamMayorDiez();
        $cont=$cont+$this->tamMayorVeinte();
        $cont=$cont+$this->espacios();
        $cont=$cont+$this->caracteresEspec();
        $cont=$cont+$this->alfaNumerico();
        return $cont;
    }
    public function tamMayorDiez():int{
     
      $tam=strlen($this->passwordUser);       
      if($tam>10){
         return 1;
      }else if($tam<=10){
          return 0;
      }

    }
    public function tamMayorVeinte():int{
   
     $tam=strlen($this->passwordUser);
     if($tam>20){
         return 1;
     }else{
         return 0;
     }
    }
    public function alfaNumerico(){
        $pass=$this->passwordUser;
        $tam=strlen($pass);
          if(preg_match('/[0-9]+/',$pass)){
              if(preg_match('/[a-zA-Z]+/',$pass)){
                return 1;
              }else{
                  return 0;
              }
          }else{
              return 0;
          }
       
     
    }
     public function caracteresEspec():int{
        if(strlen($this->passwordUser)==0){
           return 0;
        }
        elseif(ctype_alnum($this->passwordUser)){
            return 0;
        }else{
            return 1;
        }
     }
    public function espacios():int{
        if(strlen($this->passwordUser)==0){
            return 0;
         }
        if(!ctype_graph($this->passwordUser)){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    
}
/*
$c=new Contrasenya(" 1");
echo $c->getPassword();
echo "<p>mayor 10 ".$c->tamMayorDiez();
echo "<p>mayor 20 ".$c->tamMayorVeinte();
echo "<p> alf ".$c->alfaNumerico();
echo "<p> ce ".$c->caracteresEspec();
echo "<p>esp ".$c->espacios();
echo "<p>tota ".$c->validar();
 */
?>
