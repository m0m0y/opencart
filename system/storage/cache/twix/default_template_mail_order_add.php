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
    extract($context);         echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title><?php echo \$title; ?></title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"<?php echo \$store_url; ?>\" title=\"<?php echo \$store_name; ?>\"><img src=\"<?php echo \$logo; ?>\" alt=\"<?php echo \$store_name; ?>\" style=\"margin-bottom: 20px; border: none;\" /></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><?php echo \$text_greeting; ?></p>
  <?php if (\$customer_id) { ?>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><?php echo \$text_link; ?></p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"<?php echo \$link; ?>\"><?php echo \$link; ?></a></p>
  <?php } ?>
  <?php if (\$download) { ?>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><?php echo \$text_download; ?></p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"<?php echo \$download; ?>\"><?php echo \$download; ?></a></p>
  <?php } ?>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\"><?php echo \$text_order_detail; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan=\"2\" style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b><?php echo \$text_order_id; ?></b> <?php echo \$order_id; ?><br />
          <b>qweqwe</b> qweqwe<br />
          <b>qweqwe</b> qweqwe<br />
         <?php if(\$payment_method == 'Bank Transfer') { ?>
                <h4>Scan to pay</h4>
                <img src=\"https://inmed.com.ph/static/assets/gcash.png\" style=\"width:300px\"><br />
          <?php } ?>
          <?php if (\$shipping_method) { ?>
          <b>qweqwe</b> qweqwe 
          <?php } ?>
          <br/>
          <?php if(\$shipping_method == 'Pickup From Store') {?>
          <span><b>5 Calle Industria, Bagumbayan</b></span><br />
          <span><b>Quezon City</b></span><br />
          <span><b>0917-814-6633</b></span>
          <?php }?></td>
      </tr>
      <tr>
        <td colspan=\"2\" style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">
          <b>qweqwe</b>qweqwe<br />
          <b>qweqwe</b> qweqwe<br />
          <b>qweqwe</b> qweqwe<br />
          <b>qweqwe</b> qweqwe</td>
      </tr>
    </tbody>
  </table>
  <?php if (\$comment) { ?>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\"><?php echo \$text_instruction; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><?php echo \$comment; ?></td>
      </tr>
    </tbody>
  </table>
  <?php } ?>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\"><?php echo \$text_payment_address; ?></td>
        <?php if (\$shipping_address) { ?>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\"><?php echo \$text_shipping_address; ?></td>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><?php echo \$payment_address; ?></td>
        <?php if (\$shipping_address) { ?>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><?php echo \$shipping_address; ?></td>
        <?php } ?>
      </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\"></td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\"><?php echo \$text_product; ?></td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\"><?php echo \$text_model; ?></td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\"><?php echo \$text_quantity; ?></td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\"><?php echo \$text_price; ?></td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\"><?php echo \$text_total; ?></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach (\$products as \$product) { ?>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">
          <center><img src=\"<?php echo \$product['image']; ?>\" height=\"65\"></center>
        </td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><?php echo \$product['name']; ?>
          <?php foreach (\$product['option'] as \$option) { ?>
          <br />
          &nbsp;<small> - <?php echo \$option['name']; ?>: <?php echo \$option['value']; ?></small>
          <?php } ?></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><?php echo \$product['model']; ?></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><?php echo \$product['quantity']; ?></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><?php echo \$product['price']; ?></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><?php echo \$product['total']; ?></td>
      </tr>
      <?php } ?>
      <?php foreach (\$vouchers as \$voucher) { ?>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><?php echo \$voucher['description']; ?></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">1</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><?php echo \$voucher['amount']; ?></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><?php echo \$voucher['amount']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
    <tfoot>
    <?php  foreach (\$totals as \$total) { ?>
    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"5\">
        <b><?php echo \$total['title']; ?>:</b>
      </td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><?php echo \$total['text']; ?></td>
    </tr>
    <?php } ?>
    </tfoot>
  </table>

  <?php if (\$payment_method == 'Online Banking / E-Wallet' || \$payment_method == 'Over the Counter / ATM Banking' || \$payment_method == 'Over the Counter / Others'){ ?>

   <a href=\"<?php echo \$paylink ?>\" style=\"color: #fff; text-decoration: none;\"><span class=\"btn\" style=\"padding: 13px 17px; background-color: #0d3e7c;\">Click here to pay</span></a>
 
  <?php } ?>


  <p style=\"margin-top: 100px; margin-bottom: 20px;\"><?php echo \$text_footer; ?></p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_add.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
