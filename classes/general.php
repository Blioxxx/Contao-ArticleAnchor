<?php
/**
 * General Class
 * @copyright Blixxx
 * @author Mirco Kibiger
 * @package Article Anchor
 */

namespace Blixxx\Anchor;

class general
{
    public function switchMode($mode){
        switch ($mode){
            case "result":

                break;
            default:

                break;
        }
    }

    public function generateLink($article,$currentHost){
        $db = new db();
        $arrSite = $db->searchSite($article);

        $link = $currentHost."/".$arrSite[0]['alias'].".html#".$article;
        return $link;
    }
}