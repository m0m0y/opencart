<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\information\form.twig */
class default_template_information_form extends Twix_Template
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
<div class="container" style="background-color: #e9e9e9; padding: 45px 0%; border-radius: 20px;">
    <div class="form container">
        <form class="form-horizontal" method="post" action="<?php echo @$action ?>">
            <div class="col-md-10 col-md-offset-1" style="border-radius: 10px;">

                <div class="row form-group">
                    <div class="col-xs-12">
                            <label class="control-label"><b>Please select 1:</b></label>
                            <select class="form-control" name="macy_pan">
                                <option value="1">Lying Type Portable Hyperbaric Oxygen Chamber</option>
                                <option value="2">Sitting Type Portable Hyperbaric Oxygen Chamber</option>
                            </select>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-xs-6"> 
                        <label for="name" class="control-label"><b>Fullname:</b></label>
                        <input type="text" name="name" class="form-control" placeholder="Type Here...">
                        <?php
        if (@$error_name) {
?>                            <div class="text-danger"><?php echo @$error_name ?></div>
                        <?php
        }
?>                    </div>

                    <div class="col-xs-6"> 
                        <label for="contactNum" class="control-label"><b>Contact Number:</b></label>
                        <input type="number" name="contact_num" class="form-control" placeholder="Type Here...">
                        <?php
        if (@$error_contact) {
?>                            <div class="text-danger"><?php echo @$error_contact ?></div>
                        <?php
        }
?>                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-xs-6"> 
                        <label for="email" class="control-label"><b>Email:</b></label>
                        <input type="email" name="email" class="form-control" placeholder="your@email.com">
                        <?php
        if (@$error_email) {
?>                            <div class="text-danger"><?php echo @$error_email ?></div>
                        <?php
        }
?>                    </div>

                    <div class="col-xs-6">
                        <label for="emailConfirmation" class="control-label"><b>Confirm Email:</b></label>
                        <input type="email" name="confirm_email" class="form-control" placeholder="your@email.com...">
                        <?php
        if (@$error_confirmEmail) {
?>                            <div class="text-danger"><?php echo @$error_confirmEmail ?></div>
                        <?php
        }
?>                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="company" class="control-label"><b>Company / Organization:</b></label>
                        <input type="text" name="company" class="form-control" placeholder="Type Here...">
                        <?php
        if (@$error_company) {
?>                            <div class="text-danger"><?php echo @$error_company ?></div>
                        <?php
        }
?>                    </div>

                    <div class="col-xs-6">
                        <label for="designation" class="control-label"><b>Designation:</b></label>
                        <input type="text" name="designation" class="form-control" placeholder="Type Here...">
                        <?php
        if (@$error_designation) {
?>                            <div class="text-danger"><?php echo @$error_designation ?></div>
                        <?php
        }
?>                    </div>
                </div>

                <div class="form-group">
                    <label for="companyAddress" class="col-sm-2 control-label"><b>Company Address:</b></label>
                    <div class="col-sm-10">
                        <input type="text" name="company_add" class="form-control" placeholder="Please type complete address...">
                        <?php
        if (@$error_companyAddress) {
?>                            <div class="text-danger"><?php echo @$error_companyAddress ?></div>
                        <?php
        }
?>                    </div>
                </div>

                <div class="form-group">
                    <label for="enquiry" class="col-sm-2 control-label"><b>Your Message:</b></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="enquiry" rows="5" cols="50" placeholder="Type your enquiry here..."></textarea>
                        <?php
        if (@$error_enquiry) {
?>                            <div class="text-danger"><?php echo @$error_enquiry ?></div>
                        <?php
        }
?>                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" value="<?php echo @$button_submit ?>" class="btn btn-primary" />
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
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/information/form.twig";
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
