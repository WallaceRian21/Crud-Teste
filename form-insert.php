<?php

date_default_timezone_set('America/Bahia');


ob_start();

include_once 'view/head.php';
include_once 'view/layout_lateral.php';
date_default_timezone_set('America/Bahia');
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <?php include_once 'view/card.php'; ?>
                </div>
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Prencha Os Campos</h5>
                            <span>Informações da Viagem</span>
                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                            <div class="card-header-right">
                                <i class="icofont icofont-spinner-alt-5"></i>
                            </div>
                        </div>
                        <form method="POST" action="#">
                            <div class="card-block">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Descrição</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="descricao" class="form-control" placeholder="Descrição">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Quantidade</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="quantidade" class="form-control" placeholder="Quantidade">
                                    </div>
                                </div>
                                <button type="submit" style="position:relative; margin-left: 200px" onclick="return confirm('Você tem certeza que deseja adicionar esse registro ?');" class="btn btn-info btn-round">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- CHAMANDO O MASKEDINPUT.JS -->
<script type="text/javascript" src="https://raw.github.com/digitalBush/jquery.maskedinput/1.3.1/dist/jquery.maskedinput.js"></script>
<!-- CHAMANDO O MASKMONEY.JS | CASO NÃO VÁ FORMATAR VALORES (R$) RETIRE ESSE PLUGIN -->
<script type="text/javascript" src="https://raw.githubusercontent.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
<script>
    $(document).ready(function(){
    $('#money').mask('000.000.000.000,00');
});
</script>

<?php include 'view/final_form.php'; ?>