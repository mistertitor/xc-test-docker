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

/* /var/www/html/skins/admin/profiles/parts/search_form/date_type.logged.twig */
class __TwigTemplate_7a145b7879b3fd8a1794f4b58c992799975a73ee7031758574354e114def2c8e extends \XLite\Core\Templating\Twig\Template
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
<li class=\"date-type-l\">
  <input type=\"radio\" name=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "fieldName", []), "html", null, true);
        echo "\" value=\"L\" id=\"date_type_l\" ";
        if ($this->getAttribute(($context["this"] ?? null), "isDateTypeSelected", [0 => "L"], "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"date_type_l\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Last logged in"]), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/admin/profiles/parts/search_form/date_type.logged.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  34 => 8,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/admin/profiles/parts/search_form/date_type.logged.twig", "");
    }
}
