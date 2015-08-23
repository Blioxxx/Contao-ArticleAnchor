<?php

namespace Blixxx;

use Blixxx\Anchor\db;
use Blixxx\Anchor\general;

class article_anchor extends \BackendModule
{

    protected $strTemplate = 'be_article_anchor';

    protected function compile()
    {
        #Define Header
        $this->Template->referer   = $this->getReferer(ENCODE_AMPERSANDS);
        $this->Template->backTitle = specialchars($GLOBALS['TL_LANG']['article_anchor']['backButton']);
        $this->Template->headline  = sprintf($GLOBALS['TL_LANG']['article_anchor']['backT']);

        #Register Modules
        $general = new general();
        $database = new db();

        #MAIN
        $GETmode = $_GET['mode'];
        $general->switchMode($GETmode);

        $arrArticle = $database->getAllArticle();
        $arrPages = $database->getAllPages();

        $this->Template->arrArticle = $arrArticle;
        $this->Template->arrPages = $arrPages;

        //Debug
        #print_r($arrArticle);
    }
}