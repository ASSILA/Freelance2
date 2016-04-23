<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7c2144f6da60f820e17f71546b45656bf6fd84c77808602c49cb9d3fcccdf0a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        if ($this->env->isDebug()) {
            // line 2
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")));
}
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        // line 5
        echo "<div class=\"content-wrapper\">
 <section class=\"invoice\">
          <!-- title row -->
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> Mon Profile
                <small class=\"pull-right\">Date: 2/10/2014</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class=\"row invoice-info\">
            <div class=\"col-sm-4 invoice-col\">
              From
              <address>
                <strong>Admin, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (804) 123-5432<br/>
                Email: info@almasaeedstudio.com
              </address>
            </div><!-- /.col -->
            <div class=\"col-sm-4 invoice-col\">
              To
              <address>
                <strong>John Doe</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (555) 539-1037<br/>
                Email: john.doe@example.com
              </address>
            </div><!-- /.col -->
            <div class=\"col-sm-4 invoice-col\">
              <b>Invoice #007612</b><br/>
              <br/>
              <b>Order ID:</b> 4F3S8J<br/>
              <b>Payment Due:</b> 2/22/2014<br/>
              <b>Account:</b> 968-34567
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class=\"row\">
            <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Serial #</th>
                    <th>Description</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Call of Duty</td>
                    <td>455-981-221</td>
                    <td>El snort testosterone trophy driving gloves handsome</td>
                    <td>\$64.50</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Need for Speed IV</td>
                    <td>247-925-726</td>
                    <td>Wes Anderson umami biodiesel</td>
                    <td>\$50.00</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Monsters DVD</td>
                    <td>735-845-642</td>
                    <td>Terry Richardson helvetica tousled street art master</td>
                    <td>\$10.70</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Grown Ups Blue Ray</td>
                    <td>422-568-642</td>
                    <td>Tousled lomo letterpress</td>
                    <td>\$25.99</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class=\"row\">
            <!-- accepted payments column -->
            <div class=\"col-xs-6\">
              <p class=\"lead\">Payment Methods:</p>
              <img src=\"../../dist/img/credit/visa.png\" alt=\"Visa\"/>
              <img src=\"../../dist/img/credit/mastercard.png\" alt=\"Mastercard\"/>
              <img src=\"../../dist/img/credit/american-express.png\" alt=\"American Express\"/>
              <img src=\"../../dist/img/credit/paypal2.png\" alt=\"Paypal\"/>
              <p class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
              </p>
            </div><!-- /.col -->
            <div class=\"col-xs-6\">
              <p class=\"lead\">Amount Due 2/22/2014</p>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <tr>
                    <th style=\"width:50%\">Subtotal:</th>
                    <td>\$250.30</td>
                  </tr>
                  <tr>
                    <th>Tax (9.3%)</th>
                    <td>\$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>\$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>\$265.24</td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class=\"row no-print\">
            <div class=\"col-xs-12\">
              <a href=\"invoice-print.html\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>
              <button class=\"btn btn-success pull-right\"><i class=\"fa fa-credit-card\"></i> Submit Payment</button>
              <button class=\"btn btn-primary pull-right\" style=\"margin-right: 5px;\"><i class=\"fa fa-download\"></i> Generate PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  44 => 4,  41 => 3,  37 => 1,  34 => 2,  11 => 1,);
    }
}
