<?php
/**
 * Created by PhpStorm.
 * User: Andrej
 * Date: 19.04.2016
 * Time: 15:52
 */
?>
        <!DOCTYPE html>
<html>
<head>
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <title>Template Base</title>
</head>
<body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF">
<style id="media-query">
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
    @media only screen and (max-width: 560px) {
        table[class="body"] img {
            height: auto !important;
            width: 100% !important;
        }

        table[class="body"] img.fullwidth {
            max-width: 100% !important;
        }

        table[class="body"] center {
            min-width: 0 !important;
        }

        table[class="body"] .container {
            width: 95% !important;
        }

        table[class="body"] .row {
            width: 100% !important;
            display: block !important;
        }

        table[class="body"] .wrapper {
            display: block !important;
            padding-right: 0 !important;
        }

        table[class="body"] .columns, table[class="body"] .column {
            table-layout: fixed !important;
            float: none !important;
            width: 100% !important;
            padding-right: 0px !important;
            padding-left: 0px !important;
            display: block !important;
        }

        table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
            display: table !important;
        }

        table[class="body"] table.columns td, table[class="body"] table.column td, .col {
            width: 100% !important;
        }

        table[class="body"] table.columns td.expander {
            width: 1px !important;
        }

        table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
            padding-left: 10px !important;
        }

        table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
            padding-right: 10px !important;
        }

        table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
            display: none !important;
        }

        table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
            display: inherit !important;
        }

        .mixed-two-up .col {
            width: 100% !important;
        }
    }

    @media screen and (max-width: 560px) {
        div[class="col"] {
            width: 100% !important;
        }
    }

    @media screen and (min-width: 561px) {
        table[class="container"] {
            width: 560px !important;
        }
    }
