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

/* extension/module/vqmod_manager.twig */
class __TwigTemplate_2716222b0c555f47fbf77f22c34a3533644dc19dbb4d0db18f2ade6e00e32241 extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button onclick=\"\$('#form').submit();\" type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>

            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>


    <div class=\"container-fluid\">
        ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        
        ";
        }
        // line 26
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["heading_description"] ?? null);
        echo "</h3>
                <div class=\"donation-info \"><h4>";
        // line 30
        echo ($context["heading_donation_description"] ?? null);
        echo "<a href=\"https://paypal.me/MGrobberio\" target=\"_blank\"> ";
        echo ($context["donation_description"] ?? null);
        echo "</a></h4></div>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">

                    <ul class=\"nav nav-tabs\">

                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-scripts\">";
        // line 37
        echo ($context["tab_scripts"] ?? null);
        echo "</a></li>
                        <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-settings\">";
        // line 38
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
                        <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-error\">";
        // line 39
        echo ($context["tab_error_log"] ?? null);
        echo "</a></li>
                        <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-about\">";
        // line 40
        echo ($context["tab_about"] ?? null);
        echo "</a></li>
                    </ul>

                    <div class=\"tab-content\">
                        ";
        // line 44
        if ((($context["vqmod_is_installed"] ?? null) == true)) {
            // line 45
            echo "                        <div id=\"tab-scripts\" class=\"tab-pane active\">

                            <div class=\"table-responsive\">
                                <table class=\"vqmm-list table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                     <th class=\"left\">";
            // line 51
            echo ($context["column_file_name"] ?? null);
            echo "<hr /><i>";
            echo ($context["column_id"] ?? null);
            echo "</i></th>
                                    <th class=\"center\">";
            // line 52
            echo ($context["column_version"] ?? null);
            echo "</th>
                                    <th class=\"center\">";
            // line 53
            echo ($context["column_vqmver"] ?? null);
            echo "</th>
                                    <th class=\"center\">";
            // line 54
            echo ($context["column_author"] ?? null);
            echo "</th>
                                    <th class=\"center\">";
            // line 55
            echo ($context["column_status"] ?? null);
            echo "</th>
                                    <th class=\"center\">";
            // line 56
            echo ($context["column_action"] ?? null);
            echo "</th>
                                    <th class=\"center\">";
            // line 57
            echo ($context["column_delete"] ?? null);
            echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 61
            if (($context["vqmods"] ?? null)) {
                // line 62
                echo "                                        ";
                $context["class"] = "row-odd";
                // line 63
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vqmods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["vqmod"]) {
                    // line 64
                    echo "
                                        ";
                    // line 65
                    if ((($context["class"] ?? null) == "row-even")) {
                        // line 66
                        echo "                                            ";
                        $context["class"] = "row-odd";
                        // line 67
                        echo "                                        ";
                    } else {
                        // line 68
                        echo "                                            ";
                        $context["class"] = "row-even";
                        // line 69
                        echo "                                        ";
                    }
                    // line 70
                    echo "                                        <tr class=\"";
                    echo ($context["class"] ?? null);
                    echo "\">
                                            <td class=\"left\"><strong>";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "file_name", [], "any", false, false, false, 71);
                    echo "</strong><br /><div class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "id", [], "any", false, false, false, 71);
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "invalid_xml", [], "any", false, false, false, 71);
                    echo "</div></td>
                                            <td class=\"center\">";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "version", [], "any", false, false, false, 72);
                    echo "</td>
                                            <td class=\"center\">";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "vqmver", [], "any", false, false, false, 73);
                    echo "</td>
                                            <td class=\"center\">";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "author", [], "any", false, false, false, 74);
                    echo "</td>
                                            <td class=\"center\">";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "status", [], "any", false, false, false, 75);
                    echo "</td>
                                            <td class=\"action\">";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vqmod"], "action", [], "any", false, false, false, 76));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        echo " 
                                                ";
                        // line 77
                        if ((twig_get_attribute($this->env, $this->source, $context["vqmod"], "status", [], "any", false, false, false, 77) == "Enabled")) {
                            // line 78
                            echo "                                                <a title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["action"], "text", [], "any", false, false, false, 78);
                            echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 78);
                            echo "\"><i class=\"fa fa-minus-circle\"></i></a>
                                                ";
                        } else {
                            // line 79
                            echo " 
                                                <a title=\"";
                            // line 80
                            echo twig_get_attribute($this->env, $this->source, $context["action"], "text", [], "any", false, false, false, 80);
                            echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 80);
                            echo "\"><i class=\"fa fa-plus-circle\" ></i></a>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</td>
                                            <td class=\"action\">
                                                <a title=\"";
                    // line 82
                    echo ($context["text_delete"] ?? null);
                    echo "\" class=\"btn btn-danger\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod"], "delete", [], "any", false, false, false, 82);
                    echo "\" data-toggle=\"tooltip\"><i class=\"fa fa-trash-o\"></i></a></td>
                                        </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vqmod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                                         ";
            } else {
                // line 86
                echo "                                        <tr>
                                            <td class=\"center\" colspan=\"7\">";
                // line 87
                echo ($context["text_no_results"] ?? null);
                echo "</td>
                                        </tr>
                                        ";
            }
            // line 90
            echo "                                    </tbody>
                                </table>
                                <table class=\"form table table-bordered table-hover\">
                                    <tr>
                                        <td class=\"text-left\">";
            // line 94
            echo ($context["entry_upload"] ?? null);
            echo "&nbsp;<input data-toggle=\"tooltip\" title=\"";
            echo ($context["entry_upload"] ?? null);
            echo "\" class=\"btn\" type=\"file\" name=\"vqmod_file\" /><input class=\"button btn-success\" type=\"submit\" title=\"";
            echo ($context["text_upload"] ?? null);
            echo "\" name=\"upload\" data-toggle=\"tooltip\" value=\"";
            echo ($context["text_upload"] ?? null);
            echo "\" /></td>
                                    </tr>
                                </table>
                            </div>           
                        </div>

                       
                        <div id=\"tab-settings\" class=\"tab-pane\">
                         <div class=\"table-responsive\">
                            <table class=\"form table table-bordered table-hover\">
                                <tr>
                                    <td class=\"text-left\">";
            // line 105
            echo ($context["entry_vqcache"] ?? null);
            echo "<br /><span class=\"help\">";
            echo ($context["text_vqcache_help"] ?? null);
            echo "</span></td>
                                    <td class=\"text-left\">
                                        <select multiple=\"multiple\" size=\"7\" id=\"vqcache\">
                                            ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vqcache"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vqcache_file"]) {
                // line 109
                echo "                                            <option>";
                echo $context["vqcache_file"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vqcache_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                        </select><br />
                                        <a href=\"";
            // line 112
            echo ($context["clear_vqcache"] ?? null);
            echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\"  title=\"";
            echo ($context["button_clear"] ?? null);
            echo "\"><span><i class=\"fa fa-trash-o\">";
            echo (" " . ($context["button_clear"] ?? null));
            echo "</i></span></a>
                                        ";
            // line 113
            if (($context["ziparchive"] ?? null)) {
                // line 114
                echo "                                        <a href=\"";
                echo ($context["download_vqcache"] ?? null);
                echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\"  title=\"";
                echo ($context["button_vqcache_dump"] ?? null);
                echo "\"><span><i class=\"fa fa-trash-o\">";
                echo (" " . ($context["button_vqcache_dump"] ?? null));
                echo "</i></span></a>
                                        ";
            }
            // line 116
            echo "                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 119
            echo ($context["entry_backup"] ?? null);
            echo "</td>
                                    ";
            // line 120
            if (($context["ziparchive"] ?? null)) {
                // line 121
                echo "                                    <td class=\"text-left\"><a data-toggle=\"tooltip\" title=\"";
                echo ($context["button_backup"] ?? null);
                echo "\" href=\"";
                echo ($context["download_scripts"] ?? null);
                echo "\" class=\"btn btn-primary\"><span><i class=\"fa fa-save\">";
                echo (" " . ($context["button_backup"] ?? null));
                echo "</i></span></a></td>
                                    ";
            } else {
                // line 123
                echo "                                    <td class=\"text-left\">";
                echo ($context["error_ziparchive"] ?? null);
                echo "</td>
                                    ";
            }
            // line 125
            echo "                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 127
            echo ($context["entry_vqmod_path"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 128
            echo ($context["vqmod_path"] ?? null);
            echo "</td>
                                </tr>
                                ";
            // line 130
            if (($context["vqmod_vars"] ?? null)) {
                // line 131
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vqmod_vars"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["vqmod_var"]) {
                    // line 132
                    echo "                                <tr>
                                    <td class=\"text-left\">";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod_var"], "setting", [], "any", false, false, false, 133);
                    echo "</td>
                                    <td class=\"text-left\">";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["vqmod_var"], "value", [], "any", false, false, false, 134);
                    echo "</td>
                                </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vqmod_var'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 137
            echo "
                            </table>
                        </div>
                        </div>
                        
                        <div id=\"tab-error\" class=\"tab-pane\">
                             <div class=\"table-responsive\">
                            <table class=\"form table table-bordered table-hover\">
                                <tr>
                                    <td class=\"text-left\"><textarea rows=\"20\" cols=\"90\" id=\"error-log\">";
            // line 146
            echo ($context["log"] ?? null);
            echo "</textarea>
                                        <div class=\"right\">";
            // line 147
            if (($context["ziparchive"] ?? null)) {
                echo "<a data-toggle=\"tooltip\" title=\"";
                echo ($context["button_download_log"] ?? null);
                echo "\" href=\"";
                echo ($context["download_log"] ?? null);
                echo "\" class=\"btn btn-primary\"><span><i class=\"fa fa-save\">";
                echo (" " . ($context["button_download_log"] ?? null));
                echo "</i></span></a>";
            }
            echo " <a data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear"] ?? null);
            echo "\" href=\"";
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><span><i class=\"fa fa-trash-o\">";
            echo (" " . ($context["button_clear"] ?? null));
            echo "</i></span></a></div></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        
                        <div id=\"tab-about\" class=\"tab-pane\">
                             <div class=\"table-responsive\">
                            <table class=\"form table table-bordered table-hover\">
                                <tr>
                                    <td class=\"text-left\">";
            // line 157
            echo ($context["entry_ext_version"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 158
            echo ($context["vqmod_manager_version"] ?? null);
            echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 161
            echo ($context["entry_author"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 162
            echo ($context["vqmod_manager_author"] ?? null);
            echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 165
            echo ($context["entry_website"] ?? null);
            echo "</td>
                                    <td class=\"text-left\"><a class=\"about\" href=\"https://peotus.github.io/\" target=\"_blank\">https://peotus.github.io/</a></td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 169
            echo ($context["entry_ext_store"] ?? null);
            echo "</td>
                                    <td class=\"text-left\"><a class=\"about\" href=\"https://peotus.github.io/\">https://peotus.github.io/</a></td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 173
            echo ($context["entry_forum"] ?? null);
            echo "</td>
                                    <td class=\"text-left\"><a class=\"\" target=\"_blank\"></a></td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 177
            echo ($context["entry_license"] ?? null);
            echo "</td>
                                    <td class=\"text-left\"><a class=\"about\" href=\"http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode\" target=\"_blank\">";
            // line 178
            echo ($context["vqmod_manager_license"] ?? null);
            echo "</a></td>
                                </tr>
                                <tr>
                                    <td class=\"text-left\">";
            // line 181
            echo ($context["entry_attribution"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 182
            echo ($context["text_attribution"] ?? null);
            echo "</td>
                                </tr>
                            </table>
                        </div>
                        </div>
                
                 ";
        } else {
            // line 189
            echo "                <span>";
            echo ($context["vqmod_installation_error"] ?? null);
            echo "</span>
                ";
        }
        // line 191
        echo "            </div>
        </div>
        </div>
        </div>
        </div>

        <script type=\"text/javascript\">
            \$(document).ready(function () {
                // Confirm Delete
                \$('a').click(function () {
                    if (\$(this).attr('href') != null && \$(this).attr('href').indexOf('delete', 1) != -1) {
                        if (!confirm('";
        // line 202
        echo ($context["warning_vqmod_delete"] ?? null);
        echo "')) {
                            return false;
                        }
                    }
                });

                // Confirm vqmod_opencart.xml Uninstall
                \$('a').click(function () {
                    if (\$(this).attr('href') != null && \$(this).attr('href').indexOf('vqmod_opencart', 1) != -1 && \$(this).attr('href').indexOf('uninstall', 1) != -1) {
                        if (!confirm('";
        // line 211
        echo ($context["warning_required_uninstall"] ?? null);
        echo "')) {
                            return false;
                        }
                    }
                });

                // Confirm vqmod_opencart.xml Delete
                \$('a').click(function () {
                    if (\$(this).attr('href') != null && \$(this).attr('href').indexOf('vqmod_opencart', 1) != -1 && \$(this).attr('href').indexOf('delete', 1) != -1) {
                        if (!confirm('";
        // line 220
        echo ($context["warning_required_delete"] ?? null);
        echo "')) {
                            return false;
                        }
                    }
                });
            });
        </script>

  <script type=\"text/javascript\"><!--
\$('#tabs a:first').tab('show');
var subtitle =\$('.panel-title').html()
//--></script>

<script src=\"http://cdn.pubnub.com/pubnub-3.15.2.min.js\">
</script>
       
";
        // line 236
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/vqmod_manager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 236,  576 => 220,  564 => 211,  552 => 202,  539 => 191,  533 => 189,  523 => 182,  519 => 181,  513 => 178,  509 => 177,  502 => 173,  495 => 169,  488 => 165,  482 => 162,  478 => 161,  472 => 158,  468 => 157,  441 => 147,  437 => 146,  426 => 137,  416 => 134,  412 => 133,  409 => 132,  404 => 131,  402 => 130,  397 => 128,  393 => 127,  389 => 125,  383 => 123,  373 => 121,  371 => 120,  367 => 119,  362 => 116,  352 => 114,  350 => 113,  342 => 112,  339 => 111,  330 => 109,  326 => 108,  318 => 105,  298 => 94,  292 => 90,  286 => 87,  283 => 86,  280 => 85,  269 => 82,  256 => 80,  253 => 79,  245 => 78,  243 => 77,  237 => 76,  233 => 75,  229 => 74,  225 => 73,  221 => 72,  213 => 71,  208 => 70,  205 => 69,  202 => 68,  199 => 67,  196 => 66,  194 => 65,  191 => 64,  186 => 63,  183 => 62,  181 => 61,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  148 => 51,  140 => 45,  138 => 44,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  112 => 33,  104 => 30,  100 => 29,  95 => 26,  86 => 21,  84 => 20,  76 => 14,  65 => 12,  61 => 11,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/vqmod_manager.twig", "");
    }
}
