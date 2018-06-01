<?php


namespace app\models;


class CategoryNews extends Category
{
    const SLUG = 'news';
    const TITLE = 'Новости';

    public $category_slug = self::SLUG;
}