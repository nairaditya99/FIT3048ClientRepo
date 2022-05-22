<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactUsCm Entity
 *
 * @property int $id
 * @property string|null $Banner_photo_1
 * @property string|null $Title_1
 * @property string|null $Body_21
 * @property string|null $IG_1
 * @property string|null $IG_2
 * @property string|null $IG_3
 * @property string|null $IG_4
 * @property string|null $IG_5
 * @property string|null $IG_6
 * @property string|null $Title_2
 * @property string|null $Body_2
 * @property string|null $Address
 * @property string|null $Phone
 * @property string|null $Email
 * @property string|null $Website
 */
class ContactUsCm extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Banner_photo_1' => true,
        'Title_1' => true,
        'Body_21' => true,
        'IG_1' => true,
        'IG_2' => true,
        'IG_3' => true,
        'IG_4' => true,
        'IG_5' => true,
        'IG_6' => true,
        'Title_2' => true,
        'Body_2' => true,
        'Address' => true,
        'Phone' => true,
        'Email' => true,
        'Website' => true,
    ];
}
