<?php

/* TopxiaAdminBundle:System:user-fields.table.tr.html.twig */
class __TwigTemplate_a65f774eba30c7d7e36b6bcc3434d7156e6a4eef70bc3693491ed8bf68bb9acb extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "  <tr id=\"field-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "\">
    <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 5
            if ($this->getAttribute($context["field"], "enabled", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否"), "html", null, true);
            }
            echo "</td>
    <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "seq", array()), "html", null, true);
            echo "</td>
    <!-- <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td> -->
    <td><a type=\"button\" class=\"btn btn-default btn-sm \" href=\"javascript:;\" data-url=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_fields_edit", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\"  data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
            echo "</a>&nbsp;<a type=\"button\" class=\"btn btn-default btn-sm \" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_fields_delete", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\"  data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</a></td>
  </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "  <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无自定义字段"), "html", null, true);
            echo "</div></td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.table.tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  53 => 8,  49 => 7,  45 => 6,  37 => 5,  33 => 4,  29 => 3,  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
