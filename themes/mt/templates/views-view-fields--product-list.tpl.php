<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="row">
  <div class="col-sm-2">
    <?php
      if ($fields['field_image']->content) :
        print $fields['field_image']->content;
      endif;
    ?>
  </div>
  <div class="col-sm-7">
    <?php
      if ($fields['title']->content) :
        print $fields['title']->content;
      endif;
      if ($fields['body']->content) :
        print $fields['body']->content;
      endif;
      if ($fields['field_description_extra']->content) :
        print $fields['field_description_extra']->content;
      endif;
    ?>
    <div class="clearfix"></div>
  </div>
  <div class="col-sm-2">
    <?php
      if ($fields['field_certifications']->content) :
        print $fields['field_certifications']->content;
      endif;
    ?>
  </div>
</div>

