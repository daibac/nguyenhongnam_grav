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

/* modular/categories.html.twig */
class __TwigTemplate_a7a0672876cf83f5ffc322f4b39f0c551905273d8414a0ff1e053779599fbb85 extends \Twig\Template
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
        // line 1
        echo "<div class=\"row_2\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list1\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "categories", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "                    <li class=\"col-lg-4 col-md-4 col-sm-4 listbox";
            echo $this->getAttribute($context["loop"], "index", []);
            echo "\">
                        <div class=\"";
            // line 7
            echo $this->getAttribute($context["category"], "class", []);
            echo "\">
                            <a href=\"#\">
                                ";
            // line 9
            if (($this->getAttribute($context["category"], "title_position", []) == "top")) {
                // line 10
                echo "                                    <p>";
                echo $this->getAttribute($context["category"], "title", []);
                echo "</p>
                                ";
            }
            // line 12
            echo "                                <figure>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["category"], "image", []), [], "array");
            echo "</figure>
                                ";
            // line 13
            if (($this->getAttribute($context["category"], "title_position", []) == "bottom")) {
                // line 14
                echo "                                    <p>";
                echo $this->getAttribute($context["category"], "title", []);
                echo "</p>
                                ";
            }
            // line 16
            echo "                            </a>
                        </div>
                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                ";
        echo ($context["content"] ?? null);
        echo "
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  84 => 16,  78 => 14,  76 => 13,  71 => 12,  65 => 10,  63 => 9,  58 => 7,  53 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row_2\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list1\">
                {% for category in page.header.categories %}
                    <li class=\"col-lg-4 col-md-4 col-sm-4 listbox{{ loop.index }}\">
                        <div class=\"{{ category.class }}\">
                            <a href=\"#\">
                                {% if category.title_position == 'top' %}
                                    <p>{{ category.title }}</p>
                                {% endif %}
                                <figure>{{ page.media[category.image] }}</figure>
                                {% if category.title_position == 'bottom' %}
                                    <p>{{ category.title }}</p>
                                {% endif %}
                            </a>
                        </div>
                    </li>
                {% endfor %}
                {{ content }}
            </ul>
        </div>
    </div>
</div>", "modular/categories.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\modular\\categories.html.twig");
    }
}
