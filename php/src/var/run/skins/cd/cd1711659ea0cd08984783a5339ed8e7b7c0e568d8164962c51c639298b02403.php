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

/* common/tabber.twig */
class __TwigTemplate_08b070fafe5a9c723919cf063faab2a8d8a9728b0dc5a1aa79771fbcaa8f1c38 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        if ($this->getAttribute(($context["this"] ?? null), "getTabberPages", [], "method")) {
            // line 5
            echo "  <div class=\"tabber tabbed-content-wrapper\">
    <div class=\"tabs-container\">
  
      ";
            // line 8
            if ($this->getAttribute(($context["this"] ?? null), "isTabsNavigationVisible", [], "method")) {
                // line 9
                echo "        <div class=\"page-tabs\">
    
          <ul>
            ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getTabberPages", [], "method"));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tabPage"]) {
                    // line 13
                    echo "              <li class=\"tab";
                    if ($this->getAttribute($context["tabPage"], "selected", [])) {
                        echo "-current";
                    }
                    if ($this->getAttribute($context["tabPage"], "subTabs", [])) {
                        echo " has-subtabs";
                    }
                    echo " tabkey-";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tabPage"], "key", []), "html", null, true);
                    echo "\">";
                    if ($this->getAttribute($context["tabPage"], "linkTemplate", [])) {
                        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute($context["tabPage"], "linkTemplate", []));                        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                        if ($templateWrapperText) {
echo $templateWrapperStart;
}

                        $this->loadTemplate($this->getAttribute($context["tabPage"], "linkTemplate", []), "common/tabber.twig", 13)->display($context);
                        if ($templateWrapperText) {
                            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                        }
                    } else {
                        echo "<a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tabPage"], "url", []), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($context["tabPage"], "title", []);
                        echo "</a>";
                    }
                    // line 14
                    echo "                ";
                    if ($this->getAttribute($context["tabPage"], "subTabs", [])) {
                        // line 15
                        echo "                    <span class=\"fa fa-angle-down\"></span>
                    <ul class=\"subtabs\">
                        ";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tabPage"], "subTabs", []));
                        foreach ($context['_seq'] as $context["subTabKey"] => $context["subTab"]) {
                            // line 18
                            echo "                            <li class=\"subtab tabkey-";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["subTabKey"], "html", null, true);
                            echo "\"><a href=\"";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["subTab"], "url", []), "html", null, true);
                            echo "\">";
                            echo $this->getAttribute($context["subTab"], "title", []);
                            echo "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['subTabKey'], $context['subTab'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "                    </ul>
                ";
                    }
                    // line 22
                    echo "              </li>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabPage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "          </ul>
          ";
                // line 25
                if ($this->getAttribute(($context["this"] ?? null), "isViewListVisible", [0 => "page.tabs.after"], "method")) {
                    // line 26
                    echo "            <div class=\"list-after-tabs\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "page.tabs.after"]]), "html", null, true);
                    echo "</div>
          ";
                }
                // line 28
                echo "    
        </div>
      ";
            }
            // line 31
            echo "  
      <div class=\"tab-content\">";
            // line 32
            if ($this->getAttribute(($context["this"] ?? null), "getBodyTemplate", [], "method")) {
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getBodyTemplate", [], "method"));                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getBodyTemplate", [], "method"), "common/tabber.twig", 32)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
            }
            echo "</div>
  
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "common/tabber.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 32,  148 => 31,  143 => 28,  137 => 26,  135 => 25,  132 => 24,  117 => 22,  113 => 20,  100 => 18,  96 => 17,  92 => 15,  89 => 14,  61 => 13,  44 => 12,  39 => 9,  37 => 8,  32 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "common/tabber.twig", "/var/www/html/skins/admin/common/tabber.twig");
    }
}
