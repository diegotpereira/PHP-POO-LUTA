<?php
    
    require_once './modelo/Lutador.php';
    require_once './interface/ControladorLuta.php';

    class Luta implements ControladorLuta{

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovado;

        

/**
* Get the value of desafiado
*
* @return  mixed
*/
public function getDesafiado()
{
return $this->desafiado;
}

/**
* Set the value of desafiado
*
* @param   mixed  $desafiado  
*
* @return  self
*/
public function setDesafiado($desafiado)
{
$this->desafiado = $desafiado;
return $this;
}

/**
* Get the value of desafiante
*
* @return  mixed
*/
public function getDesafiante()
{
return $this->desafiante;
}

/**
* Set the value of desafiante
*
* @param   mixed  $desafiante  
*
* @return  self
*/
public function setDesafiante($desafiante)
{
$this->desafiante = $desafiante;
return $this;
}

/**
* Get the value of rounds
*
* @return  mixed
*/
public function getRounds()
{
return $this->rounds;
}

/**
* Set the value of rounds
*
* @param   mixed  $rounds  
*
* @return  self
*/
public function setRounds($rounds)
{
$this->rounds = $rounds;
return $this;
}

/**
* Get the value of aprovado
*
* @return  mixed
*/
public function getAprovado()
{
return $this->aprovado;
}

/**
* Set the value of aprovado
*
* @param   mixed  $aprovado  
*
* @return  self
*/
public function setAprovado($aprovado)
{
$this->aprovado = $aprovado;
return $this;
}

public function marcarLuta($desafiante , $desafiado) {
    if ($desafiante->getCategoria() === $desafiado->getCategoria() && $desafiante  != $desafiado) {
        # code...
        $this->aprovado = true;
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;

    } else {
        # code...
        $this->aprovado = false;
        $this->desafiado = null;
        $this->desafiante = null;
        // echo "A luta não pode acontecer";   
    }
    
}

public function lutar() {
    if ($this->aprovado) {
        # code...
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();

        $vencedor = rand(0, 2);

        switch ($vencedor) {
            case '0': // empate
                # code...
                echo "<p>--------------EMPATE-------------</p>";
                $this->desafiante->empatarLuta();
                $this->desafiado->empatarLuta();
                break;

            case '1': // Desafiado Vence
                echo '<p>-------------RESULTADO----------------</p>';
                echo "<p>Vitória do </p>" . $this->desafiado->getNome();
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;

            case '2': // Desafiante Vence
                echo '<p>-------------RESULTADO----------------</p>';
                echo "<p>Vitória do " . $this->desafiante->getNome() . "</p>";
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                break;
            
            default:
                # code...
                break;
        }
    } else {
        echo "A Luta não pode acontecer!";
        # code...
    }
    
}
    }
?>