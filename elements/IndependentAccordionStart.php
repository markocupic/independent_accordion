<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package IndependentAccordion
 * @author Marko Cupic <m.cupic@gmx.ch>
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace MCupic;


/**
 * Class IndependentAccordionStart
 *
 * Front end content element "independent_accordion" (wrapper start).
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Core
 */
class IndependentAccordionStart extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_independent_accordion_start';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
            $this->Template->title = $this->mooHeadline;
        } else {
            $this->strTemplate = 'ce_independent_accordion_start';
            $this->Template = new \FrontendTemplate($this->strTemplate);
            $this->Template->setData($this->arrData);

            $classes = deserialize($this->mooClasses);
            $strClasses = $classes[0] ? : 'indacc_toggler';

            if ($this->hideOnDomready) {
                $this->Template->contentStyle = 'display:none;';
            } else {
                // add class if toggler is active
                $strClasses .= ' indacc_toggler_active';
            }

            $this->Template->toggler = $strClasses;
            $this->Template->accordion = $classes[1] ? : 'independent_accordion';
            $this->Template->headlineStyle = $this->mooStyle;
            $this->Template->headline = $this->mooHeadline;
        }
    }
}