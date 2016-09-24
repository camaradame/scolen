<?php

namespace Ecole\FrontBundle\DataFixtures\ORM\Dev;


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
            __DIR__.'/etablissement.yml'
        ];
    }

    public function region($id)
    {
        $region = array(
            "Dakar",
            "Saint-Louis",
            "Louga",
            "Thies",
            "Diourbel",
            "Fatick",
            "Matam",
            "Kaloack"
        );

        return $region[$id];
    }

    public function departement($id)
    {
        $region = array(
            "Pikine",
            "Sanar",
            "Ndiolofène",
            "Tivaone",
            "Touba",
            "Foudiout",
            "Kanel",
            "Kaffrine"
        );

        return $region[$id];
    }

    public function adresse($id)
    {
        $adresses = array(
            'Fass Mbao, Taly Caro, Rue 12',
            'Mermoz, Rue 14',
            'Sacré Coeur, Boulangerie Jaune, Rue 3',
            'Ndiaye Meké, Rue 17',
            'Tiaroye Sud, Taly Rue 15',
            'Pikine Nord, Rue 16',
            'Coeur Ndiaye Lo Rue 13',
        );

        return $adresses[$id];
    }

    public function ecoleName($id)
    {
        $ecoles = array(
            'IAM',
            'IZI School',
            'BM',
            'Angela David',
            'Lycé thiaroye',
            'Lycé Mbao',
            'Les Intellectuctuel',
            'Educazur'
        );

        return $ecoles[$id];
    }
}