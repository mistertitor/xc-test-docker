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

/* /var/www/html/skins/customer/items_list/order/parts/actions.reorder.twig */
class __TwigTemplate_4206116cc56ba3f7474389d7e29b6176d82d6b9a9209a101bf16ee68e4d9e923 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "showReorder", [0 => $this->getAttribute(($context["this"] ?? null), "order", [])], "method")) {
            // line 8
            echo "  <li class=\"reorder\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => "Re-order", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart", "add_order", ["order_number" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "orderNumber", [])]])]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/items_list/order/parts/actions.reorder.twig";
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
        return new Source("", "/var/www/html/skins/customer/items_list/order/parts/actions.reorder.twig", "");
    }
}
