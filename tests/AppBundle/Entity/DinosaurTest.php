<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 3/11/18
 * Time: 01:11
 */

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Dinosaur;
use ClassesWithParents\D;
use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testSettingLength()
    {
        $dinosaur = new Dinosaur();
        $this->assertSame(0, $dinosaur->getLength());
        
        $dinosaur->setLength(9);
        $this->assertSame(9, $dinosaur->getLength());
    }

    public function testDinosaurHasNotShrunk()
    {
        $dinosaur = new Dinosaur();
        $dinosaur->setLength(15);
        $this->assertGreaterThan(12,$dinosaur->getLength(),'Did you put it in a washing machine?');
    }
}