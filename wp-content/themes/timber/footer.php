    <footer class="footer">
        <div class="main_img">
            <img class="m_img" src="<?php bloginfo('template_url');?>/assets/img/main_img.png" alt="">
        </div>
            <a class="phone" href="tel:<?the_field('phone')?>"><?the_field('phone')?></a>
        <div class="footer_email"><?the_field('footer_email')?></div>

<!--        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<!--        <script src="js/jquery.magnific-popup.min.js"></script>-->
<!--        <script src="js/main.js"></script>-->
    </footer>
    
<?php wp_footer(); ?> 
</body>

</html>