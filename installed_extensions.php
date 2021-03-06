<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 59; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => 'Arabic Egypt 8 digits COA - GAAP',
    'package' => 'chart_ar_EG-GAAP',
    'version' => '2.3.11-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'ar_EG-8digits.sql',
  ),
  1 => 
  array (
    'name' => 'Arabic Egypt 8 digits COA - GAAP',
    'package' => 'chart_ar_EG-english',
    'version' => '2.3.11-1',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'ar_EG-8digists-eng.sql',
  ),
  2 => 
  array (
    'name' => 'Arabic Egypt COA',
    'package' => 'chart_ar_EG-general',
    'version' => '2.3.5-1',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'ar_EG-general.sql',
  ),
  3 => 
  array (
    'name' => 'German Austrian COA - General',
    'package' => 'chart_de_AT-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'de_AT-general.sql',
  ),
  4 => 
  array (
    'name' => 'German Switzerland COA (5 digits accounts)',
    'package' => 'chart_de_CH-5digit',
    'version' => '2.3.0-1',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'de_CH-5digit.sql',
  ),
  5 => 
  array (
    'name' => 'Australian COA for a service company (version 2).',
    'package' => 'chart_en_AU-service',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_AU-service-v2.sql',
  ),
  6 => 
  array (
    'name' => 'English Canadian COA - General',
    'package' => 'chart_en_CA-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_CA-general.sql',
  ),
  7 => 
  array (
    'name' => 'English French coa',
    'package' => 'chart_en_FR-general',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_FR-general.sql',
  ),
  8 => 
  array (
    'name' => 'British COA',
    'package' => 'chart_en_GB-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_GB-general.sql',
  ),
  9 => 
  array (
    'name' => 'English Indian COA - New.',
    'package' => 'chart_en_IN-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_IN-new.sql',
  ),
  10 => 
  array (
    'name' => 'Gen3ral Phillipines chart of accounts.',
    'package' => 'chart_en_PH-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_PH-general.sql',
  ),
  11 => 
  array (
    'name' => 'English Singapore 4 digits COA',
    'package' => 'chart_en_SG-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_SG-new.sql',
  ),
  12 => 
  array (
    'name' => 'General 4 digit COA for new company in US',
    'package' => 'chart_en_US-4digit',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-4digit.sql',
  ),
  13 => 
  array (
    'name' => '5 digit American coa wit educational data',
    'package' => 'chart_en_US-5digit',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-new2.sql',
  ),
  14 => 
  array (
    'name' => '8 digit GAAP compatible American chart of accounts',
    'package' => 'chart_en_US-GAAP',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-GAAP.sql',
  ),
  15 => 
  array (
    'name' => 'Default American coa (5 digits)',
    'package' => 'chart_en_US-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-general.sql',
  ),
  16 => 
  array (
    'name' => 'US COA for a nonprofit company',
    'package' => 'chart_en_US-nonprofit',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-nonprofit.sql',
  ),
  17 => 
  array (
    'name' => 'US chart of accounts for service company.',
    'package' => 'chart_en_US-service',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-service.sql',
  ),
  18 => 
  array (
    'name' => 'English South African 5 digits COA - New',
    'package' => 'chart_en_ZA-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_ZA-new.sql',
  ),
  19 => 
  array (
    'name' => 'Indonesian 4 digit COA',
    'package' => 'chart_id_ID-4digit',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'id_ID-4digit.sql',
  ),
  20 => 
  array (
    'name' => 'Indonesian general 8 digit COA',
    'package' => 'chart_id_ID-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'id_ID-general.sql',
  ),
  21 => 
  array (
    'name' => 'Chinese (simplified) 4 digit COA',
    'package' => 'chart_zh_CN-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'zh_CN-default-utf8.sql',
  ),
  22 => 
  array (
    'name' => 'Chinese (traditional) 4 digit COA',
    'package' => 'chart_zh_HK-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'zh_HK-utf8.sql',
  ),
  23 => 
  array (
    'name' => 'Theme Anterp',
    'package' => 'anterp',
    'version' => '2.3.0-1',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/anterp',
  ),
  24 => 
  array (
    'name' => 'Theme Elegant',
    'package' => 'elegant',
    'version' => '2.3.0-5',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/elegant',
  ),
  25 => 
  array (
    'name' => 'Theme Dynamic',
    'package' => 'dynamic',
    'version' => '2.3.10-1',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/dynamic',
  ),
  26 => 
  array (
    'name' => 'Theme Exclusive',
    'package' => 'exclusive',
    'version' => '2.3.10-1',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/exclusive',
  ),
  27 => 
  array (
    'name' => 'Theme Fancy',
    'package' => 'fancy',
    'version' => '2.3.0-3',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/fancy',
  ),
  28 => 
  array (
    'name' => 'Theme Grayblue',
    'package' => 'grayblue',
    'version' => '2.3.0-4',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/grayblue',
  ),
  29 => 
  array (
    'name' => 'Theme Graylime',
    'package' => 'graylime',
    'version' => '2.3.0-5',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/graylime',
  ),
  30 => 
  array (
    'name' => 'Theme Graypink',
    'package' => 'graypink',
    'version' => '2.3.0-5',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/graypink',
  ),
  31 => 
  array (
    'name' => 'Theme Greyred',
    'package' => 'greyred',
    'version' => '2.3.0-5',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/greyred',
  ),
  32 => 
  array (
    'name' => 'Theme Modern',
    'package' => 'modern',
    'version' => '2.3.0-3',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/modern',
  ),
  33 => 
  array (
    'name' => 'Theme Newwave',
    'package' => 'newwave',
    'version' => '2.3.0-4',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/newwave',
  ),
  34 => 
  array (
    'name' => 'Theme Studio',
    'package' => 'studio',
    'version' => '2.3.0-3',
    'type' => 'theme',
    'active' => true,
    'path' => 'themes/studio',
  ),
  35 => 
  array (
    'name' => 'Asset register',
    'package' => 'asset_register',
    'version' => '2.3.3-9',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/asset_register',
  ),
  37 => 
  array (
    'name' => 'Inventory Items CSV Import',
    'package' => 'import_items',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/import_items',
  ),
  38 => 
  array (
    'name' => 'Import Multiple Journal Entries',
    'package' => 'import_multijournalentries',
    'version' => '2.3.0-4',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/import_multijournalentries',
  ),
  40 => 
  array (
    'name' => 'Annual balance breakdown report',
    'package' => 'rep_annual_balance_breakdown',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_annual_balance_breakdown',
  ),
  41 => 
  array (
    'name' => 'Annual expense breakdown report',
    'package' => 'rep_annual_expense_breakdown',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_annual_expense_breakdown',
  ),
  42 => 
  array (
    'name' => 'zen_import',
    'package' => 'zen_import',
    'version' => '2.3.2-7',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/zen_import',
  ),
  43 => 
  array (
    'name' => 'textcart',
    'package' => 'textcart',
    'version' => '2.3.9-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/textcart',
  ),
  44 => 
  array (
    'name' => 'Requisitions',
    'package' => 'requisitions',
    'version' => '2.3.13-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/requisitions',
  ),
  45 => 
  array (
    'name' => 'Report Generator',
    'package' => 'repgen',
    'version' => '2.3.9-3',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/repgen',
  ),
  46 => 
  array (
    'name' => 'Tax inquiry and detailed report on cash basis',
    'package' => 'rep_tax_cash_basis',
    'version' => '2.3.7-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_tax_cash_basis',
  ),
  47 => 
  array (
    'name' => 'Stock Movement Report',
    'package' => 'rep_stock_movement',
    'version' => '2.3.4-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_stock_movement',
  ),
  48 => 
  array (
    'name' => 'Bank Statement w/ Reconcile',
    'package' => 'rep_statement_reconcile',
    'version' => '2.3.3-2',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_statement_reconcile',
  ),
  49 => 
  array (
    'name' => 'Sales Summary Report',
    'package' => 'rep_sales_summary',
    'version' => '2.3.3-2',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_sales_summary',
  ),
  50 => 
  array (
    'name' => 'Inventory History',
    'package' => 'rep_inventory_history',
    'version' => '2.3.2-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_inventory_history',
  ),
  51 => 
  array (
    'name' => 'Dated Stock Sheep',
    'package' => 'rep_dated_stock',
    'version' => '2.3.3-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_dated_stock',
  ),
  52 => 
  array (
    'name' => 'Check Printing based on Tu Nguyen, Canada',
    'package' => 'rep_cheque_print',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_cheque_print',
  ),
  53 => 
  array (
    'name' => 'Check Printing based on Tom Hallman, USA',
    'package' => 'rep_check_print',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => true,
    'path' => 'modules/rep_check_print',
  ),
  54 => 
  array (
    'name' => 'Australian COA with 4 digits',
    'package' => 'chart_en_AU-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_AU-0000.sql',
  ),
  55 => 
  array (
    'name' => 'Dutch general COA',
    'package' => 'chart_nl_NL-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'nl_NL-default.sql',
  ),
  56 => 
  array (
    'name' => '5 digit American coa wit educational data',
    'package' => 'chart_en_US-demo2',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'en_US-demo2.sql',
  ),
  57 => 
  array (
    'name' => 'German general COA',
    'package' => 'chart_de_DE-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'de_DE-general.sql',
  ),
  58 => 
  array (
    'name' => 'German Switzerland COA',
    'package' => 'chart_de_CH-general',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => true,
    'path' => 'sql',
    'sql' => 'de_CH-general.sql',
  ),
);
?>