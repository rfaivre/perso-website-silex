<?php

/* index.twig */
class __TwigTemplate_d49e3191323811334c40741cec5126c18145944b10c658233cc778484d65de90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $context["isMobileClass"] = ((((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) ? ("no-mobile") : ("mobile"));
        // line 5
        echo "
<div id=\"st-container\" class=\"st-container\">

\t";
        // line 8
        $this->loadTemplate("navbar.twig", "index.twig", 8)->display($context);
        // line 9
        echo "
\t<!-- content push wrapper -->
\t<div class=\"st-pusher\">

\t\t<div class=\"st-content container\">
\t\t\t<div class=\"st-content-inner\">

\t\t\t\t<header id=\"ha-header\" class=\"ha-header ha-header-large\">
\t\t\t\t\t<div class=\"ha-header-perspective\">
\t\t\t\t\t\t<div class=\"ha-header-front\">
\t\t\t\t\t\t\t<h1><span>Rémi FAIVRE</span></h1>
\t\t\t\t\t\t\t<div id=\"st-trigger-effects\" class=\"column\">
\t\t\t\t\t\t\t\t<button data-effect=\"st-effect-1\" class=\"button-menu\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<div id=\"multiscroll\">

\t\t\t\t\t";
        // line 33
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 34
            echo "\t\t\t\t\t    <div class=\"ms-left\">
\t\t\t\t\t    \t<!-- SECTION HOME -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"home\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t        \t\t\t\t<h2>/ Accueil</h2>
\t\t\t\t        \t\t\t\t<div class=\"sub-container\">
\t\t\t\t\t        \t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t\t\t\t\t\tJe m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse!
\t\t\t\t\t\t\t\t\t\t\t\t<br /><br />A très bientôt <i class=\"fa fa-smile-o\"></i> !
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t        \t\t\t</div>
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION HOME -->
\t\t\t\t\t        <!-- SECTION STUDIES -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"studies\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t        \t\t\t<h2>/ Formations</h2>
\t\t\t\t\t        \t\t\t<div class=\"sub-container\">
\t\t\t\t\t        \t\t\t\t<p class=\"intro\">
\t\t\t\t\t        \t\t\t\t\tSuite à l'obtention de mon baccalauréat Scientifique obtenu avec la mention assez bien, je me suis dirigé vers une licence Informatique à l'Université de Franche-Comté à Besançon (25). C'est lors de cette licence que j'ai décidé de m'orienter vers le domaine du web. Après l'obtention de ma licence, j'ai donc décidé de me diriger vers un Master IIAM (Image et Intelligence Artificielle, Multimédia) option Multimédia réalisé à l'Université de Bourgogne à Dijon (21). Ce Master m'a permis de compléter ma formation pour travailler dans les métiers du web.
\t\t\t\t\t        \t\t\t\t</p>
\t\t\t\t\t        \t\t\t</div>
\t\t\t\t\t        \t\t</div>\t\t\t\t\t        \t\t
\t\t\t\t\t        \t</div>
\t\t\t\t        \t</div>
\t\t\t\t        \t<!-- END SECTION STUDIES -->
\t\t\t\t        \t<!-- SECTION SKILLS -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"skills\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h2>/ Compétences</h2>
\t\t\t\t\t\t    \t\t\t<div class=\"sub-container\">
\t\t\t\t\t\t    \t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t    \t\t\t\tAu cours de mes études et mes diverses expériences, j'ai pu découvrir et approfondir différents langages de programmation. J'aime découvrir de nouvelles technologies et me tenir au courant des technologies et méthodes utilisés dans le monde du web. Pour cela, j'aime effectuer de la veille technologique à titre personnel.
\t\t\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t\t    \t\t\t\t</p>
\t\t\t\t\t\t    \t\t\t</div>
\t\t\t\t\t\t    \t\t</div>

\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION SKILLS -->
\t\t\t\t\t        <!-- SECTION CONTACT -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"contact\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h2>/ Contact</h2>
\t\t\t\t\t\t    \t\t\t
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION CONTACT -->
\t\t\t\t\t    </div>
\t\t\t\t\t";
        }
        // line 93
        echo "
\t\t\t\t    <div class=\"ms-right ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["isMobileClass"]) ? $context["isMobileClass"] : $this->getContext($context, "isMobileClass")), "html", null, true);
        echo "\" id=\"fullpage\">

\t\t\t\t        <div class=\"ms-section section section-home\" data-anchor=\"home\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t        \t\t\t";
        // line 99
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 100
            echo "\t\t\t\t\t\t        \t\t<h2>/ Accueil</h2>
\t\t\t\t\t\t        \t";
        }
        // line 102
        echo "\t\t\t\t        \t\t\t<div class=\"sub-container\">
\t\t\t\t\t\t\t\t\t\t";
        // line 103
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t\t\t\t\t\tJe m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse <i class=\"fa fa-smile-o\"></i> !
\t\t\t\t\t\t\t\t\t\t\t\t<br /><br />A très bientôt!
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t<h3>// A mon sujet</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t        \t\t\t\t\t\t<p><span>Nom </span><span>Faivre</span></p>
\t\t\t\t\t\t\t        \t\t<p><span>Prénom</span><span>Rémi</span></p>
\t\t\t\t\t\t\t        \t\t<p><span>Âge</span><span>25 ans</span></p>\t\t\t\t        \t\t
\t\t\t\t\t\t\t        \t\t<p><span>Mail</span><span>rfaivre91@gmail.com</span></p>\t\t\t\t\t        \t\t
\t\t\t\t\t\t\t        \t\t<p><span>Situation professionelle</span><span>En recherche active</span></p>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t        \t\t\t\t</div>
\t\t\t\t        \t\t</div>\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-studies\" data-anchor=\"studies\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">\t\t\t\t        \t\t\t
\t\t\t\t\t\t        \t";
        // line 124
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 125
            echo "\t\t\t\t\t\t        \t\t<h2>/ Formations</h2>
\t\t\t\t\t\t        \t";
        }
        // line 127
        echo "\t\t\t\t\t\t        \t<div class=\"sub-container\">\t\t\t\t\t\t        \t\t
\t\t\t\t\t\t        \t\t";
        // line 128
        $this->loadTemplate("studies.twig", "index.twig", 128)->display($context);
        // line 129
        echo "\t\t\t\t\t\t        \t</div>
\t\t\t\t        \t\t</div>
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-skills\" data-anchor=\"skills\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t        \t\t";
        // line 137
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 138
            echo "\t\t\t\t\t        \t\t\t<h2>Compétences</h2>
\t\t\t\t\t        \t\t";
        }
        // line 140
        echo "\t\t\t\t\t        \t\t<div class=\"sub-container\">
\t\t\t\t\t        \t\t\t";
        // line 141
        $this->loadTemplate("skills.twig", "index.twig", 141)->display($context);
        // line 142
        echo "\t\t\t\t\t        \t\t</div>

\t\t\t\t        \t\t</div>
\t\t\t\t        \t\t
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        ";
        // line 149
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 150
            echo "\t\t\t\t\t        <div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t\t\t\t\t\tSection droite 4
\t\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t    ";
        } else {
            // line 159
            echo "\t\t\t\t\t    \t<div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t\t    \t\t<div class=\"slide\">
\t\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t        \t\t\tgttgggrggtr
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t    \t\t\t
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div class=\"slide\">
\t\t\t\t\t    \t\t\t<div class=\"wrap-section\">
\t\t\t\t\t    \t\t\t\t<div class=\"section-container\">
\t\t\t\t\t\t\t\t\t\t\tazdedferefre
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t    \t\t\t
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t        </div>

\t\t\t\t\t    ";
        }
        // line 181
        echo "\t\t\t\t    </div>
\t\t\t\t</div>

\t\t\t\t";
        // line 184
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 185
            echo "
\t\t\t\t\t<div id=\"multiscroll-nav\" class=\"animated slideInRight multiscroll-nav-class\">
\t\t\t\t\t\t<ul id=\"multiscroll-menu\">\t\t\t\t\t\t    
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 191
        echo "
\t\t
\t\t\t</div>

\t\t\t<div class=\"footer-fixed\"></div>
\t\t</div>

\t</div>
</div>

