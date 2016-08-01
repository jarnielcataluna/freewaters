<?php

require_once 'Swiftmailer/swift_required.php';

class MailerHandler
{
    private $transport;

    public function __construct()
    {
        $this->transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('freewaters.philippines@gmail.com')
            ->setPassword('freewaters123@@');
    }

    public function sendMail($data)
    {
        $mailer = Swift_Mailer::newInstance($this->transport);
//        $logger = new \Swift_Plugins_Loggers_EchoLogger();
//        $mailer->registerPlugin(new \Swift_Plugins_LoggerPlugin($logger));

        $body = '';
        $body .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        $body .= '<html xmlns="http://www.w3.org/1999/xhtml">';
        $body .= '    <head>';
        $body .= '        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        $body .= '        <meta name="format-detection" content="telephone=no">';
        $body .= '        <title>Freewaters</title>';
        $body .= '        <style type="text/css">';
        $body .= '            body {';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            .ReadMsgBody {';
        $body .= '                width: 100%;';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            .ExternalClass {';
        $body .= '                width: 100%;';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            table {';
        $body .= '                border-collapse: collapse;';
        $body .= '            }';
        $body .= '            a { color:#de0013;  outline:none;}';
        $body .= '            body{ font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 18px; color: #1b1b1b;}';
        $body .= '            p {font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height:18px; color: #1b1b1b; padding: 0px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none;}';
        $body .= '            * {-webkit-text-size-adjust: none}';
        $body .= '            strong {font-weight: bold;}';
        $body .= '            img { outline:none; border:none;}';
        $body .= '        </style>';
        $body .= '    </head>';
        $body .= '    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;">';
        $body .= '        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">';
        $body .= '            <tr>';
        $body .= '                <td width="100%" valign="top"  bgcolor="#ffffff" style="min-width:600px;" class="min-width-auto">';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td>';
        $body .= '                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/banner.jpg" alt="" width="100%" style=="display:block;"></td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>  ';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td class="mobile-padding" style="padding: 20px 30px;">';
        $body .= '                                <h1 style="color:#414042; font-size:20px; line-height: 28px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold; ">Thank you for participating in our quiz!</h1>';
        $body .= '                                <p style="color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold;">You\'re already entitled to a <span style="color:#ed1c24;">30% discount</span> from regularly<br>priced items at <span style="color:#ed1c24;">Res-Toe-Run and R.O.X.</span> when you present<br>this coupon.</p>';
        $body .= '                                <p style="color:#1b1b1b; font-style:italic; font-size:12px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center;">(coupon at the bottom of this email)</p>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#00c1f7">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:12px 30px;">';
        $body .= '                                <h2 style="color:#ffffff; font-size:24px; line-height: 32px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold; ">But There’s More!</h2>';
        $body .= '                                <p style="color:#ffffff; font-size:17px; line-height: 20px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold;">Get another 30% discount coupon <br>AND win these prizes courtesy of:</p>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/promo-img.jpg" width="100%" style="display:block;"></td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:12px 30px 20px;">';
        $body .= '                                <p style="color:#ffffff; font-size:17px; line-height: 20px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold;">five male and five female respondents will win their <br>choice of Freewaters shoes or sandals valued at <br>P2,000-P4,000 each.</p>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#00c1f7">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/step.jpg" width="100%" style="display:block;"></td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:20px 30px 30px; text-align: center;"><a href="https://www.facebook.com/Freewaters/" target="_blank" style="display: inline-block; color:#ffffff; background: #00c1f7; text-decoration: none; height: 40px; line-height: 40px; width: 200px;">Go to Facebook Fan Page</a></td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#00c1f7">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:0;"><a href="http://freewaters.com" target="_blank"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/freewater-img.jpg" width="100%" style="display:block;"></a></td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/support-img.jpg" width="100%" style="display:block;"></td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding: 33px;">';
        $body .= '                                <table width="290" cellpadding="0" cellspacing="0" align="left" valign="center" style="border: 2px dashed #de0013;">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:10px; text-align: center;" align="center">';
        $body .= '                                            <img src="https://' . $_SERVER['HTTP_HOST'] . '/images/res-toe-run.jpg" width="auto" style="display: inline-block; max-width:100%; vertical-align: top;" alt="">';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:5px; text-align: center;">';
        $body .= '                                            <h2 style="color:#de0013; font-size:18px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold; text-align: center; text-transform: uppercase; ">30% Discount Coupon</h2>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding: 0 0px 20px 0;" align="left">';
        $body .= '                                            <table width="190" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#de0013">';
        $body .= '                                                <tr>';
        $body .= '                                                    <td style="padding:10px 10px; background: #de0013;" align="center">';
        $body .= '                                                        <span style="color:#ffffff; font-size:20px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; font-weight:bold; text-align: center; ">' . $data['code'] . '</span>';
        $body .= '                                                    </td>';
        $body .= '                                                </tr>';
        $body .= '                                            </table>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                                <td width="245" cellpadding="0" cellspacing="0"  valign="center" align="right">';
        $body .= '                                   <table>';
        $body .= '                                       <tr>';
        $body .= '                                           <td> <p style="color:#231f20; font-size: 15px; line-height:18px; mso-table-lspace:0; mso-table-rspace:0; margin:0; mso-line-height-rule:exactly;  font-weight:bold; text-align: left;">Just present this coupon upon <br> purchase on participating <br><span style="color:#ed1c24;">Res | Toe | Run</span> or <span style="color:#ed1c24;">R.O.X.</span> Outlet</p>';
        $body .= '                                           </td>';
        $body .= '                                       </tr>';
        $body .= '                                   </table>';
        $body .= '                                </td>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                </td>';
        $body .= '            </tr>';
        $body .= '        </table>';
        $body .= '    </body>';
        $body .= '</html>';


        $message = Swift_Message::newInstance('30% discount at Res-Toe-Run or ROX')
            ->setFrom(array('freewaters.philippines@gmail.com' => 'Shoe or False? Quiz'))
            ->setTo($data['email'])
            ->setBody($body, 'text/html');

        if (!$mailer->send($message, $errors)) {
            $result = "Error:" . $errors;
        } else {
            $result = 'sent';
        }


        return $result;
    }

    public function sendRaffleMail($data)
    {
        $mailer = Swift_Mailer::newInstance($this->transport);
        $body = '';
        $body .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        $body .= '<html xmlns="http://www.w3.org/1999/xhtml">';
        $body .= '    <head>';
        $body .= '        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        $body .= '        <meta name="format-detection" content="telephone=no">';
        $body .= '        <title>Freewaters</title>';
        $body .= '        <style type="text/css">';
        $body .= '            body {';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            .ReadMsgBody {';
        $body .= '                width: 100%;';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            .ExternalClass {';
        $body .= '                width: 100%;';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            table {';
        $body .= '                border-collapse: collapse;';
        $body .= '            }';
        $body .= '            a { color:#de0013;  outline:none;}';
        $body .= '            body{ font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; color: #1b1b1b;}';
        $body .= '            p { font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height:18px; color: #1b1b1b; padding: 0px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none;}';
        $body .= '            * {-webkit-text-size-adjust: none}';
        $body .= '            strong {font-weight: bold;}';
        $body .= '            img { outline:none; border:none;}';
        $body .= '        </style>';
        $body .= '    </head>';
        $body .= '    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Helvetica, Arial, sans-serif;">';
        $body .= '        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">';
        $body .= '            <tr>';
        $body .= '                <td width="100%" valign="top"  bgcolor="#ffffff" style="min-width:600px;" class="min-width-auto">';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td>';
        $body .= '                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/banner2.jpg" alt="" width="100%" style=="display:block;"></td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td class="mobile-padding" style="padding: 20px 30px;">';
        $body .= '                                <h1 style="font-family: Arial, Helvetica, sans-serif; color:#1E74BA; font-size:20px; line-height: 28px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold; ">You are now part of the the Freewaters\' raffle promo!</h1 > ';
        $body .= '                                <p style = "font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center; font-weight:normal;" > Not only that, here\'s another <span style="color:#ed1c24;">30% discount</span> when<br>you purchase and regular priced items at <span style="color:#ed1c24;">Res-Toe-Run <br>and R.O.X.</span> </p>';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#1b1b1b; font-style:italic; font-size:12px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center;">(coupon at the bottom of this email)</p>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table><table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#00c1f7">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:0;"><a href="http://freewaters.com" target="_blank"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/freewater-img.jpg" width="100%" style="display:block;"></a></td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/support-img.jpg" width="100%" style="display:block;"></td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding: 33px;">';
        $body .= '                                <table width="290" cellpadding="0" cellspacing="0" align="left" valign="center" style="border: 2px dashed #1E74BA;">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:10px; text-align: center;" align="center">';
        $body .= '                                            <img src="https://' . $_SERVER['HTTP_HOST'] . '/images/res-toe-run.jpg" width="auto" style="display: inline-block; max-width:100%; vertical-align: top;" alt="">';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:5px; text-align: center;">';
        $body .= '                                            <h2 style="font-family: Arial, Helvetica, sans-serif; color:#1E74BA; font-size:18px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:normal; text-align: center; text-transform: uppercase; ">30% Discount Coupon</h2>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding: 0 0px 20px 0;" align="left">';
        $body .= '                                            <table width="190" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#de0013">';
        $body .= '                                                <tr>';
        $body .= '                                                    <td style="padding:10px 10px; background: #1E74BA;" align="center">';
        $body .= '                                                        <span style="font-family: Arial, Helvetica, sans-serif; color:#ffffff; font-size:20px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; font-weight:normal; text-align: center; ">' . $data['code'] . '</span>';
        $body .= '                                                    </td>';
        $body .= '                                                </tr>';
        $body .= '                                            </table>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                                <td width="245" cellpadding="0" cellspacing="0"  valign="center" align="right">';
        $body .= '                                   <table>';
        $body .= '                                       <tr>';
        $body .= '                                           <td> <p style="font-family: Arial, Helvetica, sans-serif; color:#231f20; font-size: 15px; line-height:18px; mso-table-lspace:0; mso-table-rspace:0; margin:0; mso-line-height-rule:exactly;  font-weight:normal; text-align: left;">Just present this coupon upon <br> purchase on participating <br><span style="color:#ed1c24;">Res | Toe | Run</span> or <span style="color:#ed1c24;">R.O.X.</span> Outlet</p>';
        $body .= '                                           </td>';
        $body .= '                                       </tr>';
        $body .= '                                   </table>';
        $body .= '                                </td>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                </td>';
        $body .= '            </tr>';
        $body .= '        </table>';
        $body .= '    </body>';
        $body .= '</html>';
        $message = Swift_Message::newInstance('Raffle Email')
            ->setFrom(array('freewaters.philippines@gmail.com' => 'Freewaters'))
            ->setTo($data['email'])
            ->setBody($body, 'text/html');

        if (!$mailer->send($message, $errors)) {
            $result = "Error:" . $errors;
        } else {
            $result = 'sent';
        }

        return $result;
    }
}
