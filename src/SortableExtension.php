<?php
namespace BiffBangPow\Extension;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class SortableExtension extends DataExtension
{

    private static $db = [
        'Sort' => 'Int'
    ];

    /**
     * @var string
     */
    private static $default_sort = 'Sort';

    /**
     * @param FieldList $fields
     * @return FieldList|void
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName('Sort');
        return $fields;
    }
}