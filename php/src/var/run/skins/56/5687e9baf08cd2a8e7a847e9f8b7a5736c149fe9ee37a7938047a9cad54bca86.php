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

/* /var/www/html/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/sku.twig */
class __TwigTemplate_5e233b02f9a78f83229bf45bbcb4d67c244b51540ad91cf8c8097603767b8ea3 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"sku\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["SKU"]), "sortByColumn" => twig_constant("SORT_BY_MODE_SKU", ($context["this"] ?? null))]]), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/sku.twig", "");
    }
}
