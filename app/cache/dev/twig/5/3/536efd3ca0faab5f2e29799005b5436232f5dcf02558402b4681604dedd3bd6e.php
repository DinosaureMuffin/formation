<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_536efd3ca0faab5f2e29799005b5436232f5dcf02558402b4681604dedd3bd6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f62b65915789e3271d2147c2d01e291b50cd8e69753ee255a72fed934cd5d2 = $this->env->getExtension("native_profiler");
        $__internal_01f62b65915789e3271d2147c2d01e291b50cd8e69753ee255a72fed934cd5d2->enter($__internal_01f62b65915789e3271d2147c2d01e291b50cd8e69753ee255a72fed934cd5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f62b65915789e3271d2147c2d01e291b50cd8e69753ee255a72fed934cd5d2->leave($__internal_01f62b65915789e3271d2147c2d01e291b50cd8e69753ee255a72fed934cd5d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ee8d2666acd7c0290f6bb9484449e71cece9dd48eef10b7c9891edf0d3065ca = $this->env->getExtension("native_profiler");
        $__internal_6ee8d2666acd7c0290f6bb9484449e71cece9dd48eef10b7c9891edf0d3065ca->enter($__internal_6ee8d2666acd7c0290f6bb9484449e71cece9dd48eef10b7c9891edf0d3065ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ee8d2666acd7c0290f6bb9484449e71cece9dd48eef10b7c9891edf0d3065ca->leave($__internal_6ee8d2666acd7c0290f6bb9484449e71cece9dd48eef10b7c9891edf0d3065ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d12021bd8d1e5a36628ae08ed7a694fc12c6f082c1405bafc51a81cc2e57b61 = $this->env->getExtension("native_profiler");
        $__internal_6d12021bd8d1e5a36628ae08ed7a694fc12c6f082c1405bafc51a81cc2e57b61->enter($__internal_6d12021bd8d1e5a36628ae08ed7a694fc12c6f082c1405bafc51a81cc2e57b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d12021bd8d1e5a36628ae08ed7a694fc12c6f082c1405bafc51a81cc2e57b61->leave($__internal_6d12021bd8d1e5a36628ae08ed7a694fc12c6f082c1405bafc51a81cc2e57b61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7769d7f24b358d574a2639ab9eafc0a85a984b7af44904a2357877ebec6ebef1 = $this->env->getExtension("native_profiler");
        $__internal_7769d7f24b358d574a2639ab9eafc0a85a984b7af44904a2357877ebec6ebef1->enter($__internal_7769d7f24b358d574a2639ab9eafc0a85a984b7af44904a2357877ebec6ebef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7769d7f24b358d574a2639ab9eafc0a85a984b7af44904a2357877ebec6ebef1->leave($__internal_7769d7f24b358d574a2639ab9eafc0a85a984b7af44904a2357877ebec6ebef1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