\t<script type=\"text/javascript\">
\t\tvar isMobile = \"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), "html", null, true);
        echo "\"; 
\t</script>
\t<script type=\"text/javascript\" src=\"ressources/js/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 202,  268 => 191,  260 => 185,  258 => 184,  253 => 181,  229 => 159,  218 => 150,  216 => 149,  207 => 142,  205 => 141,  202 => 140,  198 => 138,  196 => 137,  186 => 129,  184 => 128,  181 => 127,  177 => 125,  175 => 124,  158 => 109,  151 => 104,  149 => 103,  146 => 102,  142 => 100,  140 => 99,  132 => 94,  129 => 93,  68 => 34,  66 => 33,  40 => 9,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block body %}*/
/* {% set isMobileClass = (isMobile == "0"? "no-mobile": "mobile") %}*/
/* */
/* <div id="st-container" class="st-container">*/
/* */
/* 	{% include "navbar.twig" %}*/
/* */
/* 	<!-- content push wrapper -->*/
/* 	<div class="st-pusher">*/
/* */
/* 		<div class="st-content container">*/
/* 			<div class="st-content-inner">*/
/* */
/* 				<header id="ha-header" class="ha-header ha-header-large">*/
/* 					<div class="ha-header-perspective">*/
/* 						<div class="ha-header-front">*/
/* 							<h1><span>Rémi FAIVRE</span></h1>*/
/* 							<div id="st-trigger-effects" class="column">*/
/* 								<button data-effect="st-effect-1" class="button-menu">*/
/* 									<i></i>*/
/* 									<i></i>*/
/* 									<i></i>*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>						*/
/* 					</div>*/
/* 				</header>*/
/* */
/* 				<div id="multiscroll">*/
/* */
/* 					{% if isMobile == "0" %}*/
/* 					    <div class="ms-left">*/
/* 					    	<!-- SECTION HOME -->*/
/* 					        <div class="ms-section" data-anchor="home">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 				        				<h2>/ Accueil</h2>*/
/* 				        				<div class="sub-container">*/
/* 					        				<p class="intro">*/
/* 												Je m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse!*/
/* 												<br /><br />A très bientôt <i class="fa fa-smile-o"></i> !*/
/* 											</p>*/
/* 					        			</div>*/
/* 					        		</div>*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION HOME -->*/
/* 					        <!-- SECTION STUDIES -->*/
/* 					        <div class="ms-section" data-anchor="studies">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 					        			<h2>/ Formations</h2>*/
/* 					        			<div class="sub-container">*/
/* 					        				<p class="intro">*/
/* 					        					Suite à l'obtention de mon baccalauréat Scientifique obtenu avec la mention assez bien, je me suis dirigé vers une licence Informatique à l'Université de Franche-Comté à Besançon (25). C'est lors de cette licence que j'ai décidé de m'orienter vers le domaine du web. Après l'obtention de ma licence, j'ai donc décidé de me diriger vers un Master IIAM (Image et Intelligence Artificielle, Multimédia) option Multimédia réalisé à l'Université de Bourgogne à Dijon (21). Ce Master m'a permis de compléter ma formation pour travailler dans les métiers du web.*/
/* 					        				</p>*/
/* 					        			</div>*/
/* 					        		</div>					        		*/
/* 					        	</div>*/
/* 				        	</div>*/
/* 				        	<!-- END SECTION STUDIES -->*/
/* 				        	<!-- SECTION SKILLS -->*/
/* 					        <div class="ms-section" data-anchor="skills">*/
/* 						    	<div class="wrap-section">					    		*/
/* 						    		<div class="section-container">*/
/* 						    			<h2>/ Compétences</h2>*/
/* 						    			<div class="sub-container">*/
/* 						    				<p class="intro">*/
/* 							    				Au cours de mes études et mes diverses expériences, j'ai pu découvrir et approfondir différents langages de programmation. J'aime découvrir de nouvelles technologies et me tenir au courant des technologies et méthodes utilisés dans le monde du web. Pour cela, j'aime effectuer de la veille technologique à titre personnel.*/
/* 							    					*/
/* 						    				</p>*/
/* 						    			</div>*/
/* 						    		</div>*/
/* */
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION SKILLS -->*/
/* 					        <!-- SECTION CONTACT -->*/
/* 					        <div class="ms-section" data-anchor="contact">*/
/* 						    	<div class="wrap-section">*/
/* 						    		<div class="section-container">*/
/* 						    			<h2>/ Contact</h2>*/
/* 						    			*/
/* 						    		</div>*/
/* 						    		*/
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION CONTACT -->*/
/* 					    </div>*/
/* 					{% endif %}*/
/* */
/* 				    <div class="ms-right {{ isMobileClass }}" id="fullpage">*/
/* */
/* 				        <div class="ms-section section section-home" data-anchor="home">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">*/
/* 				        			{% if isMobile == "1" %}*/
/* 						        		<h2>/ Accueil</h2>*/
/* 						        	{% endif %}*/
/* 				        			<div class="sub-container">*/
/* 										{% if isMobile =="1" %}*/
/* 											<p class="intro">*/
/* 												Je m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse <i class="fa fa-smile-o"></i> !*/
/* 												<br /><br />A très bientôt!*/
/* 											</p>*/
/* 										{% endif %}*/
/* 										<h3>// A mon sujet</h3>*/
/* 										<div class="content">*/
/* 			        						<p><span>Nom </span><span>Faivre</span></p>*/
/* 							        		<p><span>Prénom</span><span>Rémi</span></p>*/
/* 							        		<p><span>Âge</span><span>25 ans</span></p>				        		*/
/* 							        		<p><span>Mail</span><span>rfaivre91@gmail.com</span></p>					        		*/
/* 							        		<p><span>Situation professionelle</span><span>En recherche active</span></p>								*/
/* 										</div>*/
/* 			        				</div>*/
/* 				        		</div>				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-studies" data-anchor="studies">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">				        			*/
/* 						        	{% if isMobile == "1" %}*/
/* 						        		<h2>/ Formations</h2>*/
/* 						        	{% endif %}*/
/* 						        	<div class="sub-container">						        		*/
/* 						        		{% include "studies.twig" %}*/
/* 						        	</div>*/
/* 				        		</div>*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-skills" data-anchor="skills">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">*/
/* 					        		{% if isMobile == "1" %}*/
/* 					        			<h2>Compétences</h2>*/
/* 					        		{% endif %}*/
/* 					        		<div class="sub-container">*/
/* 					        			{% include "skills.twig" %}*/
/* 					        		</div>*/
/* */
/* 				        		</div>*/
/* 				        		*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        {% if isMobile == "0" %}*/
/* 					        <div class="ms-section section section-contact" data-anchor="contact">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 										Section droite 4*/
/* 					        			*/
/* 					        		</div>*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					    {% else %}*/
/* 					    	<div class="ms-section section section-contact" data-anchor="contact">*/
/* 					    		<div class="slide">*/
/* 						        	<div class="wrap-section">*/
/* 						        		<div class="section-container">*/
/* 											<h2>Contact</h2>*/
/* 						        			gttgggrggtr*/
/* 						        		</div>*/
/* 						        	</div>*/
/* 					    			*/
/* 					    		</div>*/
/* 					    		<div class="slide">*/
/* 					    			<div class="wrap-section">*/
/* 					    				<div class="section-container">*/
/* 											azdedferefre*/
/* 					    					*/
/* 					    				</div>*/
/* 						        	</div>*/
/* 					    			*/
/* 					    		</div>*/
/* 					        </div>*/
/* */
/* 					    {% endif %}*/
/* 				    </div>*/
/* 				</div>*/
/* */
/* 				{% if isMobile == "0" %}*/
/* */
/* 					<div id="multiscroll-nav" class="animated slideInRight multiscroll-nav-class">*/
/* 						<ul id="multiscroll-menu">						    */
/* 						</ul>*/
/* 					</div>*/
/* 				{% endif %}*/
/* */
/* 		*/
/* 			</div>*/
/* */
/* 			<div class="footer-fixed"></div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* 	<script type="text/javascript">*/
/* 		var isMobile = "{{ isMobile }}"; */
/* 	</script>*/
/* 	<script type="text/javascript" src="ressources/js/main.js"></script>*/
/* {% endblock %}*/
/* */
/* */
