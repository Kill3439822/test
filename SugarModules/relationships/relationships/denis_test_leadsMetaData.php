<?php
// created: 2016-02-03 14:37:04
$dictionary["denis_test_leads"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'denis_test_leads' => 
    array (
      'lhs_module' => 'Denis_Test',
      'lhs_table' => 'denis_test',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'denis_test_leads_c',
      'join_key_lhs' => 'denis_test_leadsdenis_test_ida',
      'join_key_rhs' => 'denis_test_leadsleads_idb',
    ),
  ),
  'table' => 'denis_test_leads_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'denis_test_leadsdenis_test_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'denis_test_leadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'denis_test_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'denis_test_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'denis_test_leadsdenis_test_ida',
        1 => 'denis_test_leadsleads_idb',
      ),
    ),
  ),
);