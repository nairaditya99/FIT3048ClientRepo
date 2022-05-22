<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AboutUsCm Entity
 *
 * @property int $id
 * @property string|null $Banner_Photo_1
 * @property string|null $S1_Title
 * @property string|null $S1_Body
 * @property string|null $S1_Sub_Title_1
 * @property string|null $S1_Sub_Body_1
 * @property string|null $S1_Sub_Title_2
 * @property string|null $S1_Sub_Body_2
 * @property string|null $S1_Sub_Title_3
 * @property string|null $S1_Sub_Body_3
 * @property string|null $S2_Title
 * @property string|null $S2_Body
 * @property string|null $S2_Sub_Title
 * @property string|null $S2_Sub_Body
 * @property string|null $S2_Sub_Photo
 * @property string|null $S3_Title
 * @property string|null $S3_Sub_Title_1
 * @property string|null $S3_Sub_Body_1
 * @property string|null $S3_Sub_Title_2
 * @property string|null $S3_Sub_Body_2
 * @property string|null $S3_Photo
 */
class AboutUsCm extends Entity
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
        'Banner_Photo_1' => true,
        'S1_Title' => true,
        'S1_Body' => true,
        'S1_Sub_Title_1' => true,
        'S1_Sub_Body_1' => true,
        'S1_Sub_Title_2' => true,
        'S1_Sub_Body_2' => true,
        'S1_Sub_Title_3' => true,
        'S1_Sub_Body_3' => true,
        'S2_Title' => true,
        'S2_Body' => true,
        'S2_Sub_Title' => true,
        'S2_Sub_Body' => true,
        'S2_Sub_Photo' => true,
        'S3_Title' => true,
        'S3_Sub_Title_1' => true,
        'S3_Sub_Body_1' => true,
        'S3_Sub_Title_2' => true,
        'S3_Sub_Body_2' => true,
        'S3_Photo' => true,
    ];
}
