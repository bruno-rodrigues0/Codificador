<?php

class encriptador
{
    private $encriptar;
    private $decodificado;

    public function __construct($frase)
    {
        $this->setEncriptar($frase);
    }

    /**
     * Get the value of encriptar
     */
    public function getEncriptar()
    {
        return $this->encriptar;
    }

    /**
     * Set the value of encriptar
     *
     * @return  self
     */
    public function setEncriptar($encriptar)
    {
        $this->encriptar = str_replace(" ", "+", $encriptar);;

        return $this;
    }

    /**
     * Get the value of decodificado
     */
    public function getDecodificado()
    {
        return $this->decodificado;
    }

    /**
     * Set the value of decodificado
     *
     * @return  self
     */
    public function setDecodificado($decodificado)
    {
        $this->decodificado = $decodificado;

        return $this;
    }

    public function encriptar()
    {
        $letras[1] = "q";
        $letras[2] = "w";
        $letras[3] = "e";
        $letras[4] = "r";
        $letras[5] = "t";
        $letras[6] = "y";
        $letras[7] = "u";
        $letras[8] = "i";
        $letras[9] = "o";
        $letras[10] = "p";
        $letras[11] = "a";
        $letras[12] = "s";
        $letras[13] = "d";
        $letras[14] = "f";
        $letras[15] = "g";
        $letras[16] = "h";
        $letras[17] = "j";
        $letras[18] = "k";
        $letras[19] = "l";
        $letras[20] = "ç";
        $letras[21] = "z";
        $letras[22] = "x";
        $letras[23] = "c";
        $letras[24] = "v";
        $letras[25] = "b";
        $letras[26] = "n";
        $letras[27] = "m";
        $letras[28] = "+";

        $string = $this->getEncriptar();
        $arr1 = str_split($string);
        if ($string == !null) {
            for ($y = 0; $y < sizeof($arr1); $y++) {
                $i = 1;
                do {
                    if ($arr1[$y] == $letras[28]) {
                        $contador = 28;
                    } else {
                        if ($letras[$i] == $arr1[$y]) {
                            $contador = $i;
                        }
                    }
                    $i++;
                } while (sizeof($letras) > $i);
                if ($contador == 28) {
                    $suce = 28;
                    $ante = 28;
                } else {
                    $suce = $contador + 1;
                    if ($suce == 28) {
                        $suce = 1;
                    }
                    $ante = $contador - 1;
                    if ($ante == 0) {
                        $ante = 27;
                    }
                }
                $duplas[$y] = $letras[$ante] . $letras[$suce];
            }
            for ($i = 0; $i < sizeof($duplas); $i++) {
                print "<span>$duplas[$i]</span>";
            }
        } else {
            echo 'Não há mensagem para ser decodificada';
        }
    }
}