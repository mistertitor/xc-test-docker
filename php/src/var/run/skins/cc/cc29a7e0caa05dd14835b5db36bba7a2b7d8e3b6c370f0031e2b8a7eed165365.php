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

/* /var/www/html/skins/customer/items_list/product/parts/common.field-product-qty.twig */
class __TwigTemplate_5317cc0e4351b2b840e8dab4476bf69090c7bd2e6e6388818b5516f338ced051 extends \XLite\Core\Templating\Twig\Template
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
        echo "<!--input type=\"text\" name=\"qty[{product.product_id}]\" value=\"\" class=\"product-qty\" /-->
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/items_list/product/parts/common.field-product-qty.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/items_list/product/parts/common.field-product-qty.twig", "");
    }
}
