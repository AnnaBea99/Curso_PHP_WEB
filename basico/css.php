<div class="titulo">Integração CSS</div>

<h1 center rosa>
<?php
echo 'Olá';
echo '<small> ';
echo ' Mundo!';
echo '<small>';
?>
</h1>

<?= "<div>Que negócio mais desorganizado</div>" ?>

<br>

<div center><button><?="Legal"?></button></div>


<style>
    button{
        padding: 5px 20px;
        background-color: lightpink;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{ /*Isso aqui é um atributo*/ 
        display: flex;
        justify-content: center;
    }

    [rosa]{
        color: lightpink;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>