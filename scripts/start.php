<?php
// check if there was a post to initialize the game  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get total questiones, if null? value will be 5
    $total_questions = intval($_POST['text_total_questions'] ?? 5);

    prepare_game($total_questions);
    // redirect to game
    header('Location: index.php?route=game');
    exit;

}

function prepare_game($total_questions)
{
    // lets prepare all for game here
    global $capitals;
    echo '<pre>';

    //get random items
    $ids = [];
    while (count($ids) < $total_questions) {
        $id = rand(0, count($capitals) - 1);
        if (!in_array($id, $ids)) {
            $ids[] = $id;
        }
    }

    // define first data for $questions
    $question = [];
    foreach ($ids as $id) {
        /*
        como eu fiz primeiro

        $resposta;
        $answears = [];
        for ($i = 0; $i < 3; $i++) {
            $answear = rand(0, count($capitals) - 1);
            $answear = $capitals[$id][1];
            if (!in_array($answear, $answears)) {
                $answears[] = $answear;
            }
        }
        $ide1 = rand(0, count($capitals) - 1);
        $ide2 = rand(0, count($capitals) - 1);
        $answear = [$capitals[$id][1], $capitals[$ide1][1], $capitals[$ide2][1]];
        shuffle($answear);
        for ($i = 0; $i < count(value: $answear); $i++) {
            if ($answear[$i] == $capitals[$id][1]) {
                $resposta = $i;
            }
        }
        $question[]  = [
            'question' => $capitals[$id][0],
            'correct_answear' =>  $resposta,
            'answears' => $answear
        ];
        */
        
        


    }
    print_r($question);

}


?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card p-5">
                <div class="row">
                    <h3 class="col text-center">
                        Acerte as Capitais!!!
                    </h3>
                    <hr>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 ">
                        <form action="index.php?route=start" method="post">
                            <div class="mb-3">
                                <label for="text_total_questions" class="form-label">Número de Questões</label>
                                <input type="number" name="text_total_questions"
                                    class="form-control form-control-lg text-center" min="3" max="20" Value="5">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Começar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>