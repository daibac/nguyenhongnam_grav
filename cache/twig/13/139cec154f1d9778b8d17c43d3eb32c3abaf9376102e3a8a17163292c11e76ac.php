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

/* modular/footer.html.twig */
class __TwigTemplate_5d8754d879c6a38c0be341c936f0df923552b2cdfa1b249eded142cd6a825a71 extends \Twig\Template
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
        echo "<div class=\"row_4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 chef row4_col\">
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "title", []);
        echo "</h2>
                <figure>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "image", []), [], "array");
        echo "</figure>
                <p class=\"title3\">";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "title2", []);
        echo "</p>
                <p>";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "text", []);
        echo "</p>
                <a href=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "readme_url", []);
        echo "\" class=\"btn-link btn-link2\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "readme_text", []);
        echo "<span></span></a>
            </div>
            <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col\">
                <h2>";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services_title", []);
        echo "</h2>                        
                <ul class=\"list2\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                       <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["item"], "text", []);
            echo "</a></li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "               </ul> 
           </div>
           <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col\">
            <h2>";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "title", []);
        echo "</h2>
            <figure>";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "logo", []), [], "array");
        echo "</figure>
            <p class=\"title4\">";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "text", []);
        echo "</p>
            <hr class=\"line1\">
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  89 => 21,  85 => 20,  80 => 17,  69 => 15,  65 => 14,  60 => 12,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row_4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 chef row4_col\">
                <h2>{{ page.header.about.title }}</h2>
                <figure>{{ page.media[page.header.about.image] }}</figure>
                <p class=\"title3\">{{ page.header.about.title2 }}</p>
                <p>{{ page.header.about.text }}</p>
                <a href=\"{{ page.header.about.readme_url }}\" class=\"btn-link btn-link2\">{{ page.header.about.readme_text }}<span></span></a>
            </div>
            <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col\">
                <h2>{{ page.header.services_title }}</h2>                        
                <ul class=\"list2\">
                    {% for item in page.header.services %}
                       <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
                   {% endfor %}
               </ul> 
           </div>
           <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col\">
            <h2>{{ page.header.locations.title }}</h2>
            <figure>{{ page.media[page.header.locations.logo] }}</figure>
            <p class=\"title4\">{{ page.header.locations.text }}</p>
            <hr class=\"line1\">
        </div>
    </div>
</div>
</div>", "modular/footer.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\modular\\footer.html.twig");
    }
}
