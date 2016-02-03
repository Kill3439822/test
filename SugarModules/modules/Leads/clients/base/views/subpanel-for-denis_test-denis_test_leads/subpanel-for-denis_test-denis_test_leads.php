<?php
// created: 2016-02-03 14:09:46
$viewdefs['Leads']['base']['view']['subpanel-for-denis_test-denis_test_leads'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'full_name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_REFERED_BY',
          'enabled' => true,
          'default' => true,
          'name' => 'refered_by',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
          'name' => 'lead_source',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'name' => 'phone_work',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => true,
          'name' => 'email',
        ),
        5 => 
        array (
          'name' => 'lead_source_description',
          'label' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        6 => 
        array (
          'name' => 'task_textfield_c',
          'label' => 'LBL_TASK_TEXTFIELD',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'task_checkbox_c',
          'label' => 'LBL_TASK_CHECKBOX',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'task_dropdown_c',
          'label' => 'LBL_TASK_DROPDOWN',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);