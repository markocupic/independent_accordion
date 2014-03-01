<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package IndependentAccordion
 * @author  Marko Cupic <m.cupic@gmx.ch>
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['IndependentAccordionStart'] = '{type_legend},type;{moo_legend},hideOnDomready,mooHeadline,mooStyle,mooClasses;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['IndependentAccordionStop'] = '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['fields']['hideOnDomready'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['hideOnDomready'],
    'exclude'       => true,
    'inputType'     => 'checkbox',
    'eval'          => array('submitOnChange' => false),
    'default'       => true,
    'sql'           => "char(1) NOT NULL default ''"
);