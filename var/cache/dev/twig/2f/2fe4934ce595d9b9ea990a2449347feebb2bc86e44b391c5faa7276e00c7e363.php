<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_f01fcba13483cb72aaf344f47dfe58f6523f4362acecba175cd648c90d7adbe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7056e391c21c2317beed5826559b6899abdc68ded2ff0d6e3e25670d5de75145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7056e391c21c2317beed5826559b6899abdc68ded2ff0d6e3e25670d5de75145->enter($__internal_7056e391c21c2317beed5826559b6899abdc68ded2ff0d6e3e25670d5de75145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ab41aab5077de9a9f8b56e575918179fb5694effa51ba0f457d83f860cf9d6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab41aab5077de9a9f8b56e575918179fb5694effa51ba0f457d83f860cf9d6cd->enter($__internal_ab41aab5077de9a9f8b56e575918179fb5694effa51ba0f457d83f860cf9d6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7056e391c21c2317beed5826559b6899abdc68ded2ff0d6e3e25670d5de75145->leave($__internal_7056e391c21c2317beed5826559b6899abdc68ded2ff0d6e3e25670d5de75145_prof);

        
        $__internal_ab41aab5077de9a9f8b56e575918179fb5694effa51ba0f457d83f860cf9d6cd->leave($__internal_ab41aab5077de9a9f8b56e575918179fb5694effa51ba0f457d83f860cf9d6cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}