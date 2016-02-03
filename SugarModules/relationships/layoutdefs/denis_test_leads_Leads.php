<?php
 // created: 2016-02-03 14:37:04
$layout_defs["Leads"]["subpanel_setup"]['denis_test_leads'] = array (
  'order' => 100,
  'module' => 'Denis_Test',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DENIS_TEST_LEADS_FROM_DENIS_TEST_TITLE',
  'get_subpanel_data' => 'denis_test_leads',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);
