<? require("pslib.class"); ?>
<html>
<head>
<title>Hist�rico Escolar</title>
</head>

<body bgcolor="#FFFFFF">
<?

  echo("<font face=\"Verdana, Arial, Helvetica, sans-serif\"> AGUARDE. IMPRIMINDO... (PRINTING...) <br></font>");

//// PS DESTINATION FILE - ARQUIVO PS DESTINO
   $nome_arq_ps = "historico.ps";
   
   $PS = new postscript( $nome_arq_ps, "Vilson C. Gartner", "Historico Escolar","Portrait");
   //THE COMMENTED LINES bellow are refference to the 0.02 functions
   //$myfile_ps = fopen($nome_arq_ps,"w");
   //PS_open($myfile_ps, "Vilson Cristiano Gartner", $nome_arq_ps, "Portrait");

   $id          = 1;
   $nome        = 'Vilson Cristiano Gartner';
   $rua         = 'Rua 13 de Maio, 346 - Ap. 32';
   $complemento = 'Ap. 32';
   $bairro      = 'Centro';
   $cep         = '95885-000';
   $cidade      = 'Estrela';
   $dt_nascimento = '24/01/1973';
   $rg_orgao      = 'SSP';
   $rg_numero     = '123456789';
   $rg_data       = '01/01/2000';
   $curso         = '001';
   $ano_2g        = '1990';
   $nome_curso    = 'Engenharia da Computa��o';
   $nome_mae      = 'Noeli Gartner';
   $nome_pai      = 'Silvio Gartner';
   $nome_cidade   = 'Estrela';
   $nome_uf       = 'RS';
   $nome_rg_cidade = 'Porto Alegre';
   $nome_rg_uf     = 'RS';
   $nome_escola2g  = 'E.E 1� e 2� graus';
   $nome_curso2g   = '2.o grau normal';
   $nome_cidade2g  = 'Imigrante';
   $nome_uf2g      = 'RS';
   
   $PS->begin_page(1); 
   
   $PS->show_xy_font("HIST�RICO ESCOLAR", 208, 754, "Arial-Bold", 16);
   
   $PS->show_xy_font("CURSO:", 26, 715, "Arial-Bold", 10);
   
   $PS->show_xy_font("$curso  -  $nome_curso", "70.2", 715, "Arial", 10);
   
   $PS->show_xy_font("NOME:", 26, 702, "Arial-Bold", 10);
   
   $PS->show_xy_font($nome, "70.2", 702, "Arial", 10);
   
   $PS->show_xy_font("FILIA��O:", 26, 689, "Arial-Bold", 10);
   
   $PS->show_xy_font("$nome_mae , $nome_pai", 78, 689, "Arial", 10);
   
   $PS->show_xy_font("NASCIMENTO:", 26, 676, "Arial-Bold", 10);
   
   $PS->show_xy_font($dt_nascimento, 117, 676, "Arial", 10);
   
   $PS->show_xy_font("UF/CIDADE:", 260, 676, "Arial-Bold", 10);
   
   $PS->show_xy_font($nome_uf . "/" . $nome_cidade, 325, 676, "Arial", 10);
   
   $PS->show_xy_font("C�DULA DE IDENTIDADE:", 26, 650, "Arial-Bold", 10);
   
   $PS->show_xy_font("�RG�O EXPEDIDOR:", 26, 637, "Arial-Bold", 10);
   
   $PS->show_xy_font($rg_orgao, 143, 637, "Arial", 10);
   
   $PS->show_xy_font("N�:", 260, 637, "Arial-Bold", 10);
   
   $PS->show_xy_font($rg_numero, 286, 637, "Arial", 10);
   
   $PS->show_xy_font("DATA DA EXPEDI��O:", 26, 624, "Arial-Bold", 10);
   
   $PS->show_xy_font($rg_data, 143, 624, "Arial", 10);
   
   $PS->show_xy_font("UF/CIDADE:", 260, 624, "Arial-Bold", 10);
   
   $PS->show_xy_font($nome_rg_uf . "/" . $nome_rg_cidade, 325, 624, "Arial", 10);
   
   $PS->show_xy_font("CURSO SECUNDARIO:", 26, 598, "Arial-Bold", 10);
   
   $PS->show_xy("INSTITUI��O:", 26, 585);
   
   $PS->show_xy_font($nome_escola2g, 104, 585, "Arial", 10);
   
   $PS->show_xy_font("CURSO:", 26, 572, "Arial-Bold", 10);
   
   $PS->show_xy_font($nome_curso2g, 70, 572, "Arial", 10);
   
   $PS->show_xy_font("ANO DE CONCLUS�O:", 26, 559, "Arial-Bold", 10);
   
   $PS->show_xy_font($ano_2g, 143, 559, "Arial", 10);
   
   $PS->show_xy_font("UF/CIDADE:", 260, 559, "Arial-Bold", 10);
   
   $PS->show_xy_font($nome_uf2g . "/". $nome_cidade2g, 325, 559, "Arial", 10);
   
   $PS->show_xy_font("VESTIBULAR:", 26, 533, "Arial-Bold", 10);
   
   $PS->show_xy_font("vestiba???", 95, 533, "Arial", 10);
   
   $PS->show_xy_font("DATA", 26, 507, "Arial-Bold", 10);
   
   $PS->show_xy("DESCRI��O DA PROVA", 78, 507);
   
   $PS->show_xy("PONTOS", 390, 507);
   
   $PS->line(26, 504, 505, 504, 1);
   
   $PS->rect(100, 400, 15, 380, 1);
   
   $PS->rect_fill(300, 300, 600, 400, 2, "0.7");
   
   $PS->moveto(50, 200);
   $PS->show("Copyleft 1999-2000  Vilson Cristiano Gartner  vgartner@univates.br");
   
   $PS->moveto(50, 226);
   $PS->set_font("Arial-Bold", 20);
   $PS->show("Univates SAGU Team  -  Lajeado/RS - Brazil");
   
   //// LOGOTIPO UNIVATES - PS Image => Detail: when inserting a ps image, must delete the information about the file (in the top of the file)
   $PS->open_ps('logounivates.ps');
   
   $PS->end_page();
   
   $PS->begin_page(2);

   $PS->show_xy_font("This is page 2", 145, 700, "Arial", 12);
   $PS->show_xy_font("Home Page: http://pslib.sourceforge.net", 60, 443, "Arial-Bold", 14);

   $PS->rotate(30);
   $PS->moveto(75, 100);
   $PS->show(" Rotate sample...................................................");
   $PS->rotate(360);
   
   $PS->show_xy_font("Send your examples to vgartner@univates.br", 100, 300, "Arial", 12);

   $PS->moveto(80, 226);
   $PS->set_font("Arial", 20);
   $PS->show("Open Source: highway to knowledge.");
   
   //$PS->end_page(); not necessary, close() will make it
   $PS->close();
   
   echo("<font face=\"Verdana, Arial, Helvetica, sans-serif\"> IMPRESS�O REALIZADA. (FINISHED) </font>");
?> 
<script Language="Javascript">
    location="<? echo($nome_arq_ps) ?>";
</script>
    <br>
</body>
</html>
