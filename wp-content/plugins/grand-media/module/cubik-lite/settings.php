<?php
$default_options = array('maxSize'               => '400',
                         'thumbCols'             => '4',
                         'facePadding'           => '20',
                         'faceMargin'            => '20',
                         'lightboxControlsColor' => 'ffffff',
                         'lightboxTitleColor'    => 'f3f3f3',
                         'lightboxTextColor'     => 'f3f3f3',
                         'lightboxBGColor'       => '0b0b0b',
                         'lightboxBGAlpha'       => '80',
                         'sidebarBGColor'        => 'ffffff',
                         'socialShareEnabled'    => '1',
                         'share_post_link'       => '1',
                         'deepLinks'             => '1',
                         'lightbox800HideArrows' => '0',
                         'commentsEnabled'       => '1',
                         'thumb2link'            => '0',
                         'show_title'            => '1',
                         'show_tags'             => '1',
                         'show_categories'       => '1',
                         'show_albums'           => '1',
                         'customCSS'             => ''
);
$options_tree    = array(array('label'  => 'Common Settings',
                               'fields' => array('maxSize'    => array('label' => 'Max Size of the Cube Side',
                                                                       'tag'   => 'input',
                                                                       'attr'  => 'type="number" min="0"',
                                                                       'text'  => 'Set the maximum size (width x height) of the gallery. Leave 0 to disable max size (not recommended).'
                               ),
                                                 'thumb2link' => array('label' => 'Thumbnail to Link',
                                                                       'tag'   => 'checkbox',
                                                                       'attr'  => '',
                                                                       'text'  => 'If item have Link, then open Link instead of lightbox. Note: Link also will be available via item Title on the thumbnail\'s label and in the lightbox'
                                                 ),

                               )
                         ),
                         array('label'  => 'Thumb Grid General',
                               'fields' => array('thumbCols'   => array('label' => 'Thumbnail Columns',
                                                                        'tag'   => 'input',
                                                                        'attr'  => 'type="number" min="1" max="4"',
                                                                        'text'  => 'Number of Columns on one cube side (minimum 1, maximum 4) Set the number of columns for the side.'
                               ),
                                                 'facePadding' => array('label' => 'Grid Padding',
                                                                        'tag'   => 'input',
                                                                        'attr'  => 'type="number" min="0"',
                                                                        'text'  => 'Set the vertical padding for the thumbnails grid'
                                                 ),
                                                 'faceMargin'  => array('label' => 'Grid Margin',
                                                                        'tag'   => 'input',
                                                                        'attr'  => 'type="number" min="0"',
                                                                        'text'  => 'Set the horizontal padding for the thumbnails grid'
                                                 )
                               )
                         ),
                         array('label'  => 'Lightbox Settings',
                               'fields' => array('lightboxControlsColor' => array('label' => 'Lightbox Controls / Buttons Color',
                                                                                  'tag'   => 'input',
                                                                                  'attr'  => 'type="text" data-type="color"',
                                                                                  'text'  => 'Set the color for lightbox control buttons'
                               ),
                                                 'lightboxTitleColor'    => array('label' => 'Lightbox Image Title Color',
                                                                                  'tag'   => 'input',
                                                                                  'attr'  => 'type="text" data-type="color"',
                                                                                  'text'  => 'Set the text color for image title'
                                                 ),
                                                 'lightboxTextColor'     => array('label' => 'Lightbox Image Description Color',
                                                                                  'tag'   => 'input',
                                                                                  'attr'  => 'type="text" data-type="color"',
                                                                                  'text'  => 'Set the text color for image caption'
                                                 ),
                                                 'lightboxBGColor'       => array('label' => 'Lightbox Window Color',
                                                                                  'tag'   => 'input',
                                                                                  'attr'  => 'type="text" data-type="color"',
                                                                                  'text'  => 'Set the background color for the lightbox window'
                                                 ),
                                                 'lightboxBGAlpha'       => array('label' => 'Lightbox Window Alpha',
                                                                                  'tag'   => 'input',
                                                                                  'attr'  => 'type="number" min="0" max="100" step="5"',
                                                                                  'text'  => 'Set the transparancy for the lightbox window'
                                                 ),
                                                 'sidebarBGColor'        => array('label' => 'Comments Block BG Color',
                                                                                  'tag'   => 'input',
                                                                                  'attr'  => 'type="text" data-type="color"',
                                                                                  'text'  => 'Set the background color for the comments block'
                                                 ),
                                                 'lightbox800HideArrows' => array('label' => 'Hide Arrows when small window',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => 'Hide Arrows if window width less than 800px'
                                                 ),
                                                 'deepLinks'             => array('label' => 'Deep Links',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => 'Change URL hash in the address bar for each big image'
                                                 ),
                                                 'commentsEnabled'       => array('label' => 'Show Comments Button and Counter',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => ''
                                                 ),
                                                 'socialShareEnabled'    => array('label' => 'Show Share Button',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => 'data-watch="change"',
                                                                                  'text'  => ''
                                                 ),
                                                 'share_post_link'       => array('label' => 'Share link to Gmedia Post',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => 'data-socialshareenabled="is:1"',
                                                                                  'text'  => 'Share link to the individual Gmedia Post instead of to the image in gallery.'
                                                 ),
                                                 'show_title'            => array('label' => 'Show Title in Lightbox',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => ''
                                                 ),
                                                 'show_tags'             => array('label' => 'Show Tags',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => ''
                                                 ),
                                                 'show_categories'       => array('label' => 'Show Categories',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => ''
                                                 ),
                                                 'show_albums'           => array('label' => 'Show Album',
                                                                                  'tag'   => 'checkbox',
                                                                                  'attr'  => '',
                                                                                  'text'  => ''
                                                 )
                               )
                         ),
                         array('label'  => 'Advanced Settings',
                               'fields' => array('customCSS' => array('label' => 'Custom CSS',
                                                                      'tag'   => 'textarea',
                                                                      'attr'  => 'cols="20" rows="10"',
                                                                      'text'  => 'You can enter custom style rules into this box if you\'d like. IE: <i>a{color: red !important;}</i><br />This is an advanced option! This is not recommended for users not fluent in CSS... but if you do know CSS, anything you add here will override the default styles'
                               )
                                                 /*,
                                                 'loveLink' => array(
                                                     'label' => 'Display LoveLink?',
                                                     'tag' => 'checkbox',
                                                     'attr' => '',
                                                     'text' => 'Selecting "Yes" will show the lovelink icon (codeasily.com) somewhere on the gallery'
                                                 )*/
                               )
                         )
);
