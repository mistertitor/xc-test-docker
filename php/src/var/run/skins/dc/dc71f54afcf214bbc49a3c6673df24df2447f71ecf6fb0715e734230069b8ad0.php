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

/* /var/www/html/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/address_book.twig */
class __TwigTemplate_d3195da21d75a0ddec61332ffdb8d6c860fcb2078dbd8c100ce97389ad570040 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        $context["visibility"] = (($this->getAttribute(($context["this"] ?? null), "isDisplayAddressButton", [], "method")) ? ("") : ("hidden"));
        // line 9
        echo "
<div class=\"checkout_fastlane_block_address-book-button ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["visibility"] ?? null), "html", null, true);
        echo "\" v-show=\"visible\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\AddressBook", "addressType" => $this->getAttribute(($context["this"] ?? null), "getShortAddressType", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Address book"])]]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/address_book.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  38 => 10,  35 => 9,  33 => 8,  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/address_book.twig", "");
    }
}
