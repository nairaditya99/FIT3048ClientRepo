<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fandom Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $Home_Page_Title
 * @property string|null $Home_Page_Subheading
 * @property string|null $Home_Page_Photo
 * @property string|null $Section_One_Title
 * @property string|null $Section_One_Body
 * @property string|null $Section_One_Video_URL
 * @property string|null $Section_Two_Title
 * @property string|null $Section_Two_Body
 * @property string|null $Section_Two_Photo
 * @property string|null $Section_Three_Title
 * @property string|null $Section_Three_Body
 * @property string|null $Section_Three_Video_URL
 * @property string|null $Section_Four_Title
 * @property string|null $Section_Four_Body
 * @property string|null $Section_Four_Video_URL
 * @property string|null $Section_Five_Title
 * @property string|null $Section_Five_Body
 * @property string|null $Section_Five_Video_URL
 * @property string|null $Section_Six_Title
 * @property string|null $Section_Six_Body
 * @property string|null $Section_Six_Video_URL
 * @property string|null $Section_Seven_Title
 * @property string|null $Section_Seven_Body
 * @property string|null $Section_Seven_Photo
 * @property string|null $Section_Eight_Title
 * @property string|null $Section_Eight_Photo
 * @property string|null $Section_Eight_Body
 * @property string|null $Section_Nine_Title
 * @property string|null $Section_Nine_Photo
 * @property string|null $Section_Nine_Body
 * @property string|null $Section_Nine_Video_URL
 * @property string|null $Section_Ten_Title
 * @property string|null $Section_Ten_Photo
 * @property string|null $Section_Ten_Body_One
 * @property string|null $Section_Ten_Video_One_URL
 * @property string|null $Section_Ten_Video_Two_URL
 * @property string|null $Section_Ten_Body_Two
 * @property string|null $Section_Eleven_Title
 * @property string|null $Section_Eleven_Photo
 * @property string|null $Section_Eleven_Body
 * @property string|null $Section_Twelve_Title
 * @property string|null $Section_Twelve_Photo
 * @property string|null $Section_Twelve_Body
 * @property string|null $Section_Thirteen_Title
 * @property string|null $Section_Thirteen_Photo
 * @property string|null $Section_Thirteen_Body
 * @property string|null $Section_Fourteen_Title
 * @property string|null $Section_Fourteen_Photo
 * @property string|null $Section_Fourteen_Body
 * @property string|null $Section_Fifteen_Title
 * @property string|null $Section_Fifteen_Photo
 * @property string|null $Section_Fifteen_Body
 * @property string|null $Section_Fifteen_Video_URL
 */
class Fandom extends Entity
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
        'name' => true,
        'Home_Page_Title' => true,
        'Home_Page_Subheading' => true,
        'Home_Page_Photo' => true,
        'Section_One_Title' => true,
        'Section_One_Body' => true,
        'Section_One_Video_URL' => true,
        'Section_Two_Title' => true,
        'Section_Two_Body' => true,
        'Section_Two_Photo' => true,
        'Section_Three_Title' => true,
        'Section_Three_Body' => true,
        'Section_Three_Video_URL' => true,
        'Section_Four_Title' => true,
        'Section_Four_Body' => true,
        'Section_Four_Video_URL' => true,
        'Section_Five_Title' => true,
        'Section_Five_Body' => true,
        'Section_Five_Video_URL' => true,
        'Section_Six_Title' => true,
        'Section_Six_Body' => true,
        'Section_Six_Video_URL' => true,
        'Section_Seven_Title' => true,
        'Section_Seven_Body' => true,
        'Section_Seven_Photo' => true,
        'Section_Eight_Title' => true,
        'Section_Eight_Photo' => true,
        'Section_Eight_Body' => true,
        'Section_Nine_Title' => true,
        'Section_Nine_Photo' => true,
        'Section_Nine_Body' => true,
        'Section_Nine_Video_URL' => true,
        'Section_Ten_Title' => true,
        'Section_Ten_Photo' => true,
        'Section_Ten_Body_One' => true,
        'Section_Ten_Video_One_URL' => true,
        'Section_Ten_Video_Two_URL' => true,
        'Section_Ten_Body_Two' => true,
        'Section_Eleven_Title' => true,
        'Section_Eleven_Photo' => true,
        'Section_Eleven_Body' => true,
        'Section_Twelve_Title' => true,
        'Section_Twelve_Photo' => true,
        'Section_Twelve_Body' => true,
        'Section_Thirteen_Title' => true,
        'Section_Thirteen_Photo' => true,
        'Section_Thirteen_Body' => true,
        'Section_Fourteen_Title' => true,
        'Section_Fourteen_Photo' => true,
        'Section_Fourteen_Body' => true,
        'Section_Fifteen_Title' => true,
        'Section_Fifteen_Photo' => true,
        'Section_Fifteen_Body' => true,
        'Section_Fifteen_Video_URL' => true,
    ];
}
