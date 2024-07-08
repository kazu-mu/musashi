<?php get_header(); ?>
            <main class="main">
                <div class="slider_contents wrapper">
                    <ul class="main_slider">
                    <?php
                    $gallery_items = $cfs->get('image'); // リピーターフィールド名

                    foreach ($gallery_items as $item) {
                        // フィールド名 'image' から画像のURLを取得し表示
                        if (isset($item['image'])) {
                        echo '<li><img src="' . esc_url($item['image']) . '" ></li>';
                        }
                    }
                    ?>
                    </ul>
                    <ul class="thumb_slider">


                    <?php
                    $gallery_items = $cfs->get('image'); // リピーターフィールド名

                    foreach ($gallery_items as $item) {
                        // フィールド名 'image' から画像のURLを取得し表示
                        if (isset($item['image'])) {
                        echo '<li><img src="' . esc_url($item['image']) . '" ></li>';
                        }
                    }
                    ?>


                    

                    
                    
                    </ul>
                    <div class="news_info">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                
            </main>
<?php get_footer(); ?>