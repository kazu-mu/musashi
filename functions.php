<?php
    add_action('wp_enqueue_scripts', 'add_styles');  
    function add_styles() {
      // google fonts
      wp_register_style( 
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap' 
      );

    //   slick
      wp_register_style( 
        'slick_style',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' 
      );
    
      // reset style
      wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0' 
      );
    
      // main style
      wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style', 'slick_style'),
        '1.0' 
      );
    }

    // jsの読み込み
    add_action('wp_enqueue_scripts', 'add_scripts');
    function add_scripts() {
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');

    // jQueryを読み込む
    wp_register_script(
      'jquery_script',
      'https://code.jquery.com/jquery-3.7.1.min.js',
      array(),
      '1.0'
    );

    // slick
    wp_register_script(
      'slick_script',
      '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
      array(),
      '1.0'
    );

    // メインのスクリプトを読み込む
    wp_enqueue_script(
      'main_script',
      get_template_directory_uri() . '/js/main.js',
      array('jquery_script', 'slick_script'),
      '1.0',
      true
    );
    }

    /* main.js にdefer属性を付与 */
    add_filter('script_loader_tag', 'add_defer', 10, 2);
    function add_defer($tag, $handle) {
    // 識別名がmain_script以外はそのまま返却
    if ($handle !== 'main_script') {
      return $tag;
    }

    // deferを追加して返却する
    return str_replace(' src=', ' defer src=', $tag);
    }
?>