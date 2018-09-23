<?php

// set IE render meta tag
$meta_ie_render_engine = array(
	'#type' => 'html_tag',
	'#tag' => 'meta',
	'#attributes' => array(
	  'http-equiv' => 'X-UA-Compatible',
	  'content' =>  'ie=edge',
	),
	'#weight' => '1',
);
drupal_add_html_head($meta_ie_render_engine, 'meta_ie_render_engine');

// Set meta viewport
$meta_viewport = array(
	'#type' => 'html_tag',
	'#tag' => 'meta',
	'#attributes' => array(
	  'name' => 'viewport',
	  'content' =>  'width=device-width, initial-scale=1',
	),
	'#weight' => '2',
);
drupal_add_html_head($meta_viewport, 'meta_viewport');

// Inlude main CSS
// drupal_add_css(
//   base_path() . path_to_theme() . '/_assets/css/style.min.css',
//   array(
//   'group' => CSS_THEME,
//   'media' => 'screen',
//   'preprocess' => FALSE,
//   'weight' => '1',
//   )
// );

// Inlude Print CSS
// drupal_add_css(
//   base_path() . path_to_theme() . '/_assets/css/print.css',
//   array(
//   'group' => CSS_THEME,
//   'media' => 'print',
//   'preprocess' => FALSE,
//   'weight' => '2',
//   )
// );
//
// // Inlude unslider CSS
// drupal_add_css(
//   base_path() . path_to_theme() . '/_assets/css/unslider.css',
//   array(
//   'group' => CSS_THEME,
//   'media' => 'screen',
//   'preprocess' => FALSE,
//   'weight' => '2',
//   )
// );

// drupal_add_css(
//   base_path() . path_to_theme() . '/_assets/css/unslider-dots.css',
//   array(
//   'group' => CSS_THEME,
//   'media' => 'screen',
//   'preprocess' => FALSE,
//   'weight' => '3',
//   )
// );

// Inlude featherlight CSS
// drupal_add_css(
//   base_path() . path_to_theme() . '/_assets/css/featherlight.min.css',
//   array(
//   'group' => CSS_THEME,
//   'media' => 'screen',
//   'preprocess' => FALSE,
//   'weight' => '4',
//   )
// );

// Inlude featherlight gallery CSS
// drupal_add_css(
//   base_path() . path_to_theme() . '/_assets/css/featherlight.gallery.min.css',
//   array(
//   'group' => CSS_THEME,
//   'media' => 'screen',
//   'preprocess' => FALSE,
//   'weight' => '5',
//   )
// );

// Include extra scripts
$scripts = '
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/svgeezy.min.js"></script>
	<script src="'.base_path() . path_to_theme().'/_assets/js/jRespond.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/featherlight.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/featherlight.gallery.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/unslider-min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/tweetie.min.js"></script>
  <script src="'.base_path() . path_to_theme().'/_assets/js/responsive-tables.js"></script>
	<script src="'.base_path() . path_to_theme().'/_assets/js/script.min.js"></script>
  <script src="https://use.fontawesome.com/6450c1c1ed.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,"script","https://www.google-analytics.com/analytics.js","ga");

    ga("create", "UA-16615299-1", "auto");
    ga("send", "pageview");

  </script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#288be4">
  <meta name="theme-color" content="#ffffff">
';

$extra_scripts = array(
  '#type' => 'markup',
  '#markup' => $scripts,
  '#weight' => '3',
);
drupal_add_html_head($extra_scripts, 'extra_scripts');

// Remove Drupal core CSS
function missionviejo_css_alter(&$css) {
  $theme = drupal_get_path('module','system').'/system.theme.css';
  unset($css[$theme]);

  $menus = drupal_get_path('module','system').'/system.menus.css';
  unset($css[$menus]);

  $messages = drupal_get_path('module','system').'/system.messages.css';
  unset($css[$messages]);
}

function missionviejo_breadcrumb($variables) {
  $breadcrumb = drupal_get_breadcrumb();
  $title = drupal_get_title();
  if (!empty($breadcrumb)) {
    $crumbs = '<ul class="breadcrumbs">';
    foreach ($breadcrumb as $value) {
      $crumbs .= '<li>' . $value . '</li>';
    }
    $crumbs .= '<li>' . $title . '</li>';
    $crumbs .= '</ul>';
  }
  return $crumbs;
}

