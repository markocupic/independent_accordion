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
if (TL_MODE == 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/independent_accordion/assets/independent_accordion.js';
}

$GLOBALS['TL_CTE']['IndependentAccordion'] = array
(
    'IndependentAccordionStart' => 'IndependentAccordionStart',
    'IndependentAccordionStop' => 'IndependentAccordionStop'
);

$GLOBALS['TL_WRAPPERS']['start'][] = 'IndependentAccordionStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'IndependentAccordionStop';

