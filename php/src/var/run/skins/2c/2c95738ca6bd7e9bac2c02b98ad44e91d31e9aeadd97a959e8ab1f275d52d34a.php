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

/* /var/www/html/skins/customer/modules/CDev/Paypal/item_list/product/parts/paypal_commerce_platform.twig */
class __TwigTemplate_1d27403b35fa9cb8c3c1a7f898587d2e4283620a3b9fa09f52adf45babb85957 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAdd2CartButton", [], "method")) {
            // line 7
            echo "  ";
            if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isAllStockInCart", [], "method")) {
                // line 8
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\CDev\\Paypal\\View\\Button\\ProductList\\PaypalCommercePlatform", "productId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", [])]]), "html", null, true);
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/CDev/Paypal/item_list/product/parts/paypal_commerce_platform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/CDev/Paypal/item_list/product/parts/paypal_commerce_platform.twig", "");
    }
}
