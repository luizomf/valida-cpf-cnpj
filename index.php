<?php
// Inclui a classe
include('class/class-valida-cpf-cnpj.php');

// Cria um objeto sobre a classe
$cpf_cnpj = new ValidaCPFCNPJ('71569042000196');

// Opção de CPF ou CNPJ formatado no padrão
$formatado = $cpf_cnpj->formata();

// Verifica se o CPF ou CNPJ é válido
if ( $formatado ) {
	echo $formatado; // 71.569.042/0001-96
} else {
	echo 'CPF ou CNPJ Inválido';
}

#
# Opção sem formatação, apenas validação
#

// Cria um objeto sobre a classe
$cpf_cnpj = new ValidaCPFCNPJ('675.401.298-67');

// Verifica se o CPF ou CNPJ é válido
if ( $cpf_cnpj->valida() ) {
	echo 'CPF ou CNPJ válido'; // Retornará este valor
} else {
	echo 'CPF ou CNPJ Inválido';
}
?>