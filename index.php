<?php get_header(); ?>
            <main class="main">
                <div class="mainvisual"></div>
                <div class="scroll_top">
                    <p>Scroll</p>
                    <div class="scroll_line">
                        <span class="scroll_item square"></span>
                        <span class="scroll_item circle"></span>
                    </div>
                </div>
                <section class="news">
                    <h3 class="section_title">NEWS</h3>
                    <ul>
                    <?php query_posts('category_name=news'); ?>
                        <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <p><?php the_time('Y.m.d'); ?></p>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
                        <?php
                            endwhile;
                        else:
                            ?>
                        <p>投稿データがありませんでした</p>
                        <?php endif; ?>
                    </ul>
                </section>
            </main>
<?php get_footer(); ?>