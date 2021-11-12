<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\checkout\payment_method.twig */
class default_template_checkout_payment_method extends Twix_Template
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
    extract($context); ?><style>
label .banks_name{
  padding-left: 2%
}

@media (max-width: 991px) {
  label .banks_name{
      padding-left: 1%; 
      font-size: 10px;
  }
}
</style>

<?php
        if (@$error_warning) {
?>  <div class="alert alert-warning alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
<?php
        }
?>
<?php
        if (@$payment_methods) {
?>  <p><?php echo @$text_payment_method ?></p>
  <?php
            @$save31458 = $payment_method            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$payment_methods);
            foreach ($context['_seq'] as $_key => $payment_method) {
?>    <div class="radio" style="border: 1px solid #00000030; padding: 10px; border-radius: 5px;">
      <label>
        <?php
                if (((@$payment_method["code"] == @$code) ||  !@$code)) {
?>          <?php
                    $code = @$payment_method["code"] ?>          <input class="form-check-input" type="radio" id="<?php echo @$payment_method["code"] ?>" onchange="selectpayment(this)" name="payment_method" value="<?php echo @$payment_method["code"] ?>" checked="checked" />
          <?php
                } else {
?>          <input class="form-check-input" type="radio" id="<?php echo @$payment_method["code"] ?>" onchange="selectpayment(this)" name="payment_method" value="<?php echo @$payment_method["code"] ?>" /> <?php
                    if ((@$payment_method["code"] == "dragonpay")) {
?> <img class="asd" src="http://localhost/opencart/image/banks/bdo.png" style="float: right;">  <?php
                    }
?>          <?php
                }
?>
          <?php echo @$payment_method["title"] ?>

          <?php
                if ((@$payment_method["code"] == "dragonpay")) {
?>            <div class="row container bank_lists" style="max-width: 100%;" id="dragonpay_div"> 
              <div class="">
                <section class="col-md-4 col-sm-12"> 
                  <h4 style="color: #2e759d;">Online Banking / E-Wallet</h4>
                  <div class="payment-container">

                   <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/bdo.png" style="">
                      <label class="banks_name">BDO Internet Banking</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/bpi.png" style="">
                      <label class="banks_name">BPI Online/Mobile </label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/chinabank.png" style="">
                      <label class="banks_name">Chinabank Online Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/landbank.png" style="">
                      <label class="banks_name">Landbank ATM Online</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/maybank.png" style="">
                      <label class="banks_name">Maybank Online Banking</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/metrobank.png" style="">
                      <label class="banks_name">Metrobankdirect</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/psbank.png" style="">
                      <label class="banks_name">PSBank Online</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/RCBC.png" style="">
                      <label class="banks_name">RCBC Online Banking</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/securitybank.png" style="">
                      <label class="banks_name">Security Bank Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/UCPB.png" style="">
                      <label class="banks_name">UCPB Connect/Mobile</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/ub.png" style="">
                      <label class="banks_name" style="padding-left: 2%;">Unionbank Internet Banking</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/tayocash.png" style="">
                      <label class="banks_name">TayoCash</label>
                    </div>

                  </div>
                </section>

                <section class="col-md-4 col-sm-12"> 
                  <h4 style="color: #2e759d;">Over the counter / ATM Banking </h4>
                  <div class="payment-container">

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/AUB.png" style="">
                      <label class="banks_name">AUB Online/Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/BDO.png" style="">
                      <label class="banks_name">BDO Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/BDO.png" style="">
                      <label class="banks_name">BDO (ONB) Cash Dep</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/BPI.png" style="">
                      <label class="banks_name">BPI Bills Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/chinabank.png" style="">
                      <label class="banks_name">Chinabank Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/landbank.png" style="">
                      <label class="banks_name">Landbank Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/metrobank.png" style="">
                      <label class="banks_name">Metrobank Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/pnb.png" style="">
                      <label class="banks_name">PNB Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/pnb.png" style="">
                      <label class="banks_name">PNB e-Banking Bills Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/RCBC.png" style="">
                      <label class="banks_name">RCBC ATM/Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/securitybank.png" style="">
                      <label class="banks_name">Security Bank ATM Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/securitybank.png" style="">
                      <label class="banks_name">Security Bank Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/UCPB.png" style="">
                      <label class="banks_name">UCPB ATM/Cash Payment</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/ub.png" style="">
                      <label class="banks_name">Unionbank Cash Payment</label>
                    </div>

                  </div>
                </section>
                
                <section class="col-md-4 col-sm-12"> 
                  <h4 style="color: #2e759d;">Over the Counter / Others </h4>
                  <div class="payment-container"> 

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/bayadcenter.png" style="">
                      <label class="banks_name">Bayad Center</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/paymaya.png" style="">
                      <label class="banks_name">PayMaya</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/gcash.png" style="">
                      <label class="banks_name">GCash/Payment Centers</label>
                    </div>

                    <div style="margin-bottom: 2px;">
                      <img src="http://localhost/opencart/image/banks/GrabPay.png" style="">
                      <label class="banks_name">GrabPay</label>
                    </div>

                  </div>
                </section>
              </div>
            </div>
          <?php
                }
?>
          <?php
                if (@$payment_method["terms"]) {
?>          (<?php echo @$payment_method["terms"] ?>)
        <?php
                }
?> 
      </label>
    </div>
    
  <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$payment_method             = $save31458;
        }
?>
<p><strong><?php echo @$text_comments ?></strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"><?php echo @$comment ?></textarea>
</p>
<?php
        if (@$text_agree) {
?><div class="buttons">
  <div class="pull-right"><?php echo @$text_agree ?>
    <?php
            if (@$agree) {
?>    <input type="checkbox" name="agree" value="1" checked="checked" />
    <?php
            } else {
?>    <input type="checkbox" name="agree" value="1" />
    <?php
            }
?>    
    &nbsp;
    <input type="button" value="<?php echo @$button_continue ?>" id="button-payment-method" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
  </div>
</div>
<?php
        } else {
?><div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo @$button_continue ?>" id="button-payment-method" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
  </div>
</div>
<?php
        }
?> 

<script>
  $(document).ready(function(){
     $('.asd').show();
    $('.bank_lists').hide();
  });

  function selectpayment(element){
    var id = "#" + $(element).attr("id");
    var value= $(id).val();

    if (value == "dragonpay"){
      $('.bank_lists').fadeToggle(600);
      $('.asd').hide();
    }
    else{
       $('.bank_lists').hide();
        $('.asd').show();
    }
  }


</script><?php
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_method.twig";
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
