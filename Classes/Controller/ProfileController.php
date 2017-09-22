<?php
namespace WapplerSystems\Ncaext\Controller;

/***
 *
 * This file is part of the "Ncaext" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sven Wappler
 *
 ***/

use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use WapplerSystems\Ncaext\Domain\Model\Profile;

/**
 * ProfileController
 */
class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profileRepository
     *
     * @var \WapplerSystems\Ncaext\Domain\Repository\ProfileRepository
     * @inject
     */
    protected $profileRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        /* findAll ist eine Standard-Methode der Repository-Klasse */
        $profiles = $this->profileRepository->findAll();
        $this->view->assign('profiles', $profiles);
    }

    /**
     * action show
     *
     * @param \WapplerSystems\Ncaext\Domain\Model\Profile $profile
     * @ignorevalidation $profile
     * @return void
     */
    public function showAction(\WapplerSystems\Ncaext\Domain\Model\Profile $profile)
    {
        $this->view->assign('profile', $profile);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

        $this->view->assign('profile', new Profile());
    }

    /**
     * action create
     *
     * @param \WapplerSystems\Ncaext\Domain\Model\Profile $profile
     * @return void
     */
    public function createAction(\WapplerSystems\Ncaext\Domain\Model\Profile $profile)
    {
        $this->addFlashMessage('The object was created.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->profileRepository->add($profile);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \WapplerSystems\Ncaext\Domain\Model\Profile $profile
     * @ignorevalidation $profile
     * @return void
     */
    public function editAction(\WapplerSystems\Ncaext\Domain\Model\Profile $profile)
    {
        $this->view->assign('profile', $profile);
    }

    /**
     * action update
     *
     * @param \WapplerSystems\Ncaext\Domain\Model\Profile $profile
     * @return void
     */
    public function updateAction(\WapplerSystems\Ncaext\Domain\Model\Profile $profile)
    {
        $this->addFlashMessage('The object was updated.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->profileRepository->update($profile);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \WapplerSystems\Ncaext\Domain\Model\Profile $profile
     * @return void
     */
    public function deleteAction(\WapplerSystems\Ncaext\Domain\Model\Profile $profile)
    {
        $this->addFlashMessage('The object was deleted.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->profileRepository->remove($profile);
        $this->redirect('list');
    }


    /*
    protected function getErrorFlashMessage()
    {
        return LocalizationUtility::translate('msg.formerror', 'ncaext');
    }
*/

}
