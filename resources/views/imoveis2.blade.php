@extends('template')
@section('conteudo')
<p class="container"><strong class="text-warning">HOME</strong> > <strong class="text-danger">IMÓVEIS</strong></p>

<div class="pesquisa">
    <h1 class="text-warning">PESQUISE AQUI</h1>
    <form action="" method="get">
        <div class="container">
            <div class="row">
                <div class=" baixo2 col-md-3">
                    <select class="form-select" id="input01">
                        <option selected>-BANHEIROS</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="baixo2 col-md-3">
                    <select class="form-select" id="input02">
                        <option selected>-QUARTOS-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class=" baixo2 col-md-3">
                    <select class="form-select" id="input03">
                        <option selected>-SALAS-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class=" baixo2 col-md-3">
                    <select class="form-select" id="input04">
                        <option selected>-CONTRATOS-</option>
                        <option value="1">ALUGUEL</option>
                        <option value="2">VENDA</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="row">

                <div class="col-md-3">
                    <select class="form-select" id="input05">
                        <option selected>-GARAGENS-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select" id="input06">
                        <option selected>-LOCALIZAÇÃO</option>
                        <option value="1">BELA VISTA</option>
                        <option value="2">CENTRO</option>
                        <option value="3">CAMPINAL</option>
                        <option value="4">HOSSOUME</option>
                        <option value="5">JARDIM AEROPORTO</option>
                        <option value="6">JARDIM REAL 1 E 2</option>
                        <option value="7">JARDIM TROPICAL</option>
                        <option value="8">JÓIA RIBEIRINHA</option>
                        <option value="9">ÁGUA DOCE</option>
                        <option value="10">LOTEAMENTO RUBINHO</option>
                        <option value="11">PONTAL DO ANASTÁCIO</option>
                        <option value="12">PORTAL DO LAGO</option>
                        <option value="13">PRESIDENTE PRUDENTE</option>
                        <option value="14">OUTROS</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select" id="input07">
                        <option selected>-TIPO DE PROPRIEDADE-</option>
                        <option value="1">APARTAMENTO</option>
                        <option value="2">CASA</option>
                        <option value="3">CASA DE VERANEIO</option>
                        <option value="4">CHÁCARA</option>
                        <option value="5">CONDOMÍNIO</option>
                        <option value="6">EM CONSTRUÇÃO</option>
                        <option value="7">LANÇAMENTO</option>
                        <option value="8">PRÉDIO COMERCIAL</option>
                        <option value="9">QUITINETE</option>
                        <option value="10">RANCHO</option>
                        <option value="11">SALA COMERCIAL</option>
                        <option value="12">SALÃO COMERCIAL</option>
                        <option value="13">SOBRADO</option>
                        <option value="14">TERRENO</option>
                        <option value="15">VILA</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <button type="button" class="btn btn-warning" style="color: white">PESQUISAR</button>
                </div>
            </div>

        </div>
    </form>

</div>

<h1 class="text-warning casa" style="text-align: center">CASAS DE VERANEIO</h1>

<div class="container rr">

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>
</div>

<div class="container rr mn">
    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#"><button type="button" class="btn btn-warning">VER MAIS</button></a>

</div>

<h1 class="text-warning casa" style="text-align: center">QUITINETES</h1>

<div class="container rr">

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>
</div>

<div class="container rr mn">
    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#"><button type="button" class="btn btn-warning">VER MAIS</button></a>

</div>

<h1 class="text-warning casa" style="text-align: center">CHÁCARAS</h1>

<div class="container rr">

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>
</div>

<div class="container rr mn">
    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#"><button type="button" class="btn btn-warning">VER MAIS</button></a>

</div>

<h1 class="text-warning casa" style="text-align: center">RANCHOS</h1>

<div class="container rr">

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>
</div>

<div class="container rr mn">
    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>


    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="box">
            <div class="imgBox ">
                <img src="imagens/casa1.jpeg" alt="ALT">
            </div>
            <div class="content">
                <h3>Casa Alto Padrão</h3>
                <p class="text-warning">R$ 15.000.000,00</p>
                <p><strong>DESCRIÇÃO:</strong>casa de alto padrão localizada no <strong>Portal do lago</strong> com
                    vista pro rio, proriedade com 500m², em condomínio fechado</p>
                <br>
                <p><img src="imagens/carro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/banheiro.png" alt="" width="25px" height="25px">4</p>
                <p><img src="imagens/cama-de-casal.png" alt="" width="25px" height="25px">4</p>
            </div>
        </div>
    </a>

    <a href="#"><button type="button" class="btn btn-warning">VER MAIS</button></a>

</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item ">
            <a class="page-link" href="{{route('imoveis')}}">Anterior</a>
        </li>
        <li class="page-item"><a class="page-link" href="{{route('imoveis')}}">1</a></li>
        <li class="page-item"><a class="page-link" href="{{route('imoveis2')}}">2</a></li>
        <li class="page-item"><a class="page-link" href="{{route('imoveis3')}}">3</a></li>
        <li class="page-item">
            <a class="page-link" href="{{route('imoveis3')}}">Próximo</a>
        </li>
    </ul>
</nav>
@endsection