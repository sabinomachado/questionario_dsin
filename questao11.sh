11)

A) Escreva uma instrução SQL que traga o nome de todos os clientes que não foram
atendidos.
SELECT cdclinome
FROM cdcliente
LEFT JOIN lcatendimento ON cdcliente.cdclicodigo = lcatendimento.lcscliente
WHERE lcatendimento.lcscliente IS NULL;


B) Escreva uma consulta SQL que mostre o nome do funcionário e a quantidade de
atendimentos que cada funcionário realizou. Caso o funcionário não tenha realizado
nenhum atendimento, a quantidade de atendimento, para este funcionário , deverá
ser 0.

SELECT cdfuncionario.cdfnome AS NomeDoFuncionario, COALESCE(COUNT(lcatendimento.lcfuncionario), 0) AS QuantidadeDeAtendimentos
FROM cdfuncionario
LEFT JOIN lcatendimento ON cdfuncionario.cdfcodigo = lcatendimento.lcfuncionario
GROUP BY cdfuncionario.cdfcodigo, cdfuncionario.cdfnome;


C) Escreva uma instrução SQL que traga o nome dos clientes e a data e hora do
atendimento, cujos atendimentos foram realizados no primeiro bimestre de 2011 ou
no segundo semestre de 2011.

SELECT cdcliente.cdclinome AS NomeDoCliente, lcatendimento.lcadatahoraatend
FROM cdcliente
INNER JOIN lcatendimento ON cdcliente.cdclicodigo = lcatendimento.lcscliente
WHERE
    (EXTRACT(YEAR FROM lcatendimento.lcadatahoraatend) = 2011 AND EXTRACT(MONTH FROM lcatendimento.lcadatahoraatend) BETWEEN 1 AND 2)
    OR
    (EXTRACT(YEAR FROM lcatendimento.lcadatahoraatend) = 2011 AND EXTRACT(MONTH FROM lcatendimento.lcadatahoraatend) BETWEEN 7 AND 12);
