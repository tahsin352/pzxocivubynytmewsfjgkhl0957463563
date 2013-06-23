<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TahsinsGarage_AwesomeCloud_Block_Popular extends Mage_Tag_Block_Popular {

    protected function _prepareLayout() {
        $this->getLayout()->getBlock('head')->addJs('awesomecloud/jquery.awesomeCloud-0.2.js');

        return parent::_prepareLayout();
    }

}
