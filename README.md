# Desempregadosbr

## Tecnologias utilizadas

### Front-end
<div>
    <img src='https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white' />
    <img src='https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white' />
</div>

### Back-end

<div>
    <img src='https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white' />
    <img src='https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white' />
</div>

## Funcionalidades

<p>Login socialite</p>

<p>Listagem de vagas</p>

![vagas-index](https://user-images.githubusercontent.com/96303722/205310320-4817ac6d-aa9c-4516-8f0b-d8f2a97bbd8c.gif)

<p>Cadastro de vaga</p>

![cadastro-vaga](https://user-images.githubusercontent.com/96303722/205311458-5ffb77e4-f272-4d5d-961e-69375906450e.gif)

<p>Detalhes da vaga e envio de curriculo</p>

![detalhes-vaga](https://user-images.githubusercontent.com/96303722/205312860-61785b45-5c87-4ced-8c0b-2d1711125394.gif)

<p>Quando é enviado um currículo para a vaga desejada, esse currículo é enviado por email para o email do contratante,
   assim que enviado o currículo a vaga é marcada para o candidato saber que ja se candidatou para aquela vaga o impossibilitando de se candidar para a vaga novamente</p>
   
   ![candidatura](https://user-images.githubusercontent.com/96303722/205315622-f04f3c76-380d-499b-a089-ae1ef8ed00b2.png)

## Rodando o projeto

### Para instalar todas dependencias execute:

<p>composer install</p>

### Para configurar o arquivo env

#### Renomeie o arquivo .env.example para .env
<p>cp .env.example .env</p>

<p>faça as configurações do bando no arquivo env da linha 11 a 16</p>

<p>Para configurar o socialite use esse <a href='https://www.youtube.com/watch?v=_KomS815oWw&t=682s'>video</a> como referencia</p>

### Para rodar o projeto execute

<p>php artisan serve</p>
