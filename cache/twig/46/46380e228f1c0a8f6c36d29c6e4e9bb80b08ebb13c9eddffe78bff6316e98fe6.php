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

/* gallery.html.twig */
class __TwigTemplate_d543a6531d8167a0c7f353da538f6e9b905c624aa2c92a8d09662a661b764ed6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "gallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "gallery.html.twig", 6)->display($context);
        // line 7
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo ($context["theme_url"] ?? null);
        echo "/img/favicon.ico\" />

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo " ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

 ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

<script>

\$(window).load(function() {  
    var \$container = \$('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    \$container.imagesLoaded( function(){

        \$container.isotope({
            // options
            itemSelector : '.element',  
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = \$browserWidth;
                return Math.floor(containerWidth / \$cols);
            }
        });
    });
    
        // update columnWidth on window resize
        \$(window).smartresize(function(){  
            updateSize();
            \$container.isotope( 'reLayout' );
        });

    //Set item size
    function updateSize() {
        \$browserWidth = \$container.width();
        \$cols = 4;

        if (\$browserWidth >= 1170) {
            \$cols = 4;
        }
        else if (\$browserWidth >= 800 && \$browserWidth < 1170) {
            \$cols = 3;
        }
        else if (\$browserWidth >= 480 && \$browserWidth < 800) {
            \$cols = 2;
        }
        else if (\$browserWidth >= 320 && \$browserWidth < 480) {
            \$cols = 1;
        }
        else if (\$browserWidth < 401) {
            \$cols = 1;
        }
        //console.log(\"Browser width is:\" + \$browserWidth);
        //console.log(\"Cols is:\" + \$cols);

        // \$gutterTotal = \$cols * 20;
        \$browserWidth = \$browserWidth; // - \$gutterTotal;
        \$itemWidth = \$browserWidth / \$cols;
        \$itemWidth = Math.floor(\$itemWidth);

        \$(\".element\").each(function(index){
            \$(this).css({\"width\":\$itemWidth+\"px\"});             
        });



        var \$optionSets = \$('#options .option-set'),
        \$optionLinks = \$optionSets.find('a');

        \$optionLinks.click(function(){
            var \$this = \$(this);
        // don't proceed if already selected
        if ( \$this.hasClass('selected') ) {
          return false;
      }
      var \$optionSet = \$this.parents('.option-set');
      \$optionSet.find('.selected').removeClass('selected');
      \$this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = \$optionSet.attr('data-option-key'),
        value = \$this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( \$this, options )
      } else {
          // otherwise, apply new options
          \$container.isotope( options );
      }

      return false;
  });       

    };

        // Initialize the gallery
        \$('.thumb').touchTouch();

    });

</script>

";
        // line 144
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 145
            echo "   <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
";
        }
        // line 147
        echo "
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 11
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.css"], "method");
        // line 12
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/touchTouch.css"], "method");
        // line 14
        echo "
        ";
        // line 15
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 16
            echo "         ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/tm/css/tm_docs.css"], "method");
            // line 17
            echo "     ";
        }
        // line 18
        echo "
 ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-migrate-1.2.1.js"], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/superfish.js"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.mobilemenu.js"], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.easing.1.3.js"], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.ui.totop.js"], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.touchSwipe.min.js"], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.equalheights.js"], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/touchTouch.jquery.js"], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.isotope.min.js"], "method");
        // line 33
        echo "
    ";
        // line 34
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/assets/js/html5shiv.js"], "method");
            // line 36
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/assets/js/respond.min.js"], "method");
            // line 37
            echo "    ";
        }
        // line 38
        echo "
";
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        // line 152
        echo "    <div id=\"content\">
        <div class=\"row_6\">
            <div class=\"container\">
                <h2 class=\"pad_bot3\">";
        // line 155
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div id=\"options\" class=\"clearfix\">
                            <ul id=\"filters\" class=\"pagination option-set clearfix\" data-option-key=\"filter\">
                                <li><a href=\"#filter\" data-option-value=\"*\" class=\"selected\">Show all</a></li>
                                ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "filters", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 162
            echo "                                    <li><a href=\"#filter\" data-option-value=\".";
            echo $this->getAttribute($context["item"], "key", []);
            echo "\">";
            echo $this->getAttribute($context["item"], "name", []);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                            </ul>
                        </div>
                        <div class=\"containerExtra\">
                            <div id=\"container\" class=\"clearfix\">
                                ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 169
            echo "                                    <div class=\"element transition ";
            echo $this->getAttribute($context["element"], "filter", []);
            echo "\" data-category=\"transition\">
                                        <a href=\"";
            // line 170
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["element"], "image", []), [], "array"), "url", []);
            echo "\" class=\"thumb\"><figure class=\"img-polaroid\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["element"], "image", []), [], "array"), "resize", [0 => 270, 1 => 190], "method"), "html", [], "method");
            echo "</figure></a><span class=\"description\">";
            echo $this->getAttribute($context["element"], "description", []);
            echo "</span>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                            </div>
                            ";
        // line 174
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 174,  334 => 173,  321 => 170,  316 => 169,  312 => 168,  306 => 164,  295 => 162,  291 => 161,  282 => 155,  277 => 152,  274 => 151,  269 => 38,  266 => 37,  263 => 36,  260 => 35,  258 => 34,  255 => 33,  252 => 32,  249 => 31,  246 => 30,  243 => 29,  240 => 28,  237 => 27,  234 => 26,  231 => 25,  228 => 24,  225 => 23,  222 => 22,  217 => 18,  214 => 17,  211 => 16,  209 => 15,  206 => 14,  203 => 13,  200 => 12,  197 => 11,  194 => 10,  189 => 147,  185 => 145,  183 => 144,  76 => 40,  74 => 22,  68 => 20,  66 => 10,  61 => 8,  58 => 7,  56 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.ico\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/bootstrap.css') %}
        {% do assets.addCss('theme://css/style.css') %}
        {% do assets.addCss('theme://css/touchTouch.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
         {% do assets.addCss('theme://assets/tm/css/tm_docs.css') %}
     {% endif %}

 {% endblock %}
 {{ assets.css() }}

 {% block javascripts %}
    {% do assets.add('jquery',101) %}
    {% do assets.addJs('theme://js/jquery-migrate-1.2.1.js') %}
    {% do assets.addJs('theme://js/superfish.js') %}
    {% do assets.addJs('theme://js/jquery.mobilemenu.js') %}
    {% do assets.addJs('theme://js/jquery.easing.1.3.js') %}
    {% do assets.addJs('theme://js/jquery.ui.totop.js') %}
    {% do assets.addJs('theme://js/jquery.touchSwipe.min.js') %}
    {% do assets.addJs('theme://js/jquery.equalheights.js') %}
    {% do assets.addJs('theme://js/touchTouch.jquery.js') %}
    {% do assets.addJs('theme://js/jquery.isotope.min.js') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
        {% do assets.addJs('theme://assets/assets/js/html5shiv.js') %}
        {% do assets.addJs('theme://assets/assets/js/respond.min.js') %}
    {% endif %}

{% endblock %}
{{ assets.js() }}

<script>

\$(window).load(function() {  
    var \$container = \$('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    \$container.imagesLoaded( function(){

        \$container.isotope({
            // options
            itemSelector : '.element',  
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = \$browserWidth;
                return Math.floor(containerWidth / \$cols);
            }
        });
    });
    
        // update columnWidth on window resize
        \$(window).smartresize(function(){  
            updateSize();
            \$container.isotope( 'reLayout' );
        });

    //Set item size
    function updateSize() {
        \$browserWidth = \$container.width();
        \$cols = 4;

        if (\$browserWidth >= 1170) {
            \$cols = 4;
        }
        else if (\$browserWidth >= 800 && \$browserWidth < 1170) {
            \$cols = 3;
        }
        else if (\$browserWidth >= 480 && \$browserWidth < 800) {
            \$cols = 2;
        }
        else if (\$browserWidth >= 320 && \$browserWidth < 480) {
            \$cols = 1;
        }
        else if (\$browserWidth < 401) {
            \$cols = 1;
        }
        //console.log(\"Browser width is:\" + \$browserWidth);
        //console.log(\"Cols is:\" + \$cols);

        // \$gutterTotal = \$cols * 20;
        \$browserWidth = \$browserWidth; // - \$gutterTotal;
        \$itemWidth = \$browserWidth / \$cols;
        \$itemWidth = Math.floor(\$itemWidth);

        \$(\".element\").each(function(index){
            \$(this).css({\"width\":\$itemWidth+\"px\"});             
        });



        var \$optionSets = \$('#options .option-set'),
        \$optionLinks = \$optionSets.find('a');

        \$optionLinks.click(function(){
            var \$this = \$(this);
        // don't proceed if already selected
        if ( \$this.hasClass('selected') ) {
          return false;
      }
      var \$optionSet = \$this.parents('.option-set');
      \$optionSet.find('.selected').removeClass('selected');
      \$this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = \$optionSet.attr('data-option-key'),
        value = \$this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( \$this, options )
      } else {
          // otherwise, apply new options
          \$container.isotope( options );
      }

      return false;
  });       

    };

        // Initialize the gallery
        \$('.thumb').touchTouch();

    });

</script>

{% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
   <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
{% endif %}

{% endblock head%}


{% block content %}
    <div id=\"content\">
        <div class=\"row_6\">
            <div class=\"container\">
                <h2 class=\"pad_bot3\">{{ page.header.title }}</h2>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div id=\"options\" class=\"clearfix\">
                            <ul id=\"filters\" class=\"pagination option-set clearfix\" data-option-key=\"filter\">
                                <li><a href=\"#filter\" data-option-value=\"*\" class=\"selected\">Show all</a></li>
                                {% for item in page.header.filters %}
                                    <li><a href=\"#filter\" data-option-value=\".{{ item.key }}\">{{ item.name }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"containerExtra\">
                            <div id=\"container\" class=\"clearfix\">
                                {% for element in page.header.gallery  %}
                                    <div class=\"element transition {{ element.filter }}\" data-category=\"transition\">
                                        <a href=\"{{ page.media[element.image].url }}\" class=\"thumb\"><figure class=\"img-polaroid\">{{ page.media[element.image].resize(270, 190).html() }}</figure></a><span class=\"description\">{{ element.description }}</span>
                                    </div>
                                {% endfor %}
                            </div>
                            {{ page.content }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "gallery.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\gallery.html.twig");
    }
}
