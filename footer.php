       <?php wp_footer() ?>
       
       <!-- FOOTER -->
       <footer class="footer py-14 bg-dark">
        <div class="container">
            <div class="footer__wrapper flex flex-col-reverse items-center gap-5 lg:flex lg:flex-row lg:justify-between lg:justify-center lg:text-center lg:items-center">
                <ul class="footer__socials text-primary flex flex-row gap-5 text-[20px]">
                    <?php the_field('footer_socials') ?>
                </ul>
                <div class="footer__contacts font-semibold">
                    <p><?php the_field('footer_contact') ?></p>
                </div>
                <div class="footer__buttons">
                    <a href="" class="btn bg-yelloww"><?php the_field('footer_btn') ?></a>
                </div>
            </div>
        </div>
       </footer>

       <!-- SCRIPTS -->


</body>
</html>