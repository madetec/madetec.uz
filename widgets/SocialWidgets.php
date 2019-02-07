<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\widgets;

use madetec\crm\entities\News;
use yii\base\Widget;

class SocialWidgets extends Widget
{
    public $classes = [];

    /**
     * @throws \yii\base\InvalidArgumentException
     */
    public function init()
    {

        echo $this->render('social', [
            'classes' => $this->classes
        ]);
    }
}