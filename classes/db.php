<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 15.08.15
 * Time: 00:08
 */

namespace Blixxx\Anchor;

use Contao\Database;

class db extends \Frontend
{
    public function getAllArticle(){
        $result = $this->Database->prepare("SELECT * FROM tl_article")->execute()->fetchAllAssoc();
        return $result;
    }

    public function getAllPages(){
        $result = $this->Database->prepare("SELECT * FROM tl_page")->execute()->fetchAllAssoc();
        return $result;
    }

    public function searchSite($article){
        $articlePID = $this->Database->prepare("SELECT pid FROM tl_article WHERE alias=?")->execute($article);
        $result = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")->execute($articlePID->pid)->fetchAllAssoc();

        return $result;
    }

    public function filterArticles($site){
        $result = $this->Database->prepare("SELECT * FROM tl_article WHERE pid=?")->execute($site)->fetchAllAssoc();
        return $result;
    }
}