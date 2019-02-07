<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\widgets;

use madetec\crm\entities\News;
use yii\base\Widget;

class NewsWidget extends Widget
{
    public $count;
    public $profile;

    /**
     * @throws \yii\base\InvalidArgumentException
     */
    public function init()
    {
        $news = News::find()
            ->where(['status' => News::STATUS_PUBLISHED,])
            ->andWhere(['<=', 'published_at', time()])
            ->orderBy(['created_at' => SORT_DESC])
            ->limit($this->count)->all();

        echo $this->render($this->profile, [
            'news' => $news
        ]);
    }
}