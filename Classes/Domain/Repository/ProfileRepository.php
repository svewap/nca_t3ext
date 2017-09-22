<?php
namespace WapplerSystems\Ncaext\Domain\Repository;

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

use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use WapplerSystems\Ncaext\Domain\Model\Profile;

/**
 * The repository for Profiles
 */
class ProfileRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{


    /**
     * Beispiel für eine individuelle Methode
     *
     * @return Profile
     */
    public function findLatest() {
        $query = $this->createQuery();

        $query->setOrderings(array(
                'crdate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
            )
        );
        $result = $query->setLimit(1)->execute();
        if ($result instanceof QueryResultInterface) {
            return $result->getFirst();
        }
        return null;
    }

}
