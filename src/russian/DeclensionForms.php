<?php
namespace Morpher\Ws3Client\Russian;


class DeclensionForms
{
    public $Nominative;
    public $Genitive;
    public $Dative;
    public $Accusative;
    public $Instrumental;
    public $Prepositional;
    public $PrepositionalWithO;    

    function __construct($data)
    {
        $this->Nominative = $data['И'] ?? null;         
        $this->Genitive  = $data['Р'] ?? null;     
        $this->Dative    = $data['Д'] ?? null;
        $this->Accusative = $data['В'] ?? null; 
        $this->Instrumental = $data['Т'] ?? null; 
        $this->Prepositional = $data['П'] ?? null; 
        $this->PrepositionalWithO = $data['П_о'] ?? null; 
    }
}