<?php

namespace AppBundle\Factory;
// this is not the entire class! Just some code to steal :)
use AppBundle\Entity\Dinosaur;

class DinosaurFactory
{
    public function growVelociraptor(int $length): Dinosaur
    {
        return $this->createDinosaur('Velociraptor', true, $length);
    }

    /**
     * @param int $length
     * @return Dinosaur
     */
    private function createDinosaur(string $genus, bool $isCarnivorous, int $length): Dinosaur
    {
        $dinosaur = new Dinosaur($genus, $isCarnivorous);
        $dinosaur->setLength($length);
        return $dinosaur;
    }

    public function growFromSpecification(string $specification): Dinosaur
    {
        $codeName = 'InG-' . random_int(1, 99999);
        $length = random_int(1, Dinosaur::LARGE - 1);
        $isCarnivorous = false;

        if (stripos($specification, 'large') !== false) {
            $length = random_int(Dinosaur::LARGE ,100);
        }

        if (stripos($specification, 'carnivorous') !== false) {
            $isCarnivorous = true;
        }

        $dinosaur = $this->createDinosaur($codeName, $isCarnivorous, $length);
        return $dinosaur;

    }
}
