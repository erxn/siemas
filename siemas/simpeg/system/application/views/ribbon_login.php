<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <base href="<?php echo base_url(); ?>"/>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sistem Informasi Kepegawaian Puskesmas</title>
        <style type="text/css">body { margin: 0; padding: 0; font: 12px/*62.5%*/ Verdana, sans-serif; }</style>
        <link type="text/css" href="ribbon/themes/base/ui.all.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/themes/base/ui.tabs.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.button.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.ribbon.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.orbButton.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/ui.ribbon.style.msoffice.css" rel="stylesheet" />
        <link type="text/css" href="ribbon/style/msoffice-icons.css" rel="stylesheet" />

        <script language="JavaScript" type="text/javascript" src="ribbon/jquery-1.3.2.js"></script>
        <script language="JavaScript" type="text/javascript">
            (function ($) {
                var $prev_focused = null;
                var focus_orig = $.fn.focus;
                $.fn.focus = function () {
                    if (!arguments.length) {
                        if ($prev_focused) $prev_focused.blur();
                        $prev_focused = this;
                    }
                    else {
                        focus_orig.apply(this, function () { $prev_focused = $(this); });
                    }
                    return focus_orig.apply(this, arguments);
                };
                $(document).click(function () {
                    if ($prev_focused) $prev_focused.blur();
                    $prev_focused = null;

                    $(document).find('.ui-state-focus').blur();
                });
            })(jQuery);
        </script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.core.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.tabs.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.ribbon.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.orbButton.js"></script>
        <script language="JavaScript" type="text/javascript" src="ribbon/ui/ui.button.js"></script>

        <script language="JavaScript" type="text/javascript">
            jQuery(function ($) {
                $('#log').dblclick(function () { $('#log').empty(); });

                $('.ui-button').button({ useSlidingDoors: true });
                //$('.ui-orbButton').orbButton();
                $('#ribbon-msoffice').wrap('<div class="style-msoffice"></div>');

                $('#ribbon-msoffice').ribbon({
                    collapsible: false
                })
            });
        </script>

        <style type="text/css">

            .mso-input {
                background-color: #eaf2fb;
                border: 1px solid #abc1de;
                font-family: 'Segoe UI', Verdana, sans-serif !important;
                font-size: 11px;
            }

            .mso-input:hover, .mso-input:focus {
                background-color: #FFFFFF;
            }

        </style>


    </head>
    <body style="overflow: hidden">

        <div id="ribbon-msoffice" style="-moz-user-select: none" unselectable="on">
            <ul>
                <li><a href="#ribbon-msofficeTabLogin" class="_ribbontab"><span><label>Login</label></span></a></li>
            </ul>

            <div id="ribbon-msofficeTabLogin">
                <ul>
                    <li id="groupHariIni_ribbon-msofficeTabLogin">
                        <div>

                            <form action="" method="post" id="login-form">

                                <table style="margin: 5px 5px 0px 10px; float: left">
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" name="username" id="username" size="20" class="mso-input"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kata Kunci &nbsp;&nbsp;&nbsp;</td>
                                        <td>
                                            <input type="password" name="password" id="password" size="20" class="mso-input"/>
                                        </td>
                                    </tr>
                                </table>

                                <button class="ui-ribbon-element ui-ribbon-control ui-button ui-ribbon-large-button" title="Login" onclick="$('#login-form').submit()">
                                    <span class="ui-icon msoffice-icon-key-32x32"></span>
                                    <span class="ui-button-label">Login</span>
                                </button>

                            </form>

                        </div>
                        <h3><span>Login</span></h3>
                    </li>
                </ul>
            </div>

        </div>

        <div id="page_content_container">

            <iframe id="page_content" frameborder="0" width="100%" height="100%" src="index.php/home"></iframe>

        </div>

        <script type="text/javascript">

            $(document).ready(function(){
                resizeContent();
                $('#username').focus();
            });
            
            $(window).resize(function(){
                resizeContent();
            });

            function resizeContent(){
                $('#page_content').css({height: $(window).height() - $('#ribbon-msoffice').height() + 'px'});
            }

        </script>

    </body>
</html>
