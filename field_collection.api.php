<?php

/**
 * @file
 * Contains API documentation and examples for the Field collection module.
 */

/**
 * Alter whether a field collection item is considered empty.
 *
 * This hook allows modules to determine whether a field collection is empty
 * before it is saved.
 *
 * @param boolean $empty
 *   Whether or not the field should be considered empty.
 * @param FieldCollectionItemEntity $item
 *   The field collection we are currently operating on.
 */
function hook_field_collection_is_empty_alter(&$is_empty, FieldCollectionItemEntity $item) {
  if (isset($item->my_field) && empty($item->my_field)) {
    $is_empty = TRUE;
  }
}
