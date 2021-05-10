<?php

namespace App\Utils;

/**
 * Classe TesteTalysson
 */
class TesteTalysson
{
    /**
     * Questão 01 - A) do teste.
     *
     * @var array
     */
    public static $variavelArray = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    /**
     * Questão 02 - A) do teste.
     *
     * @var array
     */
    public static $variavelArrayVazia = [];
    
    /**
     * Questão 01 - B) do teste.
     * função que receba o array e retorne o maior e o menor número
     * 
     * @param Array $data
     * @return string
     */
    public function maiorMenor($data = null)
    {
        !empty($data) ?: $data = self::$variavelArray;
        return "O maior valor do array é ".max($data)." e o menor valor é ".min($data);
    }

    /**
     * Questão 02 - B) do teste.
     * 6 números aleatórios, entre 10 e 20
     * 
     * @return array
     */
    public function addRand()
    {
        $data = [];
        for ($i=0; $i < 6; $i++) { 
            array_push($data, mt_rand(10, 20));
        }
        return $data;
    }

    /**
     * Questão 02 - C) do teste.
     * função que receba o array do item ​ b ​ e mostre a soma destes números
     * 
     * @param Array $data
     * @return integer
     */
    public function sumArray()
    {
        return array_sum($this->addRand());
    }

    /**
     * Questão 02 - C) do teste.
     * função que receba o array do item ​ b ​ e mostre a soma destes números
     * 
     * @param String $string
     * @return integer
     */
    public function countUppercase($text = 'FabricaInfo')
    {
        return $text.' = '.preg_match_all("/[A-Z]/", $text);
    }
}
