<?php
// metodo post para enviar os dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Reconhecendo os dados do formulário
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    // adicionando cada campo aqui, em desenvolvimento....

    // Construa a mensagem do WhatsApp
    $whatsapp_message = "Nova mensagem do formulário:\n";
    $whatsapp_message .= "Nome: $name\n";
    $whatsapp_message .= "Telefone: $phone\n";
    // adicionando cada campo aqui, em desenvolvimento....

    // número que deve ser utilizado no envio da mensagem/ número do possível cliente...
    $whatsapp_number = "55849970154363";

    // Gerando a mensagem para o WhatsApp usando a URL
    $api_url = "https://api.whatsapp.com/send?phone=$whatsapp_number&text=" . urlencode($whatsapp_message);
    
    // Redirecionando para o WhatsApp
    header("Location: $api_url");
    exit;
} else {
    // Se alguém acessar este arquivo diretamente sem enviar o formulário, redirecione para a página inicial
    header("Location: index.html");
    exit;
}
?>
