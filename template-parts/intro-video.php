<?php
$cookie_name = "stef_hide_intro";
if (!isset($_COOKIE[$cookie_name])) {
?>
    <div
        class="intro-animation__container h-screen w-screen fixed z-20 bg-gray-900 top-0 left-0 flex justify-center align-middle">
        <img src="<?php echo get_theme_mod('navbar_logo'); ?>" class="intro-animation__image invert" alt="logo" height=400
            width=400 loading="eager">
    </div>
<?php
}
?>