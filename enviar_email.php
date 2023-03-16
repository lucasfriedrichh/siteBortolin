<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Obtém os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  
  // Define o destinatário do e-mail
  $destinatario = "frielucas@gmail.com";
  
  // Define o assunto do e-mail
  $assunto = "Nova mensagem de $nome";
  
  // Monta o corpo do e-mail
  $corpo = "Nome: $nome\n";
  $corpo .= "E-mail: $email\n";
  $corpo .= "Mensagem: $mensagem\n";
  
  // Envia o e-mail
  if (mail($destinatario, $assunto, $corpo)) {
    echo "Sua mensagem foi enviada com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar a mensagem.";
  }
  
}
?>
