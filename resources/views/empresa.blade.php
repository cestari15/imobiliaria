@extends('template')
@section('conteudo')
    <h1 class="text-warning" style="text-align: center">ENTRE EM CONTATO COM A GENTE</h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" placeholder="Digite Seu Nome">
                <label for="nome">Digite Seu Nome</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Coloque seu E-mail</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="coment" style="height: 100px"></textarea>
                <label for="coment">Comentários</label>
            </div>

        </form>
    </div>
    <div class=" container">
        <div class="row">
            <div class="col-md-3 card kl">
                <h1 class="text-warning" style="text-align: center">QUEM SOMOS NÓS ?</h1>
                <br>
                <p>Somos uma empresa que esta no ramo imobiliário, com o nosso dirigente com mais de <strong>20
                        anos</strong> de
                    experiencia na Área</p>
                <p>Nossa empresa trata-se de uma empresa de compra e venda de imóveis e terrenos.</p>
            </div>
            <div class="col-md-3 card kl">
                <h1 class="text-warning" style="text-align: center">ONDE ESTAMOS LOCALIZADOS ?</h1>
                <p>Estamos localizados no interior de São Paulo na cidade de Presidente Epitácio, Todavia trabalhamos com
                    Cidades na
                    região de Presidente Prudente</p>
                <p>Como de exemplo: Presidente Venceslau, Caiuá, Piquerobi entre outras.</p>
            </div>
            <div class="col-md-3 card kl">
            <h1 class="text-warning" style="text-align: center">QUE IMÓVEIS TRABALHAMOS ?</h1>
            <p>Trabalhamos com variados tipos desde Terrenos aTé salões comerciais, isso esta incluso: Apartamentos, Casas,
                Terrenos, Salas de Comercio, Chácara, Quitinete, Casa de Veraneio. </p>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
