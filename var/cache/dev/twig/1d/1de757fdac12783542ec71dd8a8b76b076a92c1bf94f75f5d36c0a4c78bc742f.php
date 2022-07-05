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

/* cuestionario/cuestionario.html.twig */
class __TwigTemplate_9d2bf3fe861fb25f7ca7d56c2691576f72643c8165f587d8886c7cddca724203 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cuestionario/cuestionario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cuestionario/cuestionario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cuestionario/cuestionario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

<ul class=\"nav justify-content-end\">
  <li class=\"nav-item\">
    <a class=\"nav-link disabled\" id=\"navNombremunicipio\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["municipio"]) || array_key_exists("municipio", $context) ? $context["municipio"] : (function () { throw new RuntimeError('Variable "municipio" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</a>
  </li>
</ul>

   <h1> <div class=\"fin\" align=\"center\" id=\"#textofin\"></div> </h1>
    <div class=\"pregunta\"></div>

     <button id=\"btnsiguiente\" onclick=\"printHTMLQuestion(i)\" class=\"btn btn-outline-light\">Siguiente</button>


<input type=\"text\" name=\"urlList\" id=\"urlList\" value=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cuestionario_list");
        echo "\" style=\"visibility:hidden\">
   
   
    <script type=\"text/javascript\">

    let cuestionario = [];
    let i=0; //variable para que vaya recorriendo de a una las preguntas

//enviar respuesta a php
let url = document.getElementById('urlList').value;
let currentQuestionIndex = 0;
 var respuestaSeleccionada;  
       
        


 async function fetchh() {
    //espera hasta que se completa la llamada a la url con await, hasta q no termine la llamada a la base de datos no ejecuta
    const result = await fetch(url).then((res) => res.json()).then((res) => { //en res tengo el objeto completo de preguntas y respuestas 
     
      cuestionario = res; //le asigno el objeto res a mi variable global cuestionario
    
    });
    printHTMLQuestion(i);
};



const evaluateAnswer=(variable,pregunta) =>{

  var municipio = document.getElementById('navNombremunicipio').innerHTML; //tomo el texto del municipio
  respuestaSeleccionada=variable;

  var datos={};
  datos.pregunta=pregunta;
  datos.respuesta=variable;
  datos.municipio=municipio;

  
}
 function  printHTMLQuestion() {
   
  if (i >= cuestionario.length) { //aca llamar a la plantilla de finalizacion
   
     document.querySelector('.pregunta').innerHTML = \"\"; // borro las preguntas y respuestas 
    document.getElementById('btnsiguiente').style.display= 'none' ; //saco el boton siguiente
    document.getElementById('navNombremunicipio').style.display= 'none' ; //saco el nombre del municipio
    
    document.querySelector('.fin').innerHTML = \"¡ Gracias por contestar !\";
    return;
  }

  let clave = cuestionario[i]; 
  
  let elemento = {
    'medicion':clave.medicion
    ,'rojo':clave.rojo
    ,'amarillo':clave.amarillo
    ,'verde':clave.verde
  };
 

  resp = [elemento.rojo, elemento.amarillo , elemento.verde]; //armo el arreglo con las respuesta para ponerla en los radio button  
  //al tocar el boton guarda la opcion que eligio, envio la respuesta y la pregunta
  const htmlRespuestasArray = resp.map( currentA => `<p><input type=\"radio\" name=\"respondida\" onClick=\"evaluateAnswer('\${currentA}','\${elemento.medicion}')\"></button> <span>\${currentA}</span></p>`); 

  const htmlRespuestas = htmlRespuestasArray.join(' '); //transformo el array donde hay espacios

  let htmlQuestionCode = `<p>\${elemento.medicion}</p><div>\${htmlRespuestas}</div>`; //coloco la pregunta y la respuestas en el div definido arriba
  document.querySelector('.pregunta').innerHTML = htmlQuestionCode; //esto es para que me muestre la pregunta y lo relacion con el div

var municipio = document.getElementById('navNombremunicipio').innerHTML;

var url = 'respuesta/nuevo';
var data = {\"medicion\": elemento.medicion, \"respuesta\": respuestaSeleccionada,\"municipio\": municipio};

/*
data.medicion=elemento.medicion;
data.respuesta=respuestaSeleccionada;
data.municipio=municipio;*/

if(data.respuesta){ //si se selecciono respuesta

fetch(url, {
  method: 'POST',
  body: JSON.stringify(data), // data can be `string` or {object}!
  headers:{
    'Content-Type': 'application/json'
  }
})
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(response => console.log('Success:', response));

}



  i++;
 }


fetchh();



</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cuestionario/cuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  73 => 9,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %} 

<ul class=\"nav justify-content-end\">
  <li class=\"nav-item\">
    <a class=\"nav-link disabled\" id=\"navNombremunicipio\">{{ municipio }}</a>
  </li>
</ul>

   <h1> <div class=\"fin\" align=\"center\" id=\"#textofin\"></div> </h1>
    <div class=\"pregunta\"></div>

     <button id=\"btnsiguiente\" onclick=\"printHTMLQuestion(i)\" class=\"btn btn-outline-light\">Siguiente</button>


<input type=\"text\" name=\"urlList\" id=\"urlList\" value=\"{{ path('app_cuestionario_list') }}\" style=\"visibility:hidden\">
   
   
    <script type=\"text/javascript\">

    let cuestionario = [];
    let i=0; //variable para que vaya recorriendo de a una las preguntas

//enviar respuesta a php
let url = document.getElementById('urlList').value;
let currentQuestionIndex = 0;
 var respuestaSeleccionada;  
       
        


 async function fetchh() {
    //espera hasta que se completa la llamada a la url con await, hasta q no termine la llamada a la base de datos no ejecuta
    const result = await fetch(url).then((res) => res.json()).then((res) => { //en res tengo el objeto completo de preguntas y respuestas 
     
      cuestionario = res; //le asigno el objeto res a mi variable global cuestionario
    
    });
    printHTMLQuestion(i);
};



const evaluateAnswer=(variable,pregunta) =>{

  var municipio = document.getElementById('navNombremunicipio').innerHTML; //tomo el texto del municipio
  respuestaSeleccionada=variable;

  var datos={};
  datos.pregunta=pregunta;
  datos.respuesta=variable;
  datos.municipio=municipio;

  
}
 function  printHTMLQuestion() {
   
  if (i >= cuestionario.length) { //aca llamar a la plantilla de finalizacion
   
     document.querySelector('.pregunta').innerHTML = \"\"; // borro las preguntas y respuestas 
    document.getElementById('btnsiguiente').style.display= 'none' ; //saco el boton siguiente
    document.getElementById('navNombremunicipio').style.display= 'none' ; //saco el nombre del municipio
    
    document.querySelector('.fin').innerHTML = \"¡ Gracias por contestar !\";
    return;
  }

  let clave = cuestionario[i]; 
  
  let elemento = {
    'medicion':clave.medicion
    ,'rojo':clave.rojo
    ,'amarillo':clave.amarillo
    ,'verde':clave.verde
  };
 

  resp = [elemento.rojo, elemento.amarillo , elemento.verde]; //armo el arreglo con las respuesta para ponerla en los radio button  
  //al tocar el boton guarda la opcion que eligio, envio la respuesta y la pregunta
  const htmlRespuestasArray = resp.map( currentA => `<p><input type=\"radio\" name=\"respondida\" onClick=\"evaluateAnswer('\${currentA}','\${elemento.medicion}')\"></button> <span>\${currentA}</span></p>`); 

  const htmlRespuestas = htmlRespuestasArray.join(' '); //transformo el array donde hay espacios

  let htmlQuestionCode = `<p>\${elemento.medicion}</p><div>\${htmlRespuestas}</div>`; //coloco la pregunta y la respuestas en el div definido arriba
  document.querySelector('.pregunta').innerHTML = htmlQuestionCode; //esto es para que me muestre la pregunta y lo relacion con el div

var municipio = document.getElementById('navNombremunicipio').innerHTML;

var url = 'respuesta/nuevo';
var data = {\"medicion\": elemento.medicion, \"respuesta\": respuestaSeleccionada,\"municipio\": municipio};

/*
data.medicion=elemento.medicion;
data.respuesta=respuestaSeleccionada;
data.municipio=municipio;*/

if(data.respuesta){ //si se selecciono respuesta

fetch(url, {
  method: 'POST',
  body: JSON.stringify(data), // data can be `string` or {object}!
  headers:{
    'Content-Type': 'application/json'
  }
})
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(response => console.log('Success:', response));

}



  i++;
 }


fetchh();



</script>
{% endblock %}", "cuestionario/cuestionario.html.twig", "/home/lucia/public_html/trivia/templates/cuestionario/cuestionario.html.twig");
    }
}
