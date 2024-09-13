    </main>
    <div>
        <?php if (is_active_sidebar('Footer Top')) { ?>
            <?php dynamic_sidebar('Footer Top'); ?>
        <?php } ?>
    </div>
    <footer class="footer p-2 md:p-8 flex flex-col text-white">
        <?php if (is_active_sidebar('Footer')) { ?>
            <?php dynamic_sidebar('Footer'); ?>
        <?php } ?>
    </footer>

    <?php wp_footer() ?>
    </body>

    </html>