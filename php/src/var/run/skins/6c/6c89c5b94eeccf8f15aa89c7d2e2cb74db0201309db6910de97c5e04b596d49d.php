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

/* /var/www/html/skins/common/common/price_parts/price.twig */
class __TwigTemplate_9f99bf0841a582dd392bc86e63c6b055f4c9f1bbd499a8573c1019019d4999b6 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"product-price-base\"><span class=\"price product-price\">";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "formatPrice", [0 => $this->getAttribute(($context["this"] ?? null), "getListPrice", [], "method"), 1 => $this->getAttribute(($context["this"] ?? null), "null", []), 2 => 1], "method");
        echo "</span></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/common/common/price_parts/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/common/common/price_parts/price.twig", "");
    }
}
