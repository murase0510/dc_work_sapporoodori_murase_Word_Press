    <footer>
        <ul>
        <li class="home"><a href="<?php echo home_url(); ?>">TOP</a></li>
       		    <?php wp_nav_menu( array(
        	    'theme_location'=>'place_global',
        	    'container' =>'',
    		    'menu_class' =>'',
    		    'items_wrap' => '%3$s',//<ul>を出力しない
        ));?>
        </ul>
        <div id="footer">
            <div class="copyright">Copyright &copy; 2020 SAMPLE SITE All Rights Reserved.</div>
        </div>
    </footer>
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
    <?php wp_footer(); ?>
</body>
</html>