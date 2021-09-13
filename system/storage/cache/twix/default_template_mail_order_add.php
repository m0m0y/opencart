<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\mail\order_add.twig */
class default_template_mail_order_add extends Twix_Template
{
    public function __construct($env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    extract($context); ?><!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo @$title ?></title>
        <style>
            html,
            body,
            table,
            tbody,
            tr,
            td,
            div,
            p,
            ul,
            ol,
            li,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin: 0;
                padding: 0;
            }
            body {
                margin: 0;
                padding: 0;
                font-size: 0;
                line-height: 0;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
            table {
                border-spacing: 0;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }
            table td {
                border-collapse: collapse;
            }
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
            /* Outermost container in Outlook.com */
            .ReadMsgBody {
                width: 100%;
            }
            img {
                -ms-interpolation-mode: bicubic;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: Arial;
            }
            h1 {
                font-size: 28px;
                line-height: 32px;
                padding-top: 10px;
                padding-bottom: 24px;
            }
            h2 {
                font-size: 24px;
                line-height: 28px;
                padding-top: 10px;
                padding-bottom: 20px;
            }
            h3 {
                font-size: 20px;
                line-height: 24px;
                padding-top: 10px;
                padding-bottom: 16px;
            }
            p {
                font-size: 16px;
                line-height: 20px;
                font-family: Georgia, Arial, sans-serif;
            }
            </style>
            <style>
                
            .container600 {
                width: 600px;
                max-width: 100%;
            }
            @media all and (max-width: 599px) {
                .container600 {
                    width: 100% !important;
                }
            }
        </style>
    
        <!--[if gte mso 9]>
            <style>
                .ol {
                    width: 100%;
                }
            </style>
        <![endif]-->
    
    </head>
    <body style="background-color:#F4F4F4;">
        <center>
    
            <!--[if gte mso 9]><table width="600" cellpadding="0" cellspacing="0"><tr><td><![endif]-->
            <table class="container600" cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);max-width:calc(680px);margin: 0 auto;">
                <tr>
                    <td width="100%" style="text-align: left;">
                        <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                            <tr>
                                <td style="padding-top: 20px; padding-left: 30px; padding-right: 30px; padding-bottom: 50px; background-color:#FFFFFF;">
                                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                        <tbody>

                                            <tr>
                                                <td style="padding:15px 5px; font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:center;">
                                                    <img src="<?php echo @$logo ?>" alt="<?php echo @$store_name ?>" height="70" />
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:16px;text-align:left;">
                                                    <br /><?php echo @$text_greeting ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 10px;">
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 20px; background-color: #f5f5f5; border-radius: 5px; ">
                                                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <b><?php echo @$text_order_id ?></b> <?php echo @$order_id ?><br />
                                                                    <b><?php echo @$text_date_added ?></b> <?php echo @$date_added ?><br />
                                                                    <b><?php echo @$text_payment_method ?></b> <?php echo @$payment_method ?><br />
                                                                    <?php
        if (@$shipping_method) {
?> 
                                                                        <b><?php echo @$text_shipping_method ?></b> <?php echo @$shipping_method ?>
                                                                    <?php
        }
?>                                                                </td>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <b><?php echo @$text_email ?></b> <?php echo @$email ?><br />
                                                                    <b><?php echo @$text_telephone ?></b> <?php echo @$telephone ?><br />
                                                                    <b><?php echo @$text_ip ?></b> <?php echo @$ip ?><br />
                                                                    <b><?php echo @$text_order_status ?></b> <?php echo @$order_status ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 10px;">
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 20px; background-color: #f5f5f5; border-radius: 5px; ">
                                                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <b><?php echo @$text_payment_address ?></b><br />
                                                                    <?php echo @$payment_address ?>
                                                                </td>
                                                                <?php
        if (@$shipping_address) {
?>                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <b><?php echo @$text_shipping_address ?></b><br>
                                                                    <?php echo @$shipping_address ?>
                                                                </td>
                                                                <?php
        }
?>                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 10px;">
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 20px; background-color: #f5f5f5; border-radius: 5px; ">
                                                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$text_product ?>   
                                                                </td>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$text_model ?>
                                                                </td>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                    <?php echo @$text_quantity ?>
                                                                </td>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                    <?php echo @$text_price ?>
                                                                </td>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                     <?php echo @$text_total ?>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            <?php
        @$save14705 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
?>                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$product["name"] ?> 
                                                                    <?php
?>                                                                    <?php
            @$save77081 = $option            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$product["option"]);
            foreach ($context['_seq'] as $_key => $option) {
?>                                                                    <br />
                                                                    &nbsp;<small> - <?php echo @$option["name"] ?>: <?php echo @$option["value"] ?></small>
                                                                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$option             = $save77081 ?>                                                                </td>
                                                                
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$product["model"] ?>
                                                                </td>
                                                                
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                    <?php echo @$product["quantity"] ?>
                                                                </td>

                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                    <?php echo @$product["price"] ?>
                                                                </td>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                    <?php echo @$product["total"] ?>
                                                                </td>
                                                            </tr>
                                                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save14705 ?>                                                            <?php
        @$save80791 = $voucher        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$vouchers);
        foreach ($context['_seq'] as $_key => $voucher) {
?>                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$voucher["description"] ?>
                                                                </td>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;"></td>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    1
                                                                </td>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$voucher["amount"] ?>
                                                                </td>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$voucher["amount"] ?>
                                                                </td>
                                                            </tr>
                                                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$voucher         = $save80791 ?>                                                        </tbody>
                                                        <tfoot>
                                                            <?php
        @$save67597 = $total        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$totals);
        foreach ($context['_seq'] as $_key => $total) {
?>                                                            <tr>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;" colspan="4">
                                                                    <b><?php echo @$total["title"] ?>:</b>
                                                                </td>
                                                                
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                    <?php echo @$total["text"] ?>
                                                                </td>
                                                            </tr>
                                                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$total         = $save67597 ?>                                                       
                                                            <tr>
                                                                <td style="font-weight: bold; padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;" colspan="4">
                                                                    <b> Reffered by:  </b>
                                                                </td>

                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:right;">
                                                                     <?php
?>                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </td>
                                            </tr>
                                        
                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 10px;">
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 20px; background-color: #f5f5f5; border-radius: 5px; ">
                                                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-weight: bold;padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <b><?php echo @$text_instruction ?></b><br />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$user_comment ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight: bold;padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <b>Mobile Number</b><br />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:left;">
                                                                    <?php echo @$user_mobile ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <?php
        if (@$customer_id) {
?>
                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 10px;">
                                            </tr>

                                            <tr>
                                                <td style="font-family: Arial,sans-serif; font-size: 16px; line-height:30px;text-align:left; padding: 20px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:center;">
                                                                    <?php echo @$text_link ?><br /> <br/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px; font-family: Arial,sans-serif; font-size: 14px; line-height:21px;text-align:center;">
                                                                    <a href="<?php echo @$link ?>" style="background-color: #2d2d2d; color: #ffffff; border-radius: 5px; padding: 15px 20px">Order #<?php echo @$order_id ?></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <?php
        }
?>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if gte mso 9]></td></tr></table><![endif]-->
        </center>
    </body>
    </html><?php
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
