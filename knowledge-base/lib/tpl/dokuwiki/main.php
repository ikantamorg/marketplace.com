<?php
/**
 * DokuWiki Default Template 2012
 *
 * @link     http://dokuwiki.org/template
 * @author   Anika Henke <anika@selfthinker.org>
 * @author   Clarence Lee <clarencedglee@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
header('X-UA-Compatible: IE=edge,chrome=1');

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT=='show');
?><!DOCTYPE html>
<html style="height: 100%" lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
<head>
    <meta charset="utf-8" />
    <title><?php echo tpl_pagetitle(null, true) == 'start' ?
            'Marketplace PHP - online marketplace software solution' :
            ucfirst(str_replace('_', ' ', tpl_pagetitle(null, true))); ?> [<?php echo strip_tags($conf['title']) ?>]</title>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <?php tpl_metaheaders() ?>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
    <?php tpl_includeFile('meta.html') ?>

    <link type="text/css" rel="stylesheet" media="all" href="http://marketplacephp.com/css/master.css" />
    <link type="text/css" rel="stylesheet" media="all" href="http://marketplacephp.com/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" media="all" href="http://marketplacephp.com/css/bootstrap-responsive.css" />


</head>
<style>
    .editbutton_section{display: none;}

    html {
        position: relative;
        min-height: 100%;
    }


    .f-f {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 75px;
    }

    body > header {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        background: #FFF;
        -webkit-box-shadow: 0 2px 7px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0 2px 7px rgba(0, 0, 0, .15);
        -o-box-shadow: 0 2px 7px rgba(0, 0, 0, .15);
        -ms-box-shadow: 0 2px 7px rgba(0, 0, 0, .15);
        box-shadow: 0 2px 7px rgba(0, 0, 0, 0.15);
    }
</style>
<body style="height: 100%" class="own-column lightbox-processed tableHeader-processed">
<?php include('tpl_header.php') ?>
<div class="wraper" style="padding-top: 130px">

    <div id="dokuwiki__site">
        <div id="dokuwiki__top" class="<?php echo tpl_classes(); ?> <?php echo ($showSidebar) ? 'showSidebar' : ''; ?> <?php echo ($hasSidebar) ? 'hasSidebar' : ''; ?>">
        <div class="wrapper group">
            <?php if($showSidebar && $conf['start'] != $ID){ ?>

                <div id="dokuwiki__aside"><div class="pad include group">
                    <!--<h3 class="toggle"><?php /*echo $lang['sidebar'] */?></h3>-->
                    <div class="content">
                        <?php tpl_flush() ?>
                        <?php tpl_includeFile('sidebarheader.html') ?>
                        <?php tpl_include_page($conf['sidebar'], 1, 1) ?>
                        <?php tpl_includeFile('sidebarfooter.html') ?>
                    </div>
                </div></div>
            <?php } else { ?>
            <style>#dokuwiki__content > .pad { margin-left: 0 !important;}</style>
            <?php } ?>
            <div id="dokuwiki__content"><div class="pad group">
                    <!-- BREADCRUMBS -->
                    <?php if(($conf['breadcrumbs'] || $conf['youarehere']) && $conf['start'] != $ID): ?>
                        <div class="" style="margin-left: 10px; position: relative">
                            <?php if($conf['youarehere']): ?>
                                <div class="youarehere"><?php tpl_youarehere() ?></div>
                            <?php endif ?>
                            <?php //if($conf['breadcrumbs']): ?>
                                <div class="trace"><?php tpl_breadcrumbs() ?></div>
                            <?php //endif ?>
                            <small class="line-through"></small>
                        </div>
                    <?php endif ?>
                <div class="page group">
                    <?php tpl_flush() ?>
                    <?php tpl_includeFile('pageheader.html') ?>
                    <?php tpl_content() ?>
                    <?php tpl_includeFile('pagefooter.html') ?>
                </div>

                <?php tpl_flush() ?>
            </div></div>

            <hr class="a11y" />

            <?php if (!empty($_SERVER['REMOTE_USER'])) {?>
            <div id="dokuwiki__pagetools">



                <h3 class="a11y"><?php echo $lang['page_tools']; ?></h3>
                <div class="tools">
                    <ul>
                        <?php
                            $data = array(
                                'view'  => 'main',
                                'items' => array(
                                    'edit'      => tpl_action('edit',      1, 'li', 1, '<span>', '</span>'),
                                    'revert'    => tpl_action('revert',    1, 'li', 1, '<span>', '</span>'),
                                    'revisions' => tpl_action('revisions', 1, 'li', 1, '<span>', '</span>'),
                                    'backlink'  => tpl_action('backlink',  1, 'li', 1, '<span>', '</span>'),
                                    'subscribe' => tpl_action('subscribe', 1, 'li', 1, '<span>', '</span>'),
                                    'top'       => tpl_action('top',       1, 'li', 1, '<span>', '</span>')
                                )
                            );

                            $evt = new Doku_Event('TEMPLATE_PAGETOOLS_DISPLAY', $data);
                            if($evt->advise_before()){
                                foreach($evt->data['items'] as $k => $html) echo $html;
                            }
                            $evt->advise_after();
                            unset($data);
                            unset($evt);
                        ?>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>

        <?php // include('tpl_footer.php') ?>
    </div></div>


</div>


<footer class="container inner-b f-f">
    <div class="container">
    <div class="span4 outer-none">
        <p><small>Copyright &copy;2013 Marketplace PHP - Marketplace software solution</small></p>
        <p><small>Contacts: Email: ikantam.com@gmail.com Name: Vitaly Tarasiuk</small></p>
        <p><small>REFUND POLICY: As the product is digital and open source, all sales are final with no money back guarantee. Provide assistance with software installation if required for a reasonable extra fee.</small></p>
        <p><small><a href="/knowledge-base">Knowledge base</a></small></p>
    </div>
    <div class="span6 pull-right text-right">
        <a href="#" target="_blank"><i class="icon-trust"></i></a>
        <a href="#" target="_blank"><i class="icon-level-1"></i></a>
        <a href="#" target="_blank"><i class="icon-bbb"></i></a>
        <a href="#" target="_blank"><i class="icon-inc"></i></a>
    </div>
    </div>
</footer>

<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://marketplacephp.com/js/bootstrap.min.js"></script>
<script src="http://marketplacephp.com/js/bootstrap-fileupload.min.js"></script>
<script src="http://marketplacephp.com/js/custom.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42874010-1', 'marketplacephp.com');
    ga('send', 'pageview');

</script>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <button class="close" data-dismiss="modal" aria-hidden="true"></button>
    <!--
      <div class="modal-header">
        <h2>
            <img width="150" src="/images/etsy_clone_script.png" alt="Fashion marketplace script" />
            <span>We're within reach..</span>
        </h2>

        <a class="get-started-action" href="skype:the_last_available_nickname?chat">
            <img src="img/skype_circle_black-48.png" style="margin: 0; opacity: .5; "> We are online in Skype
        </a>
      </div>
      -->
    <div class="modal-header">
        <h2>
            <img width="150" src="/images/etsy_clone_script.png" alt="Fashion marketplace script" />
        </h2>
    </div>

    <div class="secondary-header">
        <a class="get-started-action" href="skype:vinyl_s?chat">
            <img src="/img/skype_circle_black-48.png" />
            We are online in Skype
        </a>
    </div>


    <div class="modal-body">
        <form id="contactForm" method="post" autocomplete="off">
            <h4>Contact Us</h4>
            <div class="control-group">
                <div class="controls">
                    <input type="text" placeholder="First name" name="firstName"/>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="text" placeholder="Last name" name="lastName" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="email" placeholder="Email" name="email" name="message" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <textarea placeholder="Your message" name="message"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn orange">SUBMIT</button>
                </div>
            </div>
            <h3 class="notification"></h3>
        </form>
    </div>
</div>
<!--/ Modal -->
</body>
</html>
