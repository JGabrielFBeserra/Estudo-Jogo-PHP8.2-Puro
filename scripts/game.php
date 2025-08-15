<?php
    // check if there was a responde / answear
    if(isset($GET['answear'])){
        
    }


    global $capitals;
    # set current questions value
    $current_question= $_SESSION['game']['current_question'];
    $total_questions= $_SESSION['game']['total_questions'];
    $corrects_answears= $_SESSION['game']['correct_answears'];
    $incorrects_answears= $_SESSION['game']['incorrect_answears'];

    $country = $_SESSION['questions'][$current_question]['question'];
    $answears = $_SESSION['questions'][$current_question]['answears'];

?>
<div class="container mt-5 bg-white p-5 rounded-2">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card p-5">
                <div class="row mb-5">

                    <h3 class="text-center text-dark">
                        Jogos das Capitais
                    </h3>
                </div>
                <div class="row">
                    <div class="col ">
                        <h5 class="text-success ">
                            Questão n° <strong><?= $current_question+1 ?>  / <?= $total_questions ?> </strong>
                        </h5>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <h4>Corretas <strong class="text-success"><?= $corrects_answears ?> </strong></h4>
                        <span class="mx-3">|</span>
                        <h4>Erradas <strong class="text-danger"><?= $incorrects_answears?> </strong></h4>


                    </div>
                </div>
                <hr>
                <h4> Qual a capital do País: <Strong class="text-primary"><?= $country?> </Strong></h4>
                <hr>

                <div class="px-5 mt-5">
                    <h3 class="mb-5" style="cursor: pointer" id="answear_1"><?= $capitals[$answears[0]][1]?></h3>
                    <h3 class="mb-5" style="cursor: pointer" id="answear_2"><?= $capitals[$answears[1]][1]?></h3>
                    <h3 class="mb-5" style="cursor: pointer" id="answear_3"><?= $capitals[$answears[2]][1]?></h3>
                 
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("[id^='answear_']").forEach(element => {
            element.addEventListener('click', () => {
                let id = element.id.split('_')[1]
                window.location.href=`index.php?route=game&answear=${id}`

            })
        })
    }
</script>