<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Obtém os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $telefone = $_POST['telefone'];
  
  // Define o destinatário do e-mail
  $destinatario = "frielucas@gmail.com";
  
  // Define o assunto do e-mail
  $assunto = "Mensagem vinda do site de $nome";
  
  // Monta o corpo2 do e-mail
  $corpo2 = "Prezado(a) Sr(a). $nome,\n\n";
  $corpo2 .= "Gostaríamos de agradecer pelo seu contato através do nosso site e informamos que sua mensagem foi recebida com sucesso.\n";
  $corpo2 .= "Entraremos em contato o mais breve possível para dar continuidade ao seu pedido.\n\n";
  $corpo2 .= "Segue abaixo as informações que você nos forneceu:\n";

  // Monta o corpo do e-mail
  $corpo .= "Nome: $nome\n";
  $corpo .= "E-mail: $email\n";
  $corpo .= "Telefone: $telefone\n";
  $corpo .= "Mensagem: $mensagem\n\n";
  $corpo .= "Atenciosamente,\n";
  $corpo .= "Equipe do Site\n";
  $corpo2 .= $corpo;

  // Cabeçalhos adicionais
  $headers = "From: Bortolin Consultoria <$destinatario>\r\n"; // Define o remetente
  
  // Envia o e-mail
  if (mail($destinatario, $assunto, $corpo, $headers)) {
    $_POST = array(); // Limpa o formulário
    echo "<script>alert('Sua mensagem foi enviada com sucesso!'); window.history.back();</script>";
    // Envia o e-mail pro mano que mandou o form
    mail($email, 'Confirmação de envio de e-mail.', $corpo2, $headers);
    exit;
  } else  {
    echo "Ocorreu um erro ao enviar a mensagem.";
  }
}
?>
