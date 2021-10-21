<?php
   class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    

        /**
        * Get the value of nome
        *
        * @return  mixed
        */
        public function getNome()
        {
        return $this->nome;
        }

        /**
        * Set the value of nome
        *
        * @param   mixed  $nome  
        *
        * @return  self
        */
        public function setNome($nome)
        {
        $this->nome = $nome;
        }

        /**
        * Get the value of nacionalidade
        *
        * @return  mixed
        */
        public function getNacionalidade()
        {
        return $this->nacionalidade;
        }

        /**
        * Set the value of nacionalidade
        *
        * @param   mixed  $nacionalidade  
        *
        * @return  self
        */
        public function setNacionalidade($nacionalidade)
        {
        $this->nacionalidade = $nacionalidade;
        }

        /**
        * Get the value of idade
        *
        * @return  mixed
        */
        public function getIdade()
        {
        return $this->idade;
        }

        /**
        * Set the value of idade
        *
        * @param   mixed  $idade  
        *
        * @return  self
        */
        public function setIdade($idade)
        {
        $this->idade = $idade;
        }

        /**
        * Get the value of altura
        *
        * @return  mixed
        */
        public function getAltura()
        {
        return $this->altura;
        }

        /**
        * Set the value of altura
        *
        * @param   mixed  $altura  
        *
        * @return  self
        */
        public function setAltura($altura)
        {
        $this->altura = $altura;
        }

        /**
        * Get the value of peso
        *
        * @return  mixed
        */
        public function getPeso()
        {
        return $this->peso;

        }

        /**
        * Set the value of peso
        *
        * @param   mixed  $peso  
        *
        * @return  self
        */
        public function setPeso($peso)
        {
        $this->peso = $peso;
        return $this->setCategoria();

        }

        /**
        * Get the value of categoria
        *
        * @return  mixed
        */
        public function getCategoria()
        {
        return $this->categoria;
        }

        /**
        * Set the value of categoria
        *
        * @param   mixed  $categoria  
        *
        * @return  self
        */
        public function setCategoria()
        {
            if ($this->peso < 52.2) {
                # code...
                $this->categoria = "Inválida";

            } elseif ($this->peso <= 70.3) {
                # code...
                $this->categoria = "Leve";

            } elseif ($this->peso <= 83.9) {
                # code...
                $this->categoria = "Médio";

            } elseif ($this->peso <= 120.2) {
                # code...
                $this->categoria = "Pesado";

            } else {
                # code...
                $this->categoria = "Inválida";
            }
        }

        /**
        * Get the value of vitorias
        *
        * @return  mixed
        */
        public function getVitorias()
        {
        return $this->vitorias;
        }

        /**
        * Set the value of vitorias
        *
        * @param   mixed  $vitorias  
        *
        * @return  self
        */
        public function setVitorias($vitorias)
        {
        $this->vitorias = $vitorias;
        }

        /**
        * Get the value of derrotas
        *
        * @return  mixed
        */
        public function getDerrotas()
        {
        return $this->derrotas;
        }

        /**
        * Set the value of derrotas
        *
        * @param   mixed  $derrotas  
        *
        * @return  self
        */
        public function setDerrotas($derrotas)
        {
        $this->derrotas = $derrotas;
        }

        /**
        * Get the value of empates
        *
        * @return  mixed
        */
        public function getEmpates()
        {
        return $this->empates;
        }

        /**
        * Set the value of empates
        *
        * @param   mixed  $empates  
        *
        * @return  self
        */
        public function setEmpates($empates)
        {
        $this->empates = $empates;

        }

        function apresentar() {
            echo '<p>-------------APRESENTAÇÃO----------------</p>';
            echo '#----------CHEGOU A HORA!!!----------------#';
            echo '<p> O Lutador: ' . $this->getNome() . '.</p>';
            echo '<p> Origem: ' . $this->getNacionalidade() . '.</p>';
            echo '<p> Idade: ' . $this->getIdade() . ' anos.</p>';
            echo '<p> Altura: ' . $this->getAltura() . ' m de altura.</p>';
            echo '<p> Pesando: ' . $this->getPeso() . ' kg.</p>';
            echo '<p> Ganhou: ' . $this->getVitorias() . ' lutas.</p>';
            echo '<p> Perdeu: ' . $this->getDerrotas() . ' lutas.</p>';
            echo '<p> Empatou: ' . $this->getEmpates() . ' lutas.</p>';
            
        }

        function status() {
            echo '<p>-------------CLASSE----------------</p>';
            echo '<p> O Lutador: ' . $this->getNome() .'</p>';
            echo '<p> É um peso: ' . $this->getCategoria() . '</p>';
            echo '<p> Com ' . $this->getVitorias() . ' Vitórias.</p>';
            echo '<p> Com ' . $this->getDerrotas() . ' Derrotas.</p>';
            echo '<p> Com ' . $this->getEmpates()  . ' Empates.</p>';
        }

        function ganharLuta() {
            $this->getVitorias($this->getVitorias() + 1);
        }

        function perderLuta() {
            $this->getDerrotas($this->getDerrotas() + 1);
        }

        function empatarLuta() {
            $this->empatarLuta($this->getEmpates() + 1);
        }
   }
