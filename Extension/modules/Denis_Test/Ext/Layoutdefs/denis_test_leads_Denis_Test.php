<?php
 // created: 2016-02-03 13:44:39
$layout_defs["Denis_Test"]["subpanel_setup"]['denis_test_leads'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DENIS_TEST_LEADS_FROM_LEADS_TITLE',
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
