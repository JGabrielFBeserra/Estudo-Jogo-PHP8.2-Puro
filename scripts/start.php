<?php
// check if there was a post to initialize the game  
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_questions = intval($_POST['text_total_questions'] ?? 5);
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
                        <form action="index.php?routes=start" method="post" >
                            <div class="mb-3">
                                <label for="text_total_questions" class="form-label">Número de Questões</label>
                                <input type="number" name="text_total_questions" class="form-control form-control-lg text-center" min="3" max="20" Value="5">
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