<?php

/* ClassroomBundle:ClassroomThread:list.html.twig */
class __TwigTemplate_e3142a47b6dc6234646d2d90fa335fd6581678fe8115d229e119021ed5f07b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:ClassroomThread:list.html.twig", 1);
        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "classroombundle/controller/classroom/thread-list";
        // line 4
        $context["nav"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        $this->loadTemplate("ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig", "ClassroomBundle:ClassroomThread:list.html.twig", 8)->display($context);
        // line 9
        echo "
  ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Thread:list", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), "filters" => (isset($context["filters"]) ? $context["filters"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  48 => 9,  46 => 8,  43 => 7,  40 => 6,  34 => 5,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
