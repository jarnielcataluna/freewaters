<?php

require_once 'Swiftmailer/swift_required.php';

class MailerHandler
{
    private $transport;

    public function __construct()
    {
        $this->transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('freewaters.philippines@gmail.com')
            ->setPassword('freewaters123@@')
        ;
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
        $body .= '            .ExternalClass { width: 100%;';
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
        $body .= '                                        <td style="padding:0;"><img src="' . $_SERVER['HTTP_HOST'] . '/images/banner.jpg" alt="" width="100%" style=="display:block;"></td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                                ';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td class="mobile-padding" style="padding: 20px 30px;">';
        $body .= '                                <h1 style="color:#1b1b1b; font-size:24px; line-height: 30px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 20px 0; mso-line-height-rule:exactly; text-align:center; font-weight:normal; ">Thank You participating in our quiz!</h1>';
        $body .= '                                <p style="color:#1b1b1b; font-size:18px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center;">You\'re already entitled to a <span style="color:#a20e1b;">30% discount at Res-Toe-Run and ROX </span> <br>branches when you present this coupon.</p>';
        $body .= '                                <p style="color:#1b1b1b; font-style:italic; font-size:16px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 10px 0; mso-line-height-rule:exactly; text-align:center;">(coupon at the bottom of this email)</p>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                        <!-- <tr>';
        $body .= '                            <td><img src="' . $_SERVER['HTTP_HOST'] . '/images/freewater-logo.jpg" alt="" width="100%" style="display:block;"></td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td>';
        $body .= '                               <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#17b3f6">';
        $body .= '                                   <tr>';
        $body .= '                                       <td style="padding:0px 70px;"><img src="' . $_SERVER['HTTP_HOST'] . '/images/product1.jpg" alt=""></td>';
        $body .= '                                   </tr>';
        $body .= '                               </table> ';
        $body .= '                            </td>';
        $body .= '                        </tr> -->';
        $body .= '                        <!-- <tr><td><img src="' . $_SERVER['HTTP_HOST'] . '/images/howto-join.jpg" alt="" width="100%" style="display:block;"></td></tr> -->';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td><img src="' . $_SERVER['HTTP_HOST'] . '/images/product.jpg" width="100%" style="display:block;"></td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td align="center" style="text-align: center; max-width: 100%; padding: 5px 0;"><a href="https://www.facebook.com/" title="Go to our Facebook Fan Page"  target="_blank"><img src="' . $_SERVER['HTTP_HOST'] . '/images/step.jpg" width="auto" style="display:inline-block;" ></a></td>';
        $body .= '                        </tr>';
        $body .= '                        <tr>';
        $body .= '                            <td align="center" style="text-align: center; max-width: 100%; padding: 5px 0;"><img src="' . $_SERVER['HTTP_HOST'] . '/images/freewater-img.jpg" width="100%"></td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding: 33px;">';
        $body .= '                                <table width="290" cellpadding="0" cellspacing="0" align="left" valign="center" style="border: 2px dashed #de0013;">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:10px; text-align: center;" align="center">';
        $body .= '                                            <img src="' . $_SERVER['HTTP_HOST'] . '/images/res-toe-run.jpg" width="50%" style="display: inline-block; width:48%; vertical-align: top;" alt="">';
        $body .= '                                            <img src="' . $_SERVER['HTTP_HOST'] . '/images/rox.jpg" width="50%" style="display: inline-block; width:48%; vertical-align: top;" alt="">';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:5px 20px 5px 5px;">';
        $body .= '                                            <h2 style="color:#de0013; font-size:20px; line-height: 30px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:normal; text-align: center; ">30% Discount Coupon</h2>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding: 0 0px 20px 0;" align="left">';
        $body .= '                                            <table width="190" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#de0013">';
        $body .= '                                                <tr>';
        $body .= '                                                    <td style="padding:10px 10px; background: #de0013;" align="center">';
        $body .= '                                                        <span style="color:#ffffff; font-size:20px; line-height: 20px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; font-weight:bold; text-align: center; ">' . $data['code'] . '</span>';
        $body .= '                                                    </td>';
        $body .= '                                                </tr>';
        $body .= '                                            </table>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                                <td width="245" cellpadding="0" cellspacing="0"  valign="center" align="right">';
        $body .= '                                   <table>';
        $body .= '                                       <tr>';
        $body .= '                                           <td> <p style="color:#de0013; font-size: 16px; line-height:18px; mso-table-lspace:0; mso-table-rspace:0; margin:0; mso-line-height-rule:exactly;  font-weight:normal; text-align: left;">Just present this coupon purchase on any Res | Toe | Run and ROX branches</p>';
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

        $message = Swift_Message::newInstance('This is an awesome email')
            ->setFrom(array('freewaters.philippines@gmail.com' => 'Awesome Developer'))
            ->setTo($data['email'])
            ->setBody($body, 'text/html');

        if (!$mailer->send($message, $errors)) {
            $result =  "Error:" . $errors;
        }else{
            $result = 'sent';
        }


        return $result;
    }
}
