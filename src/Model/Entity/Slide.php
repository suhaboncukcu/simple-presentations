<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slide Entity
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $description
 * @property integer $priority
 * @property int $presentation_id
 * @property int $template_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Presentation $presentation
 * @property \App\Model\Entity\Template $template
 */
class Slide extends Entity
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
        'title' => true,
        'subtitle' => true,
        'description' => true,
        'priority' => true,
        'presentation_id' => true,
        'template_id' => true,
        'created' => true,
        'modified' => true,
        'presentation' => true,
        'template' => true
    ];
}
