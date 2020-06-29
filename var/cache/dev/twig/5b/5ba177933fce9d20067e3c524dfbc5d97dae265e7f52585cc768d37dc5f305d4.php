<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* photos.html.twig */
class __TwigTemplate_4626241d3f7028dd0a861d9a2c071f0984b984d16333dde40076ccc486e8878d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "photos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comics"]) || array_key_exists("comics", $context) ? $context["comics"] : (function () { throw new RuntimeError('Variable "comics" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
            // line 7
            echo "        <div class=\"container-sm p-5\">
            <div class=\"card mb-3\">
                <img src=\"/../comics/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "filename", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"/../comics/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "filename", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5>
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <p class=\"card-text\"><small
                                        class=\"text-muted\">Opublikowano: ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "uploadedDate", [], "any", false, false, false, 15), "m.d.Y"), "html", null, true);
            echo "</small>
                            </p>
                            <p class=\"card-text\"><small class=\"text-muted\">Autor: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comic"], "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo "</small></p>
                            <p class=\"card-text\"><small class=\"text-muted\">Lubi: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "numOfLikes", [], "any", false, false, false, 18), "html", null, true);
            echo "</small></p>
                        </div>
                        <div class=\"col-sm text-center\">
                            ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
                // line 22
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comic"], "likesBy", [], "any", false, false, false, 22), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)], "method", false, false, false, 22)) {
                    // line 23
                    echo "                                    ";
                    // line 24
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unlike", ["id" => twig_get_attribute($this->env, $this->source, $context["comic"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\">
                                        <img src=\"/../lajkbang.png\" height=\"100\">
                                    </a>

                                ";
                } else {
                    // line 29
                    echo "                                    ";
                    // line 30
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["comic"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\">
                                        <img src=\"/../lajkpng.png\" height=\"100\">
                                    </a>
                                ";
                }
                // line 34
                echo "                            ";
            }
            // line 35
            echo "                        </div>
                        <div class=\"col-sm text-center\">
                            ";
            // line 37
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["comic"], "user", [], "any", false, false, false, 37))) {
                // line 38
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comic"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
                                    <img src=\"/../delete.png\" alt=\"delete.png\" height=\"100\">
                                </a>
                            ";
            }
            // line 42
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  161 => 38,  159 => 37,  155 => 35,  152 => 34,  144 => 30,  142 => 29,  133 => 24,  131 => 23,  128 => 22,  126 => 21,  120 => 18,  116 => 17,  111 => 15,  104 => 11,  97 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }}{% endblock %}

{% block body %}
    {% for comic in comics %}
        <div class=\"container-sm p-5\">
            <div class=\"card mb-3\">
                <img src=\"/../comics/{{ comic.filename }}\" class=\"card-img-top\" alt=\"/../comics/{{ comic.filename }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ comic.title }}</h5>
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <p class=\"card-text\"><small
                                        class=\"text-muted\">Opublikowano: {{ comic.uploadedDate|date(\"m.d.Y\") }}</small>
                            </p>
                            <p class=\"card-text\"><small class=\"text-muted\">Autor: {{ comic.user.username }}</small></p>
                            <p class=\"card-text\"><small class=\"text-muted\">Lubi: {{ comic.numOfLikes }}</small></p>
                        </div>
                        <div class=\"col-sm text-center\">
                            {% if app.user %}
                                {% if comic.likesBy.contains(app.user) %}
                                    {#                            Lubi#}
                                    <a href=\"{{ path('unlike', {'id': comic.id}) }}\">
                                        <img src=\"/../lajkbang.png\" height=\"100\">
                                    </a>

                                {% else %}
                                    {#                            Nie lubi#}
                                    <a href=\"{{ path('like', {'id': comic.id}) }}\">
                                        <img src=\"/../lajkpng.png\" height=\"100\">
                                    </a>
                                {% endif %}
                            {% endif %}
                        </div>
                        <div class=\"col-sm text-center\">
                            {% if app.user==comic.user %}
                                <a href=\"{{ path('delete', {'id': comic.id}) }}\">
                                    <img src=\"/../delete.png\" alt=\"delete.png\" height=\"100\">
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "photos.html.twig", "C:\\xampp\\htdocs\\templates\\photos.html.twig");
    }
}
