<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>
<header>
    <!-- container -->
    <div class="container">
        <!-- brand logo/slogan -->
        <a href="/" class="brand">
            <img src="http://marketplacephp.com/images/etsy_clone_script.png" alt="Etsy clone script">
        </a>
        <!--/ brand logo/slogan -->

        <!-- navigation menu -->
        <nav class="pull-right top-55">
            <ul class="inline">
                <li><a href="http://marketplacephp.com/#features">Features</a></li>
                <li><a href="http://marketplacephp.com/#convenience">For clients</a></li>
                <li><a href="http://marketplacephp.com/#support">Support</a></li>
                <li><a href="http://marketplacephp.com/affiliate.php">Affiliate</a></li>
                <li><a href="#myModal" class="btn orange getModal">Contact Us</a></li>
                <li class="push-right">
                    <a href="#myModal" class="btn grey getModal">Contact Us</a>
                    <a href="#top"><i class="icon-top-arr"></i></a>
                </li>
            </ul>
        </nav>
        <!--/ navigation menu -->
    </div>
    <!--/ container -->
    <script>
        /*$(function(){
            $('.getModal').on('click', function() {
                $('#myModal').show();
                return false;
            });
        });*/
    </script>
</header>
<!-- Modal -->


    <?php
    if (!empty($_SERVER['REMOTE_USER'])) {
        echo '<ul style="position: absolute;"><li class="user">';
        tpl_userinfo();
        tpl_action('admin', 1, 'li');
        tpl_action('profile', 1, 'li');
        tpl_action('register', 1, 'li');
        tpl_action('login', 1, 'li');
        echo '</li></ul>';
    }

    ?>


<?php if ($conf['useacl']): ?>
<div id="dokuwiki__usertools">
    <h3 class="a11y"><?php echo $lang['user_tools']; ?></h3>

</div>
<?php endif ?>


<!--
<div id="dokuwiki__header">
    <div class="pad group">

    <?php tpl_includeFile('header.html') ?>

    <div class="headings group">
        <ul class="a11y skip">
            <li><a href="#dokuwiki__content"><?php /*echo $lang['skip_to_content']; */?></a></li>
        </ul>

        <h1><?php
/*            $logoSize = array();
            $logo = tpl_getMediaFile(array(':wiki:logo.png', ':logo.png', 'images/logo.png'), false, $logoSize);

            tpl_link(
                wl(),
                '<img src="'.$logo.'" '.$logoSize[3].' alt="" /> <span>'.$conf['title'].'</span>',
                'accesskey="h" title="[H]"'
            );
        */?></h1>
        <?php /*if ($conf['tagline']): */?>
            <p class="claim"><?php /*echo $conf['tagline']; */?></p>
        <?php /*endif */?>
    </div>

    <div class="tools group">
        <?php /*if ($conf['useacl']): */?>
            <div id="dokuwiki__usertools">
                <h3 class="a11y"><?php /*echo $lang['user_tools']; */?></h3>
                <ul>
                    <?php
/*                        if (!empty($_SERVER['REMOTE_USER'])) {
                            echo '<li class="user">';
                            tpl_userinfo();
                            echo '</li>';
                        }
                        tpl_action('admin', 1, 'li');
                        tpl_action('profile', 1, 'li');
                        tpl_action('register', 1, 'li');
                        tpl_action('login', 1, 'li');
                    */?>
                </ul>
            </div>
        <?php /*endif */?>

        <div id="dokuwiki__sitetools">
            <h3 class="a11y"><?php /*echo $lang['site_tools']; */?></h3>
            <?php /*tpl_searchform(); */?>
            <div class="mobileTools">
                <?php /*tpl_actiondropdown($lang['tools']); */?>
            </div>
            <ul>
                <?php
/*                    tpl_action('recent', 1, 'li');
                    tpl_action('media', 1, 'li');
                    tpl_action('index', 1, 'li');
                */?>
            </ul>
        </div>

    </div>

    <?php /*if($conf['breadcrumbs'] || $conf['youarehere']): */?>
        <div class="breadcrumbs">
            <?php /*if($conf['youarehere']): */?>
                <div class="youarehere"><?php /*tpl_youarehere() */?></div>
            <?php /*endif */?>
            <?php /*if($conf['breadcrumbs']): */?>
                <div class="trace"><?php /*tpl_breadcrumbs() */?></div>
            <?php /*endif */?>
        </div>
    <?php //endif ?>

    <?php //html_msgarea() ?>

    <hr class="a11y" />
    </div>
</div>
-->