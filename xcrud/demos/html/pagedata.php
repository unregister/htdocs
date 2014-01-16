<?php
$version = 'v1.6.5';
$pagedata = array(
    'default' => array(
        'title_1' => 'Simple usage',
        'description' => 'This is a simpliest example',
        'filename' => 'simple.php'),
    'base_field_types' => array(
        'title_1' => 'Base field types',
        'description' => 'Basic field types support. Xcrud tries to define type automatically from database, or you can set it manualy',
        'filename' => 'base_field_types.php'),
    'uploads' => array(
        'title_1' => 'Uploads demo',
        'description' => 'Demo of file and images uploading',
        'filename' => 'uploads.php'),
    'cke_and_custom' => array(
        'title_1' => 'CKEditor and custom',
        'description' => 'CKEditor loading and custom field types',
        'filename' => 'cke_and_custom.php'),
    'validation' => array(
        'title_1' => 'Simple validation',
        'description' => 'This is only client-side simple javascript validation. You can use default presets or create your own RegExp',
        'filename' => 'validation.php'),
    'relations' => array(
        'title_1' => 'Simple relation',
        'description' => 'You can get options list from other table',
        'filename' => 'relations.php'),
    'multi_instance' => array(
        'title_1' => 'Multiple instances',
        'description' => 'Unlimited number of instances per page',
        'filename' => 'multi_instance.php'),
    'comments_like' => array(
        'title_1' => 'Coments like template',
        'description' => 'This trick allows you use add and grid view per one page',
        'filename' => 'comments_like.php'),
    'all_disabled' => array(
        'title_1' => 'All disabled',
        'description' => 'Lets disable some features',
        'filename' => 'all_disabled.php'),
    'nested' => array(
        'title_1' => 'Nested tables',
        'description' => 'Example of table nesting',
        'filename' => 'nested.php'),
    'dependent_dropdowns' => array(
        'title_1' => 'Dependent dropdowns',
        'description' => '',
        'filename' => 'dependent_dropdowns.php'),
    'date_range' => array(
        'title_1' => 'Date range',
        'description' => '',
        'filename' => 'date_range.php'),
    'gallery' => array(
        'title_1' => 'Gallery',
        'description' => '',
        'filename' => 'gallery.php'),
    'million' => array(
        'title_1' => 'One million rows',
        'description' => 'Demo with very large tables. Don\'t forget, that in large tables your columns must be indexed to give you maximum speed',
        'filename' => 'million.php'),
    'buttons_move' => array(
        'title_1' => 'Buttons panel',
        'description' => 'Move bottons panel in left/right side or disable it. <strong>Note:</strong> This will not disable button actions',
        'filename' => 'buttons_move.php'),
    'join' => array(
        'title_1' => 'Join other table',
        'description' => 'Allows you to join other tables. Only INNER JOIN supported. Keys in all joined tables must exist and be unique',
        'filename' => 'join.php'),
    'subselect' => array(
        'title_1' => 'Subselect and sum row',
        'description' => 'Subselect() will create a new column with some value from other (or current) table. You can use any columns from current tables as parameters. Subselect will be called for each row',
        'filename' => 'subselect_and_sum.php'),
    'columns_and_fields' => array(
        'title_1' => 'Columns and fields',
        'description' => 'Select only needed columns and fields',
        'filename' => 'columns_and_fields.php'),
    'tabs' => array(
        'title_1' => 'Tabs',
        'description' => 'Tabs can be created in details view with fields() method',
        'filename' => 'tabs.php'),
    'width_and_cut' => array(
        'title_1' => 'Column width/cut',
        'description' => 'You can set width for any column(s) in a grid.',
        'filename' => 'width_and_cut.php'),
    'modal_and_buttons' => array(
        'title_1' => 'Modal and buttons',
        'description' => 'Modal() can show full value of separate cell in modal window. Additional buttons can be added in buttons columns. Button() method supports {field_tags}',
        'filename' => 'modal_and_buttons.php'),
    'labels_classes' => array(
        'title_1' => 'Labels and classes',
        'description' => 'Label() method will change all field names in all screens, column_name() - only grid headers.',
        'filename' => 'labels_and_classes.php'),
    'name_and_tooltips' => array(
        'title_1' => 'Tooltips',
        'description' => 'Any tooltips. Table name.',
        'filename' => 'name_and_tooltips.php'),
    'highlights' => array(
        'title_1' => 'Highlights',
        'description' => 'Highlight separate cells and full rows.',
        'filename' => 'highlights.php'),
    'grid_tricks' => array(
        'title_1' => 'Grid tricks',
        'description' => 'Clickable column - very simple',
        'filename' => 'grid_tricks.php'),
    'js_tricks' => array(
        'title_1' => 'JS tricks',
        'description' => 'Some js functions example',
        'filename' => 'js_tricks.php'),
    'action' => array(
        'title_1' => 'Ajax action',
        'description' => 'You can extend your buttons and links to be usable with xcrud\'s ajax interface. Your buttons can call functins, defined in your externall file. You must create action callback and add attributes to target element (button or something else)',
        'filename' => 'action.php'),
    );
?>