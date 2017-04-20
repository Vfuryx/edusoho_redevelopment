<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_6cbeb64d44ca4f68820b6e12077f39f8b22f5362f2b3c34592d4a37502aa2a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "system/payment";
        // line 5
        $context["menu"] = "admin_payment";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付功能"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "enabled", array()));
        echo "
      <div class=\"help-block\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，网站收入将自动到达配置的支付宝、微信支付或网银账号中。"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
    
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"disabled_message\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付关闭时的提示信息"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "disabled_message", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  ";
        // line 33
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:alipay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:wxpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 34)->display($context);
        // line 35
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:heepay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 35)->display($context);
        // line 36
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:quickly.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 36)->display($context);
        // line 37
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:llpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 37)->display($context);
        // line 38
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  101 => 42,  95 => 38,  92 => 37,  89 => 36,  86 => 35,  83 => 34,  81 => 33,  74 => 29,  68 => 26,  58 => 19,  53 => 17,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
