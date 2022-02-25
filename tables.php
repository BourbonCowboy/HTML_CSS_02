<?php require __DIR__ . "/_header.php"; ?>

<style>
    table,
    tr,
    th,
    td {
        border: 1px solid black;
    }
</style>

<h2>Tabelas</h2>

<h3>Referências:</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_tables.asp" target="_blank">Tabelas no W3Schools</a></li>
</ul>

<p><strong>table</strong> &rarr; Cria uma tabela.</p>
<p><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</p>
<p><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</p>
<p><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</p>
<p><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</p>
<p><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</p>

<table>

    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Outra tabela</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<table>

    <tr>
        <th><strong>Cliente</strong></th>
        <th><strong>Tipo de serviço</strong></th>
        <th><strong>Demanda/Processo</strong></th>
        <th><strong>Data de adesão</strong></th>
    </tr>

    <tr>
        <td>Fulano</td>
        <td>Contencioso</td>
        <td>Execução/0123</td>
        <td>01/02/2021</td>
    </tr>

    <tr>
        <td>Siclano</td>
        <td>Consultivo</td>
        <td>Ação de cobrança/03210</td>
        <td>01/02/2019</td>
    </tr>

    <tr>
        <td>Beltrano</td>
        <td>Contencioso</td>
        <td>Ação penal/0333</td>
        <td>18/02/2018</td>
    </tr>

    <tr>
        <td>Fulaninha</td>
        <td>Consultivo</td>
        <td>M&A</td>
        <td>08/05/2015</td>
    </tr>

    <tr>
        <td>Siclaninha</td>
        <td>Consultivo</td>
        <td>Prospecto de IPO</td>
        <td>08/05/2021</td>
    </tr>

    <tr>
        <td>Beltraninha</td>
        <td>Contencioso</td>
        <td>Ação de usucapião/09843</td>
        <td>08/07/2020</td>
    </tr>
</table>


<h3>Exercícios</h3>
<ol>
    <li>Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.</li><br>
    <li>Crie uma pequena lista de compras para o brunch das crianças.</li><br>
    <li>Clique no relógio do Windows e reproduza o calendário do mês atual usando HTML.</li>
</ol>

<?php require __DIR__ . "/_footer.php"; ?>