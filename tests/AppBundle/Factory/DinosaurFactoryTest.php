<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 3/11/18
 * Time: 01:55
 */

namespace Tests\AppBundle\Factory;


use AppBundle\Entity\Dinosaur;
use AppBundle\Factory\DinosaurFactory;
use PHPUnit\Framework\TestCase;

class DinosaurFactoryTest extends TestCase
{
    public function testItGrowsALargeVelociraptor()
    {
        $factory = new DinosaurFactory();
        $dinosaur = $factory->growVelociraptor(5);
        $this->assertInstanceOf(Dinosaur::class,$dinosaur);
        $this->assertInternalType('string',$dinosaur->getGenus());
        $this->assertSame('Velociraptor',$dinosaur->getGenus());
        $this->assertSame(5,$dinosaur->getLength());
    }
}