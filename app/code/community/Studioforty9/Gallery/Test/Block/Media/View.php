<?php
/**
 * Studioforty9 Gallery
 *
 * @category  Studioforty9
 * @package   Studioforty9_Gallery
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9 (http://www.studioforty9.com)
 * @license   https://github.com/studioforty9/gallery/blob/master/LICENCE BSD
 * @version   1.0.0
 * @link      https://github.com/studioforty9/gallery
 */

/**
 * Studioforty9_Gallery_Test_Block_Media_View
 *
 * @category   Studioforty9
 * @package    Studioforty9_Gallery
 * @subpackage Test
 */
class Studioforty9_Gallery_Test_Block_Media_View extends EcomDev_PHPUnit_Test_Case
{
    /** @var Studioforty9_Gallery_Block_Media_View */
    protected $block;

    public function setUp()
    {
        $this->block = new Studioforty9_Gallery_Block_Media_View();
    }

    public function test_block_has_album_model_after_html()
    {
        $this->block->setTemplate('studioforty9/gallery/media/view.phtml')->toHtml();
        $this->assertTrue($this->block->hasData('media'));
        $this->assertTrue($this->block->hasData('album'));
    }
}
