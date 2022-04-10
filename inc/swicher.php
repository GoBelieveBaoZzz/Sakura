<?php
function font_end_js_control() { ?>
<script>
/*Initial Variables*/
var akina_js_option = new Object();
var akina_js_global = new Object();
akina_js_option.NProgressON = <?php if ( akina_option('nprogress_on') ){ echo 'true'; } else { echo 'false'; } ?>;
akina_js_option.email_domain = "<?php echo akina_option('email_domain', ''); ?>";
akina_js_option.email_name = "<?php echo akina_option('email_name', ''); ?>";
akina_js_option.cookie_version_control = "<?php echo akina_option('cookie_version', ''); ?>";
akina_js_option.qzone_autocomplete = false;
akina_js_option.site_name = "<?php echo akina_option('site_name', ''); ?>";
akina_js_option.author_name = "<?php echo akina_option('author_name', ''); ?>";
akina_js_option.template_url = "<?php echo get_template_directory_uri(); ?>";
akina_js_option.site_url = "<?php echo site_url(); ?>";
akina_js_option.qq_api_url = "<?php echo rest_url('sakura/v1/qqinfo/json'); ?>";
// akina_js_option.qq_avatar_api_url = "https://api.2heng.xin/qqinfo/";
akina_js_option.live_search = <?php if ( akina_option('live_search') ){ echo 'true'; } else { echo 'false'; } ?>;

<?php if( akina_option('sakura_skin_bg' )){ $bg_arry=explode(",", akina_option('sakura_skin_bg' ));?>
akina_js_option.skin_bg0 = "<?php echo $bg_arry[0] ?>";
akina_js_option.skin_bg1 = "<?php echo $bg_arry[1] ?>";
akina_js_option.skin_bg2 = "<?php echo $bg_arry[2] ?>";
akina_js_option.skin_bg3 = "<?php echo $bg_arry[3] ?>";
akina_js_option.skin_bg4 = "<?php echo $bg_arry[4] ?>";
akina_js_option.skin_bg5 = "<?php echo $bg_arry[5] ?>";
akina_js_option.skin_bg6 = "<?php echo $bg_arry[6] ?>";
akina_js_option.skin_bg7 = "<?php echo $bg_arry[7] ?>";
<?php }else {?>
akina_js_option.skin_bg0 = "none";
akina_js_option.skin_bg1 = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@1.0.0/img/bg/sakura.png";
akina_js_option.skin_bg2 = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@1.0.0/img/bg/plaid2dbf8.jpg";
akina_js_option.skin_bg3 = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@1.0.0/img/bg/star02.png";
akina_js_option.skin_bg4 = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@1.0.0/img/bg/kyotoanimation.png";
akina_js_option.skin_bg5 = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@1.0.0/img/bg/dot_orange.gif";
akina_js_option.skin_bg6 = "https://blog.rm-rf.fun/wp-json/sakura/v1/image/bing";
akina_js_option.skin_bg7 = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@1.0.0/other-sites/api-index/images/me.png";
<?php } ?>

akina_js_option.darkmode = <?php if ( akina_option('darkmode') ){ echo 'true'; } else { echo 'false'; } ?>;

<?php if( is_home() ){ ?>
akina_js_option.land_at_home = true;
<?php }else {?>
akina_js_option.land_at_home = false;
<?php } ?>

<?php if(akina_option('image_viewer') == 0){ ?>
akina_js_option.baguetteBoxON = false;
<?php }else {?>
akina_js_option.baguetteBoxON = true;
<?php } ?>

<?php if(akina_option('clipboard_copyright') == 0){ ?>
akina_js_option.clipboardCopyright = false;
<?php }else {?>
akina_js_option.clipboardCopyright = true;
<?php } ?>

<?php if(akina_option('entry_content_theme') == "sakura"){ ?>
akina_js_option.entry_content_theme_src = "<?php echo get_template_directory_uri() ?>/cdn/theme/sakura.css?<?php echo SAKURA_VERSION.akina_option('cookie_version', ''); ?>";
<?php }elseif(akina_option('entry_content_theme') == "github") {?>
akina_js_option.entry_content_theme_src = "<?php echo get_template_directory_uri() ?>/cdn/theme/github.css?<?php echo SAKURA_VERSION.akina_option('cookie_version', ''); ?>";
<?php } ?>
akina_js_option.entry_content_theme = "<?php echo akina_option('entry_content_theme'); ?>";

<?php if(akina_option('jsdelivr_cdn_test')){ ?>
akina_js_option.jsdelivr_css_src = "<?php echo get_template_directory_uri() ?>/cdn/css/lib.css?<?php echo SAKURA_VERSION.akina_option('cookie_version', ''); ?>";
<?php } else { ?>
akina_js_option.jsdelivr_css_src = "https://cdn.jsdelivr.net/gh/qq1041663097/cdn@<?php echo SAKURA_VERSION; ?>/css/lib.min.css";
<?php } ?>

akina_js_option.cover_api = "<?php echo rest_url('sakura/v1/image/cover'); ?>";

akina_js_option.windowheight = /Mobile|Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ? 'fixed' : 'auto';
/*End of Initial Variables*/
</script>
<?php }
add_action('wp_head', 'font_end_js_control');
