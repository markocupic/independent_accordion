<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package independent_accordion
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

ClassLoader::addNamespaces(array
(
    'MCupic',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'MCupic\IndependentAccordionStart' => 'system/modules/independent_accordion/elements/IndependentAccordionStart.php',
	'MCupic\IndependentAccordionStop'  => 'system/modules/independent_accordion/elements/IndependentAccordionStop.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_independent_accordion_start' => 'system/modules/independent_accordion/templates',
	'ce_independent_accordion_stop'  => 'system/modules/independent_accordion/templates',
));
