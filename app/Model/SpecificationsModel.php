<?php
// Créer une classe SpécificationsModel, qui hérite de Model, en spécifiant le namespace
// Elle sert à travailler sur la table spécifications
namespace Model;

use \W\Model\Model;

class SpecificationsModel extends Model
{
    public function basicSpec ($product_id)
    {
        return $this->search(['product_id' => $product_id, 'type' => 'basic'], 'AND');
    }
    
    public function detailsSpec ($product_id)
    {
        return $this->search(['product_id' => $product_id, 'type' => 'details'], 'AND');
    }
}
