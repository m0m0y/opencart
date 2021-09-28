<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\form.twig */
class default_template_account_form extends Twix_Template
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
    extract($context); echo @$header ?>
<div class="form container">
    <?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
    <?php
        }
?>    <form class="moy form-horizontal" method="post" action="">
        <div class="col-md-10 col-md-offset-1" style="padding: 30px 5%; background:#eaeaea; border-radius: 10px;">
            <div class="row form-group">
                <div class="col-xs-6"> 
                    <label for="name" class="control-label">Fullname:</label>
                    <input type="text" class="form-control" id="" placeholder="Type Here...">
                </div>

                 <div class="col-xs-6"> 
                    <label for="contactNum" class="control-label">Contact Number:</label>
                    <input type="number" class="form-control" id="" placeholder="Type Here...">
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-xs-6"> 
                    <label for="email" class="control-label">Email:</label>
                    <input type="email" class="form-control" id="" placeholder="your@email.com">
                </div>

                <div class="col-xs-6">
                    <label for="emailConfirmation" class="control-label">Confirm Email:</label>
                    <input type="email" class="form-control" id="" placeholder="your@email.com...">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-xs-6">
                    <label for="company" class="control-label">Company / Organization:</label>
                    <input type="text" class="form-control" id="" placeholder="Type Here...">
                </div>

                <div class="col-xs-6">
                    <label for="designation" class="control-label">Designation:</label>
                    <input type="text" class="form-control" id="" placeholder="Type Here...">
                </div>
            </div>

            <div class="form-group">
                <label for="companyAddress" class="col-sm-2 control-label">Company Address:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Please type complete address...">
                </div>
            </div>

             <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Your Message:</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="" name="" rows="5" cols="50" placeholder="Type your message here..."></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <small class="control-label">Please type this code below: <b><span id="rand"></span></b></small>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    

    <script language="javascript" type="text/javascript">
            const random = (length = 6) => {
            let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let str = "";

            for (let i = 0; i < length; i++) {
                str += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return str;
        };

        document.getElementById("rand").innerHTML = random();
    </script>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/account/form.twig";
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
