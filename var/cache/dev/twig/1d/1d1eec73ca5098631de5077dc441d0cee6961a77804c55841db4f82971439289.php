<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_a58cdc1647dd0370a7cf6c641af3eb77a3d20034bdb2f029568d7b8f258873ac extends Twig_Template
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
        $__internal_370df1c168ac05ef4a04bf39440e4addf6aba628b15a0d4c2f4abe8869e1af2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370df1c168ac05ef4a04bf39440e4addf6aba628b15a0d4c2f4abe8869e1af2c->enter($__internal_370df1c168ac05ef4a04bf39440e4addf6aba628b15a0d4c2f4abe8869e1af2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_4864fcb0eb165043bd795a80fd471bc36ff09797ac46fdf9be258afe295929e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4864fcb0eb165043bd795a80fd471bc36ff09797ac46fdf9be258afe295929e1->enter($__internal_4864fcb0eb165043bd795a80fd471bc36ff09797ac46fdf9be258afe295929e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_370df1c168ac05ef4a04bf39440e4addf6aba628b15a0d4c2f4abe8869e1af2c->leave($__internal_370df1c168ac05ef4a04bf39440e4addf6aba628b15a0d4c2f4abe8869e1af2c_prof);

        
        $__internal_4864fcb0eb165043bd795a80fd471bc36ff09797ac46fdf9be258afe295929e1->leave($__internal_4864fcb0eb165043bd795a80fd471bc36ff09797ac46fdf9be258afe295929e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list_content.html.twig");
    }
}