<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\controllers;

use madetec\crm\entities\News;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class SitemapController extends Controller
{
    public function actionIndex()
    {
        $urls = [];

        $host = Yii::$app->request->getHostInfo();

        $urls = [
            [
                'loc' => $host . Url::to(['site/index']),
                'lastmod' => '2019-01-22'
            ],
            [
                'loc' => $host . Url::to(['site/contact']),
                'lastmod' => '2019-01-22'
            ],

            [
                'loc' => $host . Url::to(['site/about']),
                'lastmod' => '2019-01-22'
            ],
        ];

        $news = News::findAll([
            'status' => News::STATUS_PUBLISHED,
        ]);

        foreach ($news as $new) {
            $urls[] = [
                'loc' => $host . Url::to(['news/view', 'slug' => $new->slug]),
                'lastmod' => date('Y-m-d', $new->published_at)
            ];
        }
        $xml = new \DOMDocument("1.0", "UTF-8");
        $xml_urlset = $xml->createElement('urlset');
        $xml_urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        foreach ($urls as $url) {
            $url = (object)$url;
            $xml_url = $xml->createElement("url");
            $xml_loc = $xml->createElement("loc", $url->loc);
            $xml_lastmod = $xml->createElement("lastmod", $url->lastmod);
            $xml_url->appendChild($xml_loc);
            $xml_url->appendChild($xml_lastmod);
            $xml_urlset->appendChild($xml_url);
        }

        $xml->appendChild($xml_urlset);
        $xml->formatOutput = true;
        $xml->preserveWhiteSpace = false;
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $xml->saveXML();
    }
}
