<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/payment/vnpayredirect.twig */
class __TwigTemplate_bef6dcc467e1e87389aba415054d5ddcaba3959ef933f5d08ef6cad92e3c398a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form action=\"index.php?route=extension/payment/vnpay_payment/checkout\" method=\"post\">
    <div class=\"buttons\">
        <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 4
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/vnpayredirect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/vnpayredirect.twig", "");
    }
}
