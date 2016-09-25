<?php

namespace Ecole\UserBundle\DataFixtures\ORM\Dev;


use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;

class DataLoader extends AbstractLoader
{

    /**
     * Returns an array of file paths to fixtures. File paths can be relatives, specified with the `@Bundlename`
     * notation or being SplFileInfo instances.
     *
     * @return string[]|\SplFileInfo[]
     */
    public function getFixtures(){
        return [
            __DIR__.'/users.yml'
        ];
    }


}