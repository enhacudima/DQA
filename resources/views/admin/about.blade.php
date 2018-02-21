@extends('admin.layout.layout')
@section('content')

    <link rel="stylesheet" type="text/css" href="//necolas.github.io/normalize.css/4.1.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
    }

    header{
        width:20%;
        background:#fff;
        position: absolute;
        left:5%;
        top: 160px;
        z-index: 5;
        text-align: center;
        text-decoration: none;
    }
    header h1{
        text-align: center;
        text-decoration: none;
    }
    navs ul{
        list-style:none;
        padding:0;
    }
    navs a{
        display:block;
        border:1px solid #e5e5e5;
        border-left:0;
        border-right:0;
        margin:3px 0;
        color:#333;
        padding:5px 0;
        text-decoration: none;
    }
    navs > ul > li >a:hover{
        background: #5fc32b;
        text-decoration: none;
        color: #fff;
    }
    .box{
        position:absolute;
        top: 80px;
        right:10px;
        width:70%;
        height:70%;
        background:#fff;
    }

    navs > ul > li{
        border-radius: 8px;
        cursor: pointer;
        transition: all 600ms ease-in-out;
        text-decoration: none;
    }

    navs > ul > li > a{
        font-weight: bold;
        text-decoration: none;
    }


    .box h2{
        font-size:20px;
        padding:10px;
    }
    .box p{
        font-size:12px;
        padding:10px;
    }
    .content{
        min-width: 100%;
        height: 98%;
        position: absolute;
        margin-left:-101%;
        -webkit-transition: margin-left .8s ease-in-out;
        -moz-transition: margin-left .8s ease-in-out;
        -o-transition: margin-left .8s ease-in-out;
        transition: margin-left .8s ease-in-out;
    }
    .content:target{
        margin-left:0;
    }
    #home{
        margin-left:0;
    }
    #home:target ~ header #link-home a,
    #company:target ~ header #link-company a,
    #service:target ~ header #link-service a,
    #contact:target ~ header #link-contact a{
        background: rgba(245,127,23,.8);;
        color: #fff;
    }

    #contact:target ~ header #link-contact a {
        font-size: 18px;
        font-weight: bold;
        color: rgba(255,255,255, 0.8);
    }
</style>
<section id="home" class="content">
    <article class="box">
        <h2>Sobre</h2>
        <p>-Evidevi/DQA é uma ferramenta online que serve para registrar, armazenar,consular e analisar <br>
            dados no âmbito do DQA. Em geral o seu acesso é feito a partir de qualquer dispositivo com Internet.
        </p>
        <p>-Todos os dados introduzidos são enviados para um servidor central que armazena a informação</p>
    </article>
</section>
<section id="company" class="content">
    <article class="box">
        <h2>Recomendações </h2>
        <p>- Ter um dispositivo compatível com HTML5 e com uma tela de no mínimo 5.4 polegadas</p>
        <p>- Ter acesso a internet</p>
        <p>-Antes de gravar cada dado introduzido deve observar se realmente o icon que aparece<br>com a massagem sobre o estado da conexão apresenta cor verde ou não.</p>
        <p>-A cor verde representa presença da internet e laranja representa a ausência da mesma  </p>
        <p>-Depois de utilizar o sistema deve garantir que esta o enceramento da cessão através do<br>
            menu que aparece no canto superior direito </p>


    </article>
</section>
<section id="service" class="content">
    <article class="box">
        <h2>Formularios</h2>
        <p>-Toda navegação é garantida a traves de um Menu localizado no topo da pagina, para aceder a cada tópico <br>
            ou grupo de formulários basta clicar na seta que aparece de cada lado</p>
        <p>-Uma vez gravado o formulário não há possibilidade de editar sem autorização do super admin</p>
        <P>-Esta medida não se aplica para o formulário de recontagem do livro de registro</P>
        <p>-O Formulário de livro de registro pode ser alterado sempre que necessário </p>
        <p>-Para alterar algum registro da recontagem do livro é necessário os 3 elementos identificadores <br>(franquia, data DQA, identificação dos documentos consultados)   </p>
        <p>-O sistema dispõe de 2 formas de gravar (botão e sem botão(automatico))</p>
        <p>-Todas massagens pitadas a verde significam sucesso de alguma ação anteriormente ativada  </p>

    </article>
</section>
<section id="contact" class="content">
    <article class="box">
        <h2>Relatórios </h2>
        <p>Cada formulário tem o seu devido relatório que pode ser consultado segundos depois de introduzir a informação através do menu reports
        </p>
        <p>Todos relatórios contem botões para baixar (Excel, csv), selecionar colunas para visualização, print     </p>
        <p>Os elementos chaves para analise da informação introduzida é a franquia, data DQA </p>
    </article>
</section>
<header>
    <h1 style="text-align: center" >Guião de Utilizador</h1>
    <navs>
        <ul>
            <li id="link-home"><a href="#home">Sobre</a></li>
            <li id="link-company"><a href="#company">Recomendações </a></li>
            <li id="link-service"><a href="#service">Formularios</a></li>
            <li id="link-contact"><a href="#contact">Relatórios</a></li>
        </ul>
    </navs>
</header>


@endsection()