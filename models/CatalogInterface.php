<?php


namespace app\models;

/**
 * Interface CatalogInterface
 * @package app\models
 *
 * @property-read string $mainCategorySlug
 */
interface CatalogInterface
{
    public function getMainCategorySlug();
}