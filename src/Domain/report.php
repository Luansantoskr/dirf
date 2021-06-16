<?php

return "<!doctype html>
<html>
    <head>
    </head>
    <body>
        <table border='0' width=\"90%\" align=\"center\">
            <tr><td><img style=\"margin-left: -70px\" width=\"300\" height=\"100\" src='http://cdn-content.talentbrand.com.br/companies/136/w512h140/2cff6a550126b78d6f8064a9bc6fd36428f23222.png?1550302732' border=\"0\"></td></tr>
            <tr><td>
            <table border='1' cellpadding='0' cellspacing='0' width=\"100%\">
                <tr><td width='50%' align=\"center\"><strong>MINISTÉRIO DA FAZENDA SECRETARIA DA RECEITA FEDERAL DO BRASIL</strong></td>
                <td width='50%' align=\"center\"><strong>COMPROVANTE ANUAL DE RENDIMENTOS PAGOS OU CREDITADOS E DE RETENÇÃO DO IMPOSTO DE RENDA
                NA FONTE PESSOA JURÍDICA
                ANO CALENDÁRIO 2013</strong></td>
            </table>
            </td></tr>
            <tr><td>&nbsp</td></tr>
            <tr><td><strong>1. FONTE PAGADORA</strong></td></tr>
            <tr><td>
                <table border='1' cellpadding='0' cellspacing='0' width=\"100%\">
                    <tr>
                        <td width='70%'>
                            <table align='left'>
                                <tr>
                                    <td align='left' valing='top'>
                                        <font size='-1'>NOME EMPRESARIAL <BR>{$data['RAZAO_SOCIAL']}
                                        <BR>{$data['ENDE']}, {$data['BAIR']} 
                                        <BR> CEP ".preg_replace('/(\d{5})(\d{3})/', '$1-$2', str_replace('-', '', $data['CEP']))."&nbsp&nbsp&nbsp&nbsp{$data['CIDA']}-{$data['UF']}</font>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <td width='30%' align=\"left\" valing='top'><font size='-1'>&nbspCNPJ <BR>&nbsp{$data['CNPJ']}</font></td>
                </table>
            </td></tr>

            <tr><td>&nbsp</td></tr>
            <tr><td><strong>2. PESSOA JURÍDICA BENEFICIÁRIA DOS RENDIMENTOS</strong></td></tr>
            <tr><td>
                <table border='1' cellpadding='0' cellspacing='0' width=\"100%\">
                    <tr>
                        <td width='70%'>
                            <table align='left'>
                                <tr><td align='left' valing='top'>
                                <font size='-1'>
                                    NOME EMPRESARIAL <BR>FORTBRASIL ADMINISTRADORA DE CARTÕES DE CRÉDITO S/A<BR>
                                    Av.Bezerra de Menezes, Otávio Bonfim <br> Cep: 60325-000   Fortaleza-CE
                                </font></td></tr>
                            </table>
                        </td>
                    <td width='30%' align=\"left\" valing='top'><font size='-1'>&nbspCNPJ <BR>&nbsp02732968000138 </font></td>
                </table>
            </td></tr>
            
            <tr><td>&nbsp</td></tr>
            <tr>
                <td><strong>
                    3. RENDIMENTO E IMPOSTO DE RENDA RETIDO NA FONTE <BR>&nbsp&nbsp&nbsp
                    CÓDIGO: 8045  Comissões Pagas a Pessoas Jurídicas
                </strong></td></tr>
            <tr><td>
                <table border='1' align='center' cellpadding='0' cellspacing='0' width=\"80%\">
                    <tr>
                        <td width='33%' align=\"center\"><strong>Mês</strong></td>
                        <td width='33%' align=\"center\"><strong>Rendimentos - R$</strong></td>
                        <td width='33%' align=\"center\"><strong>Imposto de Renda - R$</strong></td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Janeiro</td>                        
                        <td width='33%' align=\"right\">{$data['VL_01']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_01']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Fevereiro</td>                        
                        <td width='33%' align=\"right\">{$data['VL_02']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_02']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Março</td>                        
                        <td width='33%' align=\"right\">{$data['VL_03']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_03']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>                    
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Abril</td>                        
                        <td width='33%' align=\"right\">{$data['VL_04']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_04']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Maio</td>                        
                        <td width='33%' align=\"right\">{$data['VL_05']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_05']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Junho</td>                        
                        <td width='33%' align=\"right\">{$data['VL_06']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_06']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Julho</td>                        
                        <td width='33%' align=\"right\">{$data['VL_07']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_07']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Agosto</td>                        
                        <td width='33%' align=\"right\">{$data['VL_08']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_08']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Setembro</td>                        
                        <td width='33%' align=\"right\">{$data['VL_09']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_09']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Outubro</td>                        
                        <td width='33%' align=\"right\">{$data['VL_10']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_10']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Novembro</td>                        
                        <td width='33%' align=\"right\">{$data['VL_11']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_11']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\">&nbsp&nbsp&nbsp&nbsp Dezembro</td>                        
                        <td width='33%' align=\"right\">{$data['VL_12']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_12']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td width='33%' align=\"left\"><strong>&nbsp&nbsp&nbsp&nbsp Total</strong></td>
                        <td width='33%' align=\"right\">{$data['VL_TOTAL']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td width='33%' align=\"right\">{$data['TX_TOTAL']}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                </table>
            </td></tr>

            <tr><td>&nbsp</td></tr>
            <tr>
                <td><strong>
                    4. INFORMAÇÕES COMPLEMENTARES
                </strong></td></tr>
            <tr>
            <tr><td>
                <table border='1' cellpadding='0' cellspacing='0' width=\"100%\">
                    <tr>
                        <td align=\"left\">
                           &nbspVocê está recebendo o documento comprobatório com indicação dos valores das
importâncias pagas e do respectivo imposto de renda recolhido, em atendimento ao disposto do
art. 17 da INSTRUÇÃO NORMATIVA DA RFB Nº 1.406, de 23 DE OUTUBRO DE 2013, DOU
24/10/2013, a fim de que sejam incluídas determinadas informações na Declaração do
Imposto de Renda Retido na FONTE (DIRF) dessa conceituada empresa.
                        </td>
                </table>
            </td></tr>
            
            <tr><td>&nbsp</td></tr>
            <tr>
                <td><strong>
                    5. RESPONSÁVEL PELAS INFORMAÇÕES
                </strong></td></tr>
            <tr>
            <tr><td>
                <table border='1' cellpadding='0' cellspacing='0' width=\"100%\">
                    <tr>
                        <td align=\"left\" width=\"50%\">&nbspNome <br> &nbspFORTBRASIL</td>
                        <td width=\"50%\">DATA<br>31/01/2014</td>
                </table>
            </td></tr>
            <tr><td colspan=\"3\"><font site=\"-1\">
                <h3>Prestador de Serviços de Cartões de Crédito, a FORTBRASIL disponibiliza agora um canal de atendimento via chat.
                Entre em contato conosco através do nosso site:<br>
                www.fortbrasil.com.br</h3></font>
            <td></tr>
        </table>
    </body>
</html>";