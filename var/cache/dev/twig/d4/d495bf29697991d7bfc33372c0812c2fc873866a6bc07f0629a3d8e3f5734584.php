<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a14f942b553ac507f10d08c09488e8d72bf4359641a3f6eb01115b46efd543f extends Twig_Template
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
        $__internal_14d89adb5502b2c9834db579456119995c5b539cb3ad61ed598b7e4c0c72c240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d89adb5502b2c9834db579456119995c5b539cb3ad61ed598b7e4c0c72c240->enter($__internal_14d89adb5502b2c9834db579456119995c5b539cb3ad61ed598b7e4c0c72c240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_87444835b067f2aa96bc422dbd1b9f4384403d875ca1fd331703259735d12067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87444835b067f2aa96bc422dbd1b9f4384403d875ca1fd331703259735d12067->enter($__internal_87444835b067f2aa96bc422dbd1b9f4384403d875ca1fd331703259735d12067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_14d89adb5502b2c9834db579456119995c5b539cb3ad61ed598b7e4c0c72c240->leave($__internal_14d89adb5502b2c9834db579456119995c5b539cb3ad61ed598b7e4c0c72c240_prof);

        
        $__internal_87444835b067f2aa96bc422dbd1b9f4384403d875ca1fd331703259735d12067->leave($__internal_87444835b067f2aa96bc422dbd1b9f4384403d875ca1fd331703259735d12067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}