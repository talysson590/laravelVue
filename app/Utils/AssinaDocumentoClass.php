<?php

namespace App\Utils;

/**
 * Class AssinaDocumentoClass
 * @package App\Utils
 * 
 * @author Talysson Lima <diegotalysson@gmail.com>
 */
class AssinaDocumentoClass
{
    /**
     * Questão 03 - B) do teste.
     *
     * @var string
     */
    protected static $proprietarioDocumento = 'joao';

    /**
     * Questão 03 - B) do teste.
     *
     * @var string
     */
    protected static $validadeDocumento = '30/11/2020';

    /**
     * Questão 03 - C) do teste.
     * Retorna o nome do proprietário do documento e a data de validade do documento
     * 
     * @return string
     */
    public function assinarDocumento()
    {
        return self::$proprietarioDocumento.':'.self::$validadeDocumento;
    }
}
