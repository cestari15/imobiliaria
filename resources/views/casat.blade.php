@extends('template')
@section('conteudo')
    <div class="containerr">
        <button class="arrow-left control" aria-label="previus image"></button>
        <button class="arrow-right control" aria-label="next image"></button>
        <div class="gallery-wrapper">
            <div class="gallery">
                <img src="imagens/casa1.jpeg" alt="" class="item current-item">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
                <img src="imagens/casa1.jpeg" alt="" class="item ">
            </div>
        </div>
    </div>
    <h1 class="text-warning" style="text-align: center">VENDA- Casa perto do centro</h1>


    <div class="container">

        <div class="row">


            <div class="descricao  shadow-lg p-3 mb-5  rounded  col-md-8">

                <h3 class="text-warning">DESCRIÇÃO</h3>

                <p>Casa de Alto Padrão – custo Benefício incrível para você ❤️ na Estância Turística de Presidente Epitácio
                    SP.
                    <br>

                    📍 Localizado na Rua Rio Branco, 34-14, Jardim Real II em frente a ciclovia. <br>

                    O Imóvel contém; <br>

                    ✅3 quartos, sendo um deles suíte master com closet; <br>
                    ✅cozinha inteira planejada; <br>
                    ✅garagem para 2 carros; <br>
                    ✅1 sala com pé direito alto e projeto de iluminação; <br>
                    ✅1 lavabo; <br>
                    ✅lavanderia; <br>
                    ✅1 banheiro social grande; <br>
                    ✅área gourmet ampla; <br>
                    ✅piscina com acabamento de porcelanato; <br>

                    Luxo, requinte e bom gosto nesse imóvel para você ! 🔥♥️ <br>

                    Acabamento de Alto Padrão. 🤩 <br>

                    Valor do investimento R$ 520.000,00 (propostas serão analisas), isso mesmo que você ouviu 📣📣 falei que
                    era
                    incrível! <br>

                    Temos certeza de que essa casa é para você viver os melhores sonhos da sua vida, local para uma família
                    feliz! 🥰 <br>

                    Investimento na qualidade de Vida🔝🎯 <br>

                    Você está esperando o que pra vir fechar esse negócio! <br>

                    VEM FALAR COM A GENTE! 😊
                </p>
            </div>

            <div class=" descricao col-md-2 ii  shadow-lg p-3 mb-5  ">
                <h5 class="text-warning">FALE COM O NOSSO AGENTE</h5>
                <img src="" width="25" height="25">
                <p>emeplo@gmail.com</p>
                <p>(18) 99999-9999</p>
            </div>
        </div>
    </div>



    <script>
        const controls = document.querySelectorAll(".control");
        let currentItem = 0;
        const items = document.querySelectorAll(".item");
        const maxItems = items.length;

        controls.forEach((control) => {
            control.addEventListener("click", (e) => {
                isLeft = e.target.classList.contains("arrow-left");

                if (isLeft) {
                    currentItem -= 1;
                } else {
                    currentItem += 1;
                }

                if (currentItem >= maxItems) {
                    currentItem = 0;
                }

                if (currentItem < 0) {
                    currentItem = maxItems - 1;
                }

                items.forEach((item) => item.classList.remove("current-item"));

                items[currentItem].scrollIntoView({
                    behavior: "smooth",
                    inline: "center"
                });

                items[currentItem].classList.add("current-item");
            });
        });
    </script>
@endsection
