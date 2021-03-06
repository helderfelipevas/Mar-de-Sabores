<?php

require_once '../../config.inc.php';

$bo = new ProdutoBO();
$dao = new ProdutoDAO();

$acao= $_POST['acao'];

if ($acao == 'cadastrar'||$acao == 'alterar'){
    //$vl_produto = str_replace(",",".", vlproduto);
    $dados = [
        'cd_produto'=> "",
        'CONFEITEIRO_cd_confeiteiro'=> $cdConfeiteiro = 1,
        'nm_produto' => $_POST['nmProduto'],
        'vl_produto' => $_POST['vlProduto'],
        'nm_categoria' => $_POST['nmCategoria'],
        'nm_tipo_produto' => $_POST['nmTipoProduto'],
        'ds_produto' => $_POST['dsProduto'], 
        'nm_situacao' => 'A'
        ];
}
switch ($acao){
    
    case 'cadastrar';
        $bean = $bo->populaBean($dados);
        $resultado= $bo->cadastrarProduto($bean);
        header('Location: ../../view/produto/produto.php');
        break;
    case 'alterar';
        $dados['cd_produto']= $_POST['cdProduto'];
        $bean = $bo->populaBean($dados);
        $resultado = $bo->alterarProduto($bean);
        echo $resultado;
        break;
    case 'alterarDados';
        $produto = $dao->findByPk($_POST['cdProduto']);
        $bean= $bo->populaBean($produto[0]);
        include_once '../../view/produto/produtoView.php';
        break;
    case 'desativar';
        $produto = $dao->findByPk($_POST['cdProduto']);
        $bean = $bo->populaBean($produto[0]);
        $bo->desativarProduto($bean);
        break;
    case 'deletar';
        $produto = $dao->findByPk($_POST['cdProduto']);
        $bean = $bo->populaBean($produto[0]);
        $bo->deletarProduto($bean);
        break;
}

