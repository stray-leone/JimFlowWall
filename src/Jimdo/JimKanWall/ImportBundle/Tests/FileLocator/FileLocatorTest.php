<?php

namespace Jimdo\JimKanWall\ImportBundle\Tests\FileLocator;

use \Jimdo\JimKanWall\ImportBundle\FileHandler\FileLocator;
use \Jimdo\JimKanWall\ImportBundle\Tests\TestCase;

class FileLocatorTest extends TestCase
{
    public function testGetReturnOldestFileShouldRunWithGivenParamsAndThrowGivenException()
    {
        $finderMock = $this->getMock('\Symfony\Component\Finder\Finder', array(
                                                      'in', 'name', 'files', 'sortByName', 'getIterator'
                                                 ), array(), '', FALSE);


        $iteratorMock = $this->getMock('\ArrayIterator', array(
                                                      'current'
                                                 ), array(), '', FALSE);

        $iteratorMock->expects($this->once())
                ->method('current');

        $finderMock->expects($this->exactly(1))
                ->method('in')
                ->will($this->returnValue($finderMock));

        $finderMock->expects($this->exactly(1))
                ->method('name')
                ->will($this->returnValue($finderMock));

        $finderMock->expects($this->exactly(1))
                ->method('files')
                ->will($this->returnValue($finderMock));

        $finderMock->expects($this->exactly(1))
                ->method('sortByName')
                ->will($this->returnValue($finderMock));

        $finderMock->expects($this->exactly(1))
                ->method('getIterator')
                ->will($this->returnValue($iteratorMock));

        $this->setExpectedException('Jimdo\JimKanWall\ImportBundle\Exception\NoMatchingFileException');

        $fileLocator = new FileLocator($finderMock);

        $fileLocator->getOldestFile('/klopfer');

    }


}
