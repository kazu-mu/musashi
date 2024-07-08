<?php get_header(); ?>
            <main class="main">
                <div class="activities_mv">
                    <img class="mv_pc" src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_mv_pc.png' ); ?>" alt="">
                    <img class="mv_sp" src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_mv_sp.png' ); ?>" alt="">
                    <h2 class="page_title">SNS</h2>
                </div>
                <div class="scroll">
                    <p>Scroll</p>
                    <div class="scroll_line">
                        <span class="scroll_item square"></span>
                        <span class="scroll_item circle"></span>
                    </div>
                </div>
                <h3 class="section_title sns_title">SNS<br><span>活動内容</span></h3>
                <section class="instagram wrapper">
                    <div class="section_logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_ig_bg.jpg' ); ?>" alt="">
                    </div>
                    <ul class="sns_contents ig_list">
                        <li><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_item1.jpg' ); ?>" alt=""></li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_item1.jpg' ); ?>" alt=""></li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_item1.jpg' ); ?>" alt=""></li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_item1.jpg' ); ?>" alt=""></li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_item1.jpg' ); ?>" alt=""></li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_item1.jpg' ); ?>" alt=""></li>
                    </ul>
                </section>
                <section class="youtube wrapper">
                    <div class="section_logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_youtube_bg.jpg' ); ?>" alt="">
                    </div>
                    <ul class="sns_contents youtube_list">
                    <?php query_posts('category_name=youtube'); ?>
                        <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                        ?>
                        <li>
                            <?php the_content(); ?>
                        </li>
                        <?php
                            endwhile;
                        else:
                            ?>
                        <p>投稿データがありませんでした</p>
                        <?php endif; ?>
                    </ul>
                </section>
                <section class="line wrapper">
                    <div class="section_logo">
                        <img src="images\sns_line_bg.jpg" alt="">
                    </div>
                    <div class="sns_item">
                        <img src="images\sns_item2.jpg" alt="">
                    </div>
                </section>
                
            </main>
<?php get_footer(); ?>