<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/skins/customer/modules/XC/FastLaneCheckout/select_address/add_button.twig */
class __TwigTemplate_6d28bd7ef089f5572ccbaa0085304d023bd3326dff6ae7ca928f7653253dbfe0 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isAddAddressButtonVisible", [], "method")) {
            // line 8
            echo "<div class=\"add-new-address-button\">
  ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\AddAddressLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add new address"]), "atype" => $this->getAttribute(($context["this"] ?? null), "getAddressType", [], "method"), "saveAndApply" => true]]), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/FastLaneCheckout/select_address/add_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/FastLaneCheckout/select_address/add_button.twig", "");
    }
}
