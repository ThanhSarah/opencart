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

/* extension/payment/vnpay_payment.twig */
class __TwigTemplate_9322ee3463f5afda59b94d030b089f25bf8107d1b44d26fd034ba9ea304537b5 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>

        <div class=\"heading\">
            <img src=\"view/image/payment/vnpay.png\" alt=\"\" />
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 26
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
                    
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-merchant\">";
        // line 34
        echo ($context["entry_merchant"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"payment_vnpay_payment_merchant\" value=\"";
        // line 36
        echo ($context["payment_vnpay_payment_merchant"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant"] ?? null);
        echo "\" id=\"input-merchant\" class=\"form-control\" />
                    </div>
                </div>
                    
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-accesscode\">";
        // line 41
        echo ($context["entry_access_code"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"payment_vnpay_payment_access_code\" value=\"";
        // line 43
        echo ($context["payment_vnpay_payment_access_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_code"] ?? null);
        echo "\" id=\"input-accesscode\" class=\"form-control\" />
                    </div>
                </div>
                    
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-secretkey\">";
        // line 48
        echo ($context["entry_secretkey"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"payment_vnpay_payment_secretkey\" value=\"";
        // line 50
        echo ($context["payment_vnpay_payment_secretkey"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_secretkey"] ?? null);
        echo "\" id=\"input-secretkey\" class=\"form-control\" />
                    </div>
                </div>
                    
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-url\">";
        // line 55
        echo ($context["entry_url"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"payment_vnpay_payment_url\" value=\"";
        // line 57
        echo ($context["payment_vnpay_payment_url"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_url"] ?? null);
        echo "\" id=\"input-url\" class=\"form-control\" />
                    </div>
                </div>
                    
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 62
        echo ($context["entry_pending_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"payment_vnpay_payment_order_pending_status_id\" id=\"input-order-status\" class=\"form-control\">
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 66
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 66) == ($context["payment_vnpay_payment_order_pending_status_id"] ?? null))) {
                // line 67
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 67);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 67);
                echo "</option>
                            ";
            } else {
                // line 69
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 69);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 69);
                echo "</option>
                            ";
            }
            // line 71
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </select>
                    </div>
                </div>
                    
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 77
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"payment_vnpay_payment_order_failed_status_id\" id=\"input-order-status\" class=\"form-control\">
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 81
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 81) == ($context["payment_vnpay_payment_order_failed_status_id"] ?? null))) {
                // line 82
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 82);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 82);
                echo "</option>
                            ";
            } else {
                // line 84
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 84);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 84);
                echo "</option>
                            ";
            }
            // line 86
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                        </select>
                    </div>
                        
                </div>
                        
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 93
        echo ($context["entry_completed_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"payment_vnpay_payment_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 97
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 97) == ($context["payment_vnpay_payment_order_status_id"] ?? null))) {
                // line 98
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 98);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 98);
                echo "</option>
                            ";
            } else {
                // line 100
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 100);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 100);
                echo "</option>
                            ";
            }
            // line 102
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </select>
                    </div>
                </div>\t

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 108
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_vnpay_payment_status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 111
        if (($context["payment_vnpay_payment_status"] ?? null)) {
            // line 112
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 113
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 115
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 116
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 118
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 123
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_vnpay_payment_sort_order\" value=\"";
        // line 125
        echo ($context["payment_vnpay_payment_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 133
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/vnpay_payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 133,  339 => 125,  334 => 123,  327 => 118,  322 => 116,  317 => 115,  312 => 113,  307 => 112,  305 => 111,  299 => 108,  292 => 103,  286 => 102,  278 => 100,  270 => 98,  267 => 97,  263 => 96,  257 => 93,  249 => 87,  243 => 86,  235 => 84,  227 => 82,  224 => 81,  220 => 80,  214 => 77,  207 => 72,  201 => 71,  193 => 69,  185 => 67,  182 => 66,  178 => 65,  172 => 62,  162 => 57,  157 => 55,  147 => 50,  142 => 48,  132 => 43,  127 => 41,  117 => 36,  112 => 34,  106 => 31,  100 => 28,  96 => 26,  88 => 22,  86 => 21,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/vnpay_payment.twig", "");
    }
}
