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

/* /var/www/html/skins/customer/modules/XC/Geolocation/location_popup/parts/address.state.twig */
class __TwigTemplate_f1b068c0bdf1c4765dd09b688fcf3967de0cb45cf7b26d1247b8a89b5a1ff4d0 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"state\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\State", "fieldName" => "address_state", "value" => $this->getAttribute(($context["this"] ?? null), "getState", [], "method"), "style" => "field-required", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["State"]), "required" => "true", "country" => $this->getAttribute(($context["this"] ?? null), "getCountryCode", [], "method")]]), "html", null, true);
        echo "
</li>

<li class=\"state\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "address_custom_state", "value" => $this->getAttribute(($context["this"] ?? null), "getOtherState", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["State"])]]), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/Geolocation/location_popup/parts/address.state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  34 => 8,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/Geolocation/location_popup/parts/address.state.twig", "");
    }
}
