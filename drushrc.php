<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'vxKfSisJYX';
$options['db_name'] = 'mtspainnet';
$options['db_user'] = 'mtspainnet';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.50',
      'description' => 'This platform is running Drupal 7.50',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => './profiles/standard/standard.profile',
      'info' => 
      array (
        'name' => 'Vanilla Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.50',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'block' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'blog' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'book' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'color' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'comment' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'contact' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'contextual' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'dashboard' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.50',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'dblog' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'field' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'list' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'number' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'options' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'text' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'field_ui' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'file' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'filter' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'forum' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'help' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'image' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'locale' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'menu' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'node' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7016',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'openid' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.50',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'overlay' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'admin' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/admin/admin.module',
      'name' => 'admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Admin',
        'description' => 'UI helpers for Drupal admins and managers.',
        'package' => 'Administration',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'admin.admin.inc',
          1 => 'admin.install',
          2 => 'admin.module',
          3 => 'includes/admin.devel.inc',
          4 => 'includes/admin.theme.inc',
          5 => 'theme/admin-panes.tpl.php',
          6 => 'theme/admin-toolbar.tpl.php',
          7 => 'theme/theme.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'admin',
        'datestamp' => '1292541646',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta3',
    ),
    'adminer' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/adminer/adminer.module',
      'name' => 'adminer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Adminer',
        'description' => 'Provides database management using <a href="http://www.adminer.org/" target="_blank">Adminer</a>.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/adminer/settings',
        'version' => '7.x-1.1+1-dev',
        'project' => 'adminer',
        'datestamp' => '1457396942',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1+1-dev',
    ),
    'advagg' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg.module',
      'name' => 'advagg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced CSS/JS Aggregation',
        'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/advagg.test',
        ),
        'configure' => 'admin/config/development/performance/advagg',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_bundler' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_bundler/advagg_bundler.module',
      'name' => 'advagg_bundler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Bundler',
        'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/bundler',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_css_cdn' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_css_cdn/advagg_css_cdn.module',
      'name' => 'advagg_css_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN CSS',
        'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_css_compress' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_css_compress/advagg_css_compress.module',
      'name' => 'advagg_css_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress CSS',
        'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/css-compress',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_ext_compress' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_ext_compress/advagg_ext_compress.module',
      'name' => 'advagg_ext_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg External Compression',
        'description' => 'Compress Javascript and/or CSS with a command line compressor.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/ext-compress',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_font' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_font/advagg_font.module',
      'name' => 'advagg_font',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Async Font Loader',
        'description' => 'Allows one to load fonts in an async manner',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'package' => 'Advanced CSS/JS Aggregation',
        'configure' => 'admin/config/development/performance/advagg/font',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_js_cdn' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_js_cdn/advagg_js_cdn.module',
      'name' => 'advagg_js_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN Javascript',
        'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_js_compress' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_js_compress/advagg_js_compress.module',
      'name' => 'advagg_js_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress Javascript',
        'description' => 'Compress Javascript with a 3rd party compressor; JSMin+, JSMin c ext, JShrink, and JSqueeze currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/js-compress',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_mod' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_mod/advagg_mod.module',
      'name' => 'advagg_mod',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Modifier',
        'description' => 'Allows one to alter the CSS and JS array.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/mod',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_sri' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_sri/advagg_sri.module',
      'name' => 'advagg_sri',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Subresource Integrity',
        'description' => 'Provide the integrity attribute for CSS and JS files.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'package' => 'Advanced CSS/JS Aggregation',
        'configure' => 'admin/config/development/performance/advagg/sri',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'advagg_validator' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/advagg/advagg_validator/advagg_validator.module',
      'name' => 'advagg_validator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CSS/JS Validator',
        'description' => 'Validate the CSS and JS files used in Aggregation for syntax errors.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'configure' => 'admin/config/development/performance/advagg/validator',
        'version' => '7.x-2.18',
        'project' => 'advagg',
        'datestamp' => '1459291143',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.18',
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/blockcache_alter/blockcache_alter.module',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Cache Alter',
        'description' => 'Alter the cache settings per block.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/performance/blockcache_alter',
        'version' => '7.x-1.1',
        'project' => 'blockcache_alter',
        'datestamp' => '1468132169',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'boost' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/boost/boost.module',
      'name' => 'boost',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost',
        'description' => 'Caches generated output as a static file to be served directly from the webserver.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost.module',
          1 => 'boost.admin.inc',
          2 => 'boost.blocks.inc',
        ),
        'recommends' => 
        array (
          0 => 'expire',
        ),
        'configure' => 'admin/config/system/boost',
        'version' => '7.x-1.1',
        'project' => 'boost',
        'datestamp' => '1460572443',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'boost_crawler' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/boost/boost_crawler/boost_crawler.module',
      'name' => 'boost_crawler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost Crawler',
        'description' => 'Minimal crawler to regenerate the cache as pages are expired.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost_crawler.module',
        ),
        'recommends' => 
        array (
          0 => 'boost',
        ),
        'dependencies' => 
        array (
          0 => 'httprl',
          1 => 'expire',
        ),
        'configure' => 'admin/config/system/boost/crawler',
        'version' => '7.x-1.1',
        'project' => 'boost',
        'datestamp' => '1460572443',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'cdn' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/cdn/cdn.module',
      'name' => 'cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CDN',
        'description' => 'Integrates your site with a CDN, through altering file URLs.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/cdn',
        'files' => 
        array (
          0 => 'tests/cdn.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'cdn',
        'datestamp' => '1461066544',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'config_perms' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/config_perms/config_perms.module',
      'name' => 'config_perms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Permissions',
        'description' => 'Allows additional permissions to be created and managed through an administration form.
<br /><small>Machine name: config_perms</small>',
        'core' => '7.x',
        'package' => 'Permissions',
        'configure' => 'admin/people/custom_permissions',
        'version' => '7.x-2.1',
        'project' => 'config_perms',
        'datestamp' => '1434074882',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'css_emimage' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/css_emimage/css_emimage.module',
      'name' => 'css_emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS Embedded Images',
        'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-1.3+3-dev',
        'project' => 'css_emimage',
        'datestamp' => '1380568223',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3+3-dev',
    ),
    'display_cache' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/display_cache/display_cache.module',
      'name' => 'display_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display Cache',
        'description' => 'Provides views and panels plugins to display rendered entities from cache.',
        'package' => 'Performance',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'tests/display_cache.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'display_cache',
        'datestamp' => '1435913350',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'entitycache' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/entitycache/entitycache.module',
      'name' => 'entitycache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache',
        'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'includes/entitycache.entitycachecontrollerhelper.inc',
          1 => 'includes/entitycache.comment.inc',
          2 => 'includes/entitycache.defaultentitycontroller.inc',
          3 => 'includes/entitycache.node.inc',
          4 => 'includes/entitycache.taxonomy.inc',
          5 => 'includes/entitycache.user.inc',
          6 => 'entitycache.test',
        ),
        'dependencies' => 
        array (
          0 => 'system (>=7.36)',
        ),
        'version' => '7.x-1.5',
        'project' => 'entitycache',
        'datestamp' => '1445943840',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'esi' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/esi/esi.module',
      'name' => 'esi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Edge Side Includes',
        'description' => 'Allow Drupal components to be delivered via ESI (Edge-Side Includes).  Requires an ESI-capable proxy.',
        'package' => 'Caching',
        'recommends' => 
        array (
          0 => 'varnish',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-alpha1+21-dev',
        'project' => 'esi',
        'datestamp' => '1446759851',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha1+21-dev',
    ),
    'esi_block' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/esi/modules/esi_block/esi_block.module',
      'name' => 'esi_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Block',
        'description' => 'Deliver Drupal blocks via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'esi',
        ),
        'files' => 
        array (
          0 => 'esi_block.test',
        ),
        'version' => '7.x-3.0-alpha1+21-dev',
        'project' => 'esi',
        'datestamp' => '1446759851',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha1+21-dev',
    ),
    'esi_context' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/esi/modules/esi_context/esi_context.module',
      'name' => 'esi_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Context integration',
        'description' => 'Deliver context-controlled blocks via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'esi',
          2 => 'esi_block',
        ),
        'version' => '7.x-3.0-alpha1+21-dev',
        'project' => 'esi',
        'datestamp' => '1446759851',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha1+21-dev',
    ),
    'esi_panels' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/esi/modules/esi_panels/esi_panels.module',
      'name' => 'esi_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ESI - Panels',
        'description' => 'Deliver panel-panes via ESI.',
        'core' => '7.x',
        'package' => 'Caching',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'page_manager',
          2 => 'esi',
        ),
        'version' => '7.x-3.0-alpha1+21-dev',
        'project' => 'esi',
        'datestamp' => '1446759851',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha1+21-dev',
    ),
    'expire' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/expire/expire.module',
      'name' => 'expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cache Expiration',
        'description' => 'Logic for expiring cached pages.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'configure' => 'admin/config/system/expire',
        'files' => 
        array (
          0 => 'includes/expire.api.inc',
          1 => 'includes/expire.comment.inc',
          2 => 'includes/expire.domain.inc',
          3 => 'includes/expire.interface.inc',
          4 => 'includes/expire.menu_link.inc',
          5 => 'includes/expire.node.inc',
          6 => 'includes/expire.user.inc',
          7 => 'includes/expire.votingapi.inc',
          8 => 'includes/expire.file.inc',
        ),
        'version' => '7.x-2.0-rc4',
        'project' => 'expire',
        'datestamp' => '1414746830',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-rc4',
    ),
    'filefield_nginx_progress' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress.module',
      'name' => 'filefield_nginx_progress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Nginx Progress',
        'description' => 'Adds upload progress functionality for Nginx',
        'files' => 
        array (
          0 => 'filefield_nginx_progress.install',
          1 => 'filefield_nginx_progress.module',
        ),
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.3+1-dev',
        'project' => 'filefield_nginx_progress',
        'datestamp' => '1380579093',
      ),
      'version' => '7.x-2.3+1-dev',
    ),
    'flood_control' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/flood_control/flood_control.module',
      'name' => 'flood_control',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flood control',
        'description' => 'Interface for hidden flood control options.',
        'core' => '7.x',
        'configure' => 'admin/config/system/flood-control',
        'version' => '7.x-1.x-dev',
        'project' => 'flood_control',
        'datestamp' => '1380579747',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'force_password_change' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/force_password_change/force_password_change.module',
      'name' => 'force_password_change',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Force Password Change',
        'description' => 'Allows administrators to force users to change their password',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'force_password_change.install',
          1 => 'force_password_change.module',
          2 => 'force_password_change.pages.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'force_password_change',
        'datestamp' => '1449157452',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'fpa' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/fpa/fpa.module',
      'name' => 'fpa',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fast Permissions Administration',
        'description' => 'Fast filtering on permissions administration form.',
        'core' => '7.x',
        'package' => 'Administration',
        'version' => '7.x-2.6',
        'project' => 'fpa',
        'datestamp' => '1408744435',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.6',
    ),
    'httprl' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/httprl/httprl.module',
      'name' => 'httprl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTTP Parallel Request Library',
        'description' => 'Send http requests out in parallel in a blocking or non-blocking manner.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'version' => '7.x-1.14',
        'project' => 'httprl',
        'datestamp' => '1388542110',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'js' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/js/js.module',
      'name' => 'js',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JavaScript callback handler',
        'description' => 'A high-performance JavaScript callback handler for 3rd party modules.',
        'package' => 'Performance',
        'core' => '7.x',
        'configure' => 'admin/config/system/js',
        'version' => '7.x-1.0+5-dev',
        'project' => 'js',
        'datestamp' => '1394174606',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0+5-dev',
    ),
    'js_test' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/js/tests/js_test.module',
      'name' => 'js_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JavaScript callback handler tests',
        'description' => 'Tests for the JS module.',
        'package' => 'Performance',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'js_test.test',
        ),
        'version' => '7.x-1.0+5-dev',
        'project' => 'js',
        'datestamp' => '1394174606',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0+5-dev',
    ),
    'login_security' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/login_security/login_security.module',
      'name' => 'login_security',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Login Security',
        'description' => 'Enable security options in the login flow of the site.',
        'files' => 
        array (
          0 => 'login_security.test',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/login_security',
        'version' => '7.x-1.9',
        'project' => 'login_security',
        'datestamp' => '1392987818',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'nocurrent_pass' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/nocurrent_pass/nocurrent_pass.module',
      'name' => 'nocurrent_pass',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'No Current Password',
        'description' => 'Make the "current password" requirement on the user edit form optional.',
        'package' => 'Other',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'nocurrent_pass',
        'datestamp' => '1328692247',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'panels_content_cache' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/panels_content_cache/panels_content_cache.module',
      'name' => 'panels_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels Content Cache',
        'core' => '7.x',
        'package' => 'Panels',
        'description' => 'A content based caching plugin for panels. Allows panel caches to be expired based on content creation / updates.',
        'dependencies' => 
        array (
          0 => 'panels (>=3.4)',
        ),
        'version' => '7.x-1.4',
        'project' => 'panels_content_cache',
        'datestamp' => '1463147953',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'print' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print.module',
      'name' => 'print',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages',
        'description' => 'Generates a printer-friendly version of Drupal pages.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'files' => 
        array (
          0 => 'print_join_page_counter.inc',
        ),
        'dependencies' => 
        array (
          0 => 'node',
        ),
        'configure' => 'admin/config/user-interface/print',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_epub_phpepub' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_epub/lib_handlers/print_epub_phpepub/print_epub_phpepub.module',
      'name' => 'print_epub_phpepub',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHPePub library handler',
        'description' => 'EPUB generation library using PHPePub.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_epub',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_epub' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_epub/print_epub.module',
      'name' => 'print_epub',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'EPUB version',
        'description' => 'Adds the capability to export pages as EPUB. Requires an EPUB library and the respective handler module.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/epub',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_mail' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_mail/print_mail.module',
      'name' => 'print_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Send by email',
        'description' => 'Provides the capability to send the web page by email',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/email',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_pdf_dompdf' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_dompdf/print_pdf_dompdf.module',
      'name' => 'print_pdf_dompdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'dompdf library handler',
        'description' => 'PDF generation library using dompdf.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/dompdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_pdf_mpdf' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_mpdf/print_pdf_mpdf.module',
      'name' => 'print_pdf_mpdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'mPDF library handler',
        'description' => 'PDF generation library using mPDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_pdf_tcpdf' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_tcpdf/print_pdf_tcpdf.module',
      'name' => 'print_pdf_tcpdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TCPDF library handler',
        'description' => 'PDF generation library using TCPDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'files' => 
        array (
          0 => 'print_pdf_tcpdf.class.inc',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/tcpdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_pdf_wkhtmltopdf' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_wkhtmltopdf/print_pdf_wkhtmltopdf.module',
      'name' => 'print_pdf_wkhtmltopdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'wkhtmltopdf library handler',
        'description' => 'PDF generation library using wkhtmltopdf.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print_pdf',
        ),
        'configure' => 'admin/config/user-interface/print/pdf/wkhtmltopdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_pdf' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_pdf/print_pdf.module',
      'name' => 'print_pdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PDF version',
        'description' => 'Adds the capability to export pages as PDF. Requires a PDF library and the respective handler module.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/pdf',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'print_ui' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/print/print_ui/print_ui.module',
      'name' => 'print_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages UI',
        'description' => 'Manages the printer-friendly versions link display conditions. Without this module, those links are not displayed.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'configure' => 'admin/config/user-interface/print/ui',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'purge' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/purge/purge.module',
      'name' => 'purge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Purge',
        'description' => 'Purge clears urls from reverse proxy caches like Varnish and Squid by issuing HTTP PURGE requests.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files ' => 
        array (
          0 => 'purge.module',
          1 => 'purge.inc',
        ),
        'configure' => 'admin/config/development/performance/purge',
        'version' => '7.x-1.7',
        'project' => 'purge',
        'datestamp' => '1430234654',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'readonlymode' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/readonlymode/readonlymode.module',
      'name' => 'readonlymode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Read Only Mode',
        'description' => 'This module will lock your site for any form postings.',
        'core' => '7.x',
        'package' => 'Administration',
        'configure' => 'admin/config/development/maintenance',
        'files' => 
        array (
          0 => 'readonlymode.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'readonlymode',
        'datestamp' => '1402574630',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'reroute_email' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/reroute_email/reroute_email.module',
      'name' => 'reroute_email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reroute emails',
        'description' => 'Reroutes emails send from the site to a predefined email. Useful for test sites.',
        'package' => 'Development',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'reroute_email.test',
        ),
        'configure' => 'admin/config/development/reroute_email',
        'version' => '7.x-1.2',
        'project' => 'reroute_email',
        'datestamp' => '1414831432',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'robotstxt' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/robotstxt/robotstxt.module',
      'name' => 'robotstxt',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'robots.txt',
        'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'robotstxt.module',
          1 => 'robotstxt.admin.inc',
          2 => 'robotstxt.install',
        ),
        'configure' => 'admin/config/search/robotstxt',
        'version' => '7.x-1.3',
        'project' => 'robotstxt',
        'datestamp' => '1419385385',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'securesite' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/securesite/securesite.module',
      'name' => 'securesite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Secure Site',
        'description' => 'Enables HTTP Auth security or an HTML form to restrict site access.',
        'core' => '7.x',
        'configure' => 'admin/config/system/securesite',
        'files' => 
        array (
          0 => 'securesite.test',
          1 => 'securesite.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'securesite',
        'datestamp' => '1428145089',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta3',
    ),
    'session_expire' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/session_expire/session_expire.module',
      'name' => 'session_expire',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session Expire',
        'description' => 'Expires rows from the session table older than a certain time.',
        'core' => '7.x',
        'configure' => 'admin/config/system/session_expire',
        'files' => 
        array (
          0 => 'session_expire.module',
        ),
        'version' => '7.x-1.0-alpha1+7-dev',
        'project' => 'session_expire',
        'datestamp' => '1417209266',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1+7-dev',
    ),
    'site_verify' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/site_verify/site_verify.module',
      'name' => 'site_verify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Verification',
        'description' => 'Verifies ownership of a site for use with search engines.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_verify.module',
          1 => 'site_verify.admin.inc',
          2 => 'site_verify.install',
          3 => 'site_verify.test',
        ),
        'configure' => 'admin/config/search/verifications',
        'version' => '7.x-1.1',
        'project' => 'site_verify',
        'datestamp' => '1395656959',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'speedy' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/speedy/speedy.module',
      'name' => 'speedy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Speedy',
        'description' => 'Tools to improve the front end performance of your site.',
        'core' => '7.x',
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-1.25',
        'project' => 'speedy',
        'datestamp' => '1468877646',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'taxonomy_edge' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/taxonomy_edge/taxonomy_edge.module',
      'name' => 'taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Edge',
        'description' => 'Edge lists for taxonomies',
        'package' => 'Taxonomy',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'configure' => 'admin/structure/taxonomy/edge',
        'files' => 
        array (
          0 => 'tests/tree.test',
          1 => 'tests/unit.test',
        ),
        'version' => '7.x-1.9',
        'project' => 'taxonomy_edge',
        'datestamp' => '1409109835',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'views_taxonomy_edge' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/taxonomy_edge/views_taxonomy_edge/views_taxonomy_edge.module',
      'name' => 'views_taxonomy_edge',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Taxonomy Edge',
        'description' => 'Views for taxonomies using Taxonomy Edge',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy_edge',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_argument_term_edge_node_tid_depth.inc',
          1 => 'handlers/views_handler_argument_term_edge_node_tid_depth_modifier.inc',
          2 => 'handlers/views_handler_filter_term_edge_node_tid_depth.inc',
          3 => 'handlers/views_join_term_edge.inc',
          4 => 'handlers/views_handler_sort_term_edge_hierarchy.inc',
        ),
        'version' => '7.x-1.9',
        'project' => 'taxonomy_edge',
        'datestamp' => '1409109835',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'textile' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/textile/textile.module',
      'name' => 'textile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Textile',
        'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
        'package' => 'Input filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'vars (> 1.0)',
        ),
        'version' => '7.x-2.0-rc11',
        'project' => 'textile',
        'datestamp' => '1319231138',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-rc11',
    ),
    'variable_clean' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/variable_clean/variable_clean.module',
      'name' => 'variable_clean',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable Cleanup',
        'description' => 'Allows you to remove variables not currently used.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_clean.module',
          1 => 'variable_clean.test',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'variable_clean',
        'datestamp' => '1382151358',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'vars' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/vars/vars.module',
      'name' => 'vars',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable API',
        'description' => 'Implements an API to handle persistent variables.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'vars.classes.inc',
          1 => 'tests/vars.test',
        ),
        'version' => '7.x-2.0-alpha10',
        'project' => 'vars',
        'datestamp' => '1318969538',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha10',
    ),
    'views404' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/views404/views404.module',
      'name' => 'views404',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views 404',
        'description' => 'Return 404 if the path doesn\'t match the view path.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'views404',
        'datestamp' => '1418590460',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta1',
    ),
    'views_accelerator' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/views_accelerator/views_accelerator.module',
      'name' => 'views_accelerator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Accelerator',
        'description' => 'Performance booster for views that are receptive to render optimisations.',
        'core' => '7.x',
        'configure' => 'admin/config/system/views-accelerator',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_cache_none_accelerated.inc',
          1 => 'views/plugins/views_plugin_cache_none_debug.inc',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'views_accelerator',
        'datestamp' => '1415076828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta1',
    ),
    'views_cache_bully' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/views_cache_bully/views_cache_bully.module',
      'name' => 'views_cache_bully',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Cache Bully',
        'description' => 'Forcibily cache all views, come hell or high water.',
        'core' => '7.x',
        'package' => 'views',
        'files' => 
        array (
          0 => 'views_cache_bully.views.inc',
        ),
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_cache_bully',
        'datestamp' => '1389886710',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'views_content_cache' => 
    array (
      'filename' => '/data/all/032/o_contrib_seven/views_content_cache/views_content_cache.module',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Content Cache',
        'description' => 'Provides a views cache plugin based on content type changes.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'plugins/views_content_cache/base.inc',
          1 => 'plugins/views_content_cache/comment.inc',
          2 => 'plugins/views_content_cache/node.inc',
          3 => 'plugins/views_content_cache/node_only.inc',
          4 => 'plugins/views_content_cache/og.inc',
          5 => 'plugins/views_content_cache/votingapi.inc',
          6 => 'views/views_content_cache_plugin_cache.inc',
          7 => 'tests/views_content_cache.test',
        ),
        'version' => '7.x-3.0-alpha3',
        'project' => 'views_content_cache',
        'datestamp' => '1383658110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha3',
    ),
    'path' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'php' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'poll' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'rdf' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'search' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'shortcut' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'simpletest' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'statistics' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'syslog' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'system' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7080',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'toolbar' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.50',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'tracker' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'translation' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'trigger' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'update' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.50',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'user' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7019',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'garland' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'rubik' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/themes/rubik/rubik.info',
      'name' => 'rubik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rubik',
        'description' => 'Clean admin theme.',
        'base theme' => 'tao',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'scripts' => 
        array (
          0 => 'js/rubik.js',
        ),
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/core.css',
            1 => 'css/icons.css',
            2 => 'css/style.css',
            3 => 'css/jquery.ui.theme.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'rubik_inline_field_descriptions' => '0',
          'rubik_disable_sidebar_in_form' => '0',
          'rubik_sidebar_field_ui' => '0',
          'rubik_show_branding' => '1',
        ),
        'features' => 
        array (
          0 => 'secondary_menu',
        ),
        'version' => '7.x-4.4',
        'project' => 'rubik',
        'datestamp' => '1457209443',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.4',
    ),
    'seven' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'stark' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.50',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.50',
    ),
    'tao' => 
    array (
      'filename' => '/data/all/000/core/drupal-7.50.1/themes/tao/tao.info',
      'name' => 'tao',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'description' => 'Tao is a base theme that is all about going with the flow. It takes care of key reset and utility tasks so that sub-themes can get on with their job.',
        'name' => 'Tao',
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Content',
          'header' => 'Header',
          'help' => 'Help',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'reset.css',
            1 => 'base.css',
          ),
          'screen' => 
          array (
            0 => 'drupal.css',
          ),
          'ie' => 
          array (
            'lte IE 7' => 'ie.css',
          ),
        ),
        'version' => '7.x-3.1',
        'project' => 'tao',
        'datestamp' => '1395127156',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
  ),
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