</style>
<table class="body"
       style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed"
       cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr style="vertical-align: top">
        <td class="center"
            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF"
            align="center" valign="top">

            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #DF2525"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #000000;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       cellpadding="0" cellspacing="0" width="100%"
                                                                       border="0">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%"
                                                                            align="center">
                                                                            <div style="font-size:12px" align="center">

                                                                                <img class="center"
                                                                                     style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: 0;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 300px;max-width: 300px"
                                                                                     align="center" border="0"
                                                                                     src="http://konania.sk/assets/images/logo.png"
                                                                                     alt="Image" title="Image"
                                                                                     width="300">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #000000;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                            <div style="color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;">
                                                                                    <div class="txtTinyMce-wrapper"
                                                                                         style="font-size:12px; line-height:14px;">
                                                                                        <p style="margin: 0;font-size: 14px;line-height: 16px;text-align: center">
                                                                                            <span style="font-size: 36px; line-height: 43px;"><strong><span
                                                                                                            style="line-height: 43px; font-size: 36px;">V&#225;&#353; odber bol aktivovan&#253;.<br></span></strong></span>
                                                                                        </p></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #000000;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                            <div style="color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;">
                                                                                    <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">
                                                                                        <strong><span
                                                                                                    style="font-size: 22px; line-height: 26px; color: rgb(51, 102, 255);">{{$mail}}</span></strong><br>
                                                                                    </p></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #000000;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                            <div style="color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;">
                                                                                    <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">
                                                                                        <strong><span
                                                                                                    style="font-size: 28px; line-height: 33px;">&#270;akujeme za odber noviniek stavebn&#253;ch konan&#237;.</span></strong><br>
                                                                                    </p></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #000000;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                            <div style="color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;">
                                                                                    <div class="txtTinyMce-wrapper"
                                                                                         style="font-size:12px; line-height:14px;">
                                                                                        <p style="margin: 0;font-size: 14px;line-height: 16px;text-align: center">
                                                                                            <span style="font-size: 22px; line-height: 26px;"><strong><span
                                                                                                            style="line-height: 26px; font-size: 22px;">T&#237;m Stavebn&#253;ch konan&#237;</span></strong></span>
                                                                                        </p></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #f0f0f0"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #000000;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       align="center" width="100%" border="0"
                                                                       cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px"
                                                                            align="center">
                                                                            <div style="height: 1px;">
                                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%"
                                                                                       align="center" border="0"
                                                                                       cellspacing="0">
                                                                                    <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                                                                            align="center"></td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #ffffff"
                   cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody>
                <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                        width="100%">
                        <!--[if gte mso 9]>
                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td>
                        <![endif]-->
                        <!--[if (IE)]>
                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->
                        <table class="container"
                               style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 560px;margin: 0 auto;text-align: inherit"
                               cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                            <tbody>
                            <tr style="vertical-align: top">
                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                    width="100%">
                                    <table class="block-grid"
                                           style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 560px;color: #333;background-color: transparent"
                                           cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                        <tbody>
                                        <tr style="vertical-align: top">
                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table width="100%" align="center" bgcolor="transparent" cellpadding="0"
                                                       cellspacing="0" border="0">
                                                    <tr><![endif]--><!--[if (gte mso 9)|(IE)]>
                                                <td valign="top" width="560"><![endif]-->
                                                <div class="col num12"
                                                     style="display: inline-block;vertical-align: top;width: 100%">
                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                           cellpadding="0" cellspacing="0" align="center" width="100%"
                                                           border="0">
                                                        <tbody>
                                                        <tr style="vertical-align: top">
                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       width="100%" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                                                            align="center" valign="top">
                                                                            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                                   border="0" cellspacing="0"
                                                                                   cellpadding="0">
                                                                                <tbody>
                                                                                <tr style="vertical-align: top">
                                                                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;max-width: 156px"
                                                                                        align="center" valign="top">

                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table width="166" align="left"
                                                                                               border="0"
                                                                                               cellspacing="0"
                                                                                               cellpadding="0">
                                                                                            <tr>
                                                                                                <td align="left">
                                                                                        <![endif]-->
                                                                                        <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                                               width="100%" align="left"
                                                                                               cellpadding="0"
                                                                                               cellspacing="0"
                                                                                               border="0">
                                                                                            <tbody>
                                                                                            <tr style="vertical-align: top">
                                                                                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                                                                                    align="left"
                                                                                                    valign="middle">


                                                                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 0 0"
                                                                                                           align="left"
                                                                                                           border="0"
                                                                                                           cellspacing="0"
                                                                                                           cellpadding="0"
                                                                                                           height="37">
                                                                                                        <tbody>
                                                                                                        <tr style="vertical-align: top">
                                                                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                                                                                                width="37"
                                                                                                                align="left"
                                                                                                                valign="middle">
                                                                                                                <a href="https://www.facebook.com/"
                                                                                                                   title="Facebook"
                                                                                                                   target="_blank">
                                                                                                                    <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important"
                                                                                                                         src="http://konania.sk/assets/images/facebook.png"
                                                                                                                         alt="Facebook"
                                                                                                                         title="Facebook"
                                                                                                                         width="32">
                                                                                                                </a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 0 0"
                                                                                                           align="left"
                                                                                                           border="0"
                                                                                                           cellspacing="0"
                                                                                                           cellpadding="0"
                                                                                                           height="37">
                                                                                                        <tbody>
                                                                                                        <tr style="vertical-align: top">
                                                                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                                                                                                width="37"
                                                                                                                align="left"
                                                                                                                valign="middle">
                                                                                                                <a href="http://twitter.com/"
                                                                                                                   title="Twitter"
                                                                                                                   target="_blank">
                                                                                                                    <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important"
                                                                                                                         src="http://konania.sk/assets/images/twitter.png"
                                                                                                                         alt="Twitter"
                                                                                                                         title="Twitter"
                                                                                                                         width="32">
                                                                                                                </a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 0 0"
                                                                                                           align="left"
                                                                                                           border="0"
                                                                                                           cellspacing="0"
                                                                                                           cellpadding="0"
                                                                                                           height="37">
                                                                                                        <tbody>
                                                                                                        <tr style="vertical-align: top">
                                                                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"
                                                                                                                width="37"
                                                                                                                align="left"
                                                                                                                valign="middle">
                                                                                                                <a href="http://plus.google.com/"
                                                                                                                   title="Google+"
                                                                                                                   target="_blank">
                                                                                                                    <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important"
                                                                                                                         src="http://konania.sk/assets/images/googleplus.png"
                                                                                                                         alt="Google+"
                                                                                                                         title="Google+"
                                                                                                                         width="32">
                                                                                                                </a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>

                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        </td>
                                                                                        </tr>
                                                                                        </table>
                                                                                        <![endif]-->
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top"
                                                                       cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                            <div style="color:#959595;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                <div style="font-size:12px;line-height:18px;text-align:center;color:#959595;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                    <span style="font-size:18px; line-height:27px;">Podporte n&#225;s zdielan&#237;m</span><br>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]></td><![endif]-->
                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]>
                        </td></tr></table>
                        <![endif]-->
                        <!--[if (IE)]>
                        </td></tr></table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>


</body>
</html>
