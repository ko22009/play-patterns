<?php

namespace PlayPatterns\Structural\Composite;

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    private Entity $structure;

    public function setUp(): void
    {
        $C = new Folder('C:');
        $photos = new Folder('photos');
        $videos = new Folder('videos');

        $summer = new Folder('summer');
        $jpg = new File('11DSC02405.jpg', 'test');
        $summer->create($jpg);
        $jpg = new File('23DSC04344.jpg', 'test');
        $summer->create($jpg);
        $photos->create($summer);

        $winter = new Folder('winter');
        $jpg = new File('11DSC02405.jpg', 'test');
        $winter->create($jpg);
        $jpg = new File('23DSC04344.jpg', 'test');
        $winter->create($jpg);
        $photos->create($winter);

        $wedding = new Folder('wedding');
        $videos->create($wedding);
        $avi = new File('10.12.2021.avi', 'test');
        $wedding->create($avi);
        $avi = new File('11.12.2021.avi', 'test');
        $wedding->create($avi);
        $photos->delete($summer);
        $C->create($photos);
        $C->create($videos);
        $this->structure = $C;
    }

    public function testCompositeCreateStructureAndDeleteElement()
    {
        $structure = 'C:\\' . PHP_EOL . '  photos\\' . PHP_EOL . '    winter\\' . PHP_EOL . '      11DSC02405.jpg' . PHP_EOL . '      23DSC04344.jpg' . PHP_EOL . '  videos\\' . PHP_EOL . '    wedding\\' . PHP_EOL . '      10.12.2021.avi' . PHP_EOL . '      11.12.2021.avi' . PHP_EOL;
        $this->assertEquals($structure, $this->structure->getStructure());
    }

    public function testAvailableFolderPhotosInCurrentDirectoryIsTrue()
    {
        $availableEntities = $this->structure->getCurrentStructure();
        $fotoAvailable = in_array('photos', $availableEntities);
        $this->assertTrue($fotoAvailable);
    }

    public function testOpenFolderPhotosInCurrentDirectoryIsNotNull()
    {
        $photos = $this->structure->open('photos');
        $this->assertNotNull($photos);
    }

    public function testOpenFolderAnotherInCurrentDirectoryIsNull()
    {
        $photos = $this->structure->open('another');
        $this->assertNull($photos);
    }

    public function testOpenFilePhotoInPhotosWinterFolder()
    {
        $content = $this->structure->open('photos')->open('winter')->open('11DSC02405.jpg');
        $this->assertEquals('test', $content);
    }

}
