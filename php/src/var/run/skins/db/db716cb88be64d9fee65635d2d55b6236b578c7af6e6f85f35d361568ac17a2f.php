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

/* /var/www/html/skins/admin/browse_server/parts/item.name.twig */
class __TwigTemplate_3433a8e487b34b6fc45e6b928e03e526acd85e98551b79427bf6af964c76994a extends \XLite\Core\Templating\Twig\Template
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
        echo "<a class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemClass", [0 => $this->getAttribute(($context["this"] ?? null), "entry", [])], "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entry", []), "fullName", []), "html", null, true);
        echo "\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entry", []), "type", []), "html", null, true);
        echo "\" /><span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entry", []), "name", []), "html", null, true);
        echo "</span></a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/browse_server/parts/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Source("", "/var/www/html/skins/admin/browse_server/parts/item.name.twig", "");
    }
}