// Let's us get node fields in page.tpl.php
function missionviejo_preprocess_page(&$variables) {
  if (arg(0) == 'node') {
    $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][arg(1)];
  }
}

//line breaks to <br /> on plain text fields
function missionviejo_preprocess_field(&$vars) {
  if ($vars['element']['#field_type'] == 'text_long') {
    $field_name = $vars['element']['#field_name'];
    foreach ($vars['items'] as $key => &$item) {
      if ($vars['element']['#object']->{$field_name}[LANGUAGE_NONE][$key]['format'] == NULL) {
        $item['#markup'] = nl2br($item['#markup']);
      }
    }
  }
}

//search box changes
function missionviejo_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    //Change submit input to button
    // $form['button'] = array(
    //   '#type' => 'item',
    //   '#markup' => '<button type="submit" id="edit-submit-btn" name="op" class="form-submit"><i class="fa fa-search"></i></button>',
    //   '#weight' => 1000,
    // );
    // HTML5 placeholder attribute
    $form['search_block_form']['#attributes']['placeholder'] = t('I want to...');
  }
  if ($form_id == 'views_exposed_form' && $form['#id'] == 'views-exposed-form-news-page-2') {
     // Set placeholders for known search fields
     $infos = $form['#info'];
     foreach ($infos as $key => $filter) {
       $label = $filter['label'];
       unset($form['#info'][$key]['label']);
       $form[$filter['value']]['#attributes'] = array('placeholder' => array($label));
     }
   }
}

function missionviejo_preprocess_node(&$variables) {
  $node_page = $variables['node'];
  $node_page_field_items = field_get_items('node', $node_page, 'field_image');
  $banner_image = $node_page_field_items[0]['uri'];
  // print_r($node_page_field_items);
  // print $node_page_field_items[0]['metadata']['height'];
  if ($banner_image != '' && $node_page_field_items[0]['filename'] != 'placeholder.png' && $node_page_field_items[0]['metadata']['width'] > 1300) {
    $banner_image = image_style_url('main_banner', $banner_image);
    print '
    <style type="text/css">
      html,
      body {
        background: url('.$banner_image.');
        background-color: #D1D1D1;
        background-position:top;
        background-repeat: no-repeat;
        background-size: 100% auto;
      }
      section {
        margin:300px 0 0 0;
      }
      @media screen and (max-width: 600px) {
        html,
        body {
          background-size: auto 300px;
        }
        section {
          margin: 150px 0 0 0;
        }
      }
    </style>
    ';
  } elseif ($node_page->type == 'events') {
    print '
    <style type="text/css">
      html,
      body {
        background: url(/sites/all/themes/missionviejo/_assets/images/placeholder.png);
        background-color: #D1D1D1;
        background-position:top;
        background-repeat: no-repeat;
        background-size: 100%;
      }
      section {
        margin:300px 0 0 0;
      }
      @media screen and (max-width: 1300px) {
        html,
        body {
          background-size: 180%;
        }
      }
      @media screen and (max-width: 600px) {
        html,
        body {
          background-size: auto 300px;
        }
        section {
          margin: 150px 0 0 0;
        }
      }
    </style>
    ';
  }

  // Get a list of all the regions for this theme
  foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

    // Get the content for each region and add it to the $region variable
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }
}

$result = db_query('SELECT fid FROM {file_managed} WHERE status=0');

foreach($result as $item) {
  // print $item->fid;
  db_update('file_managed')
  ->fields(array(
    'status' => 1
  ))
  ->condition('fid', $item->fid)
  ->execute();

  db_insert('file_usage') // Table name no longer needs {}
  ->fields(array(
    'fid' => $item->fid,
    'module' => 'theme',
    'type' => 'missionviejo',
    'id' => 1,
    'count' => 1

  ))
  ->execute();
}

// db_update('file_managed')
// ->fields(array(
//   'status' => 1
// ))
// ->condition('status', 0)
// ->execute();
