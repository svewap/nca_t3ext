<?php
namespace WapplerSystems\Ncaext\ViewHelpers;

use WapplerSystems\Ncaext\Domain\Model\Profile;


/**
 *
 * @package WapplerSystems\Ncaext\ViewHelpers
 */
class TestViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{


    /**
     * @param string $for
     * @return string
     */
    public function render(Profile $profile)
    {

        return $profile->getFirstname().' '.$profile->getLastname();
    }


}