<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Utils\TesteTalysson;
use App\Utils\AssinaDocumentoClass;

class TesteTalyssonController extends Controller
{
    /**
     * TesteTalyssonController constructor.
     * @param TesteTalysson $testeTalysson
     * @param AssinaDocumentoClass $assinaDocumentoClass
     * @param Request $request
     */
    public function __construct(TesteTalysson $testeTalysson, 
        AssinaDocumentoClass $assinaDocumentoClass,
        Request $request)
    {
        $this->testeTalysson = $testeTalysson;
        $this->assinaDocumentoClass = $assinaDocumentoClass;
        $this->request = $request;
    }
    public function teste()
    {
        $teste = [
            ["questao" => "Q01 - a)", "resposta" => $this->testeTalysson::$variavelArray],
            ["questao" => "Q01 - b)", "resposta" => $this->testeTalysson->maiorMenor()],
            ["questao" => "Q02 - a)", "resposta" => $this->testeTalysson::$variavelArrayVazia],
            ["questao" => "Q02 - b)", "resposta" => $this->testeTalysson->addRand()],
            ["questao" => "Q02 - c)", "resposta" => $this->testeTalysson->sumArray()],
            ["questao" => "Q03 - a)", "resposta" => "created AssinaDocumentoClass class"],
            ["questao" => "Q03 - b)", "resposta" => "ProprietarioDocumento and ValidadeDocumento property created"],
            ["questao" => "Q03 - c)", "resposta" => $this->assinaDocumentoClass->assinarDocumento()],
            ["questao" => "Q04", "resposta" => $this->testeTalysson->countUppercase()]

        ];
        return response()->json($teste);
    }
}