<?php
namespace AppBundle\Factory;
// this is not the entire class! Just some code to steal :)
use AppBundle\Entity\Dinosaur;

class DinosaurFactory
{
    public function growVelociraptor(int $length) : Dinosaur
    {
        return $this->createDinosaur('Velociraptor',true,$length);
    }

    /**
     * @param int $length
     * @return Dinosaur
     */
    private function createDinosaur(string $genus,bool $isCarnivorous,int $length): Dinosaur
    {
        $dinosaur = new Dinosaur($genus, $isCarnivorous);
        $dinosaur->setLength($length);
        return $dinosaur;
    }
}
