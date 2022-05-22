<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * News Entity
 *
 * @property int $id
 * @property int $fandom_id
 * @property string $title
 * @property string $source
 * @property string $content
 * @property \Cake\I18n\FrozenDate $date
 * @property string $location
 * @property string $photo
 * @property string $link
 *
 * @property \App\Model\Entity\Fandom $fandom
 */
class News extends Entity
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
        'fandom_id' => true,
        'title' => true,
        'source' => true,
        'content' => true,
        'date' => true,
        'location' => true,
        'photo' => true,
        'link' => true,
        'fandom' => true,
    ];
}
