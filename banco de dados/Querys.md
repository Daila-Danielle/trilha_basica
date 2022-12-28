# Monte as seguintes consultas:

## Obter todos os beneficiários que possuam veículos ativos.
SELECT b.id, b.nome
FROM veiculos v INNER JOIN beneficiarios b
ON v.idBeneficiario = b.id
WHERE
v.situacao LIKE 'A'
GROUP BY b.id
<br>

## Obter todos os beneficiários que tenham mais de dois veículos ativos.
SELECT id, nome, quant FROM (SELECT b.id, b.nome, COUNT (v.idBeneficiario) AS quant
FROM veiculos v INNER JOIN beneficiarios b
ON v.idBeneficiario = b.id
WHERE
v.situacao LIKE 'A'
GROUP BY b.id) AS total 
WHERE quant >= 2
<br>

## Obter todos os veículos que não possuam produtos ativos.
SELECT v.id, v.placa
FROM produtoVeiculo pv INNER JOIN veiculos v
ON pv.idVeiculo = v.id
WHERE
pv.situacao LIKE 'I'
GROUP BY v.id

## Obter todos os produtos que possuam mais de 3 serviços vinculados a ele.
SELECT id, nome, quant FROM (SELECT p.id, p.nome, COUNT (ps.idProduto) AS quant
FROM produtoServico ps INNER JOIN produtos p
ON ps.idProduto = p.id
GROUP BY p.id) AS total 
WHERE quant >= 2
<br>

## Atualizar a situação dos veículos para inativos (I) cujos beneficiários estão também inativos.
UPDATE veiculos v 
INNER JOIN beneficiarios b ON v.`idBeneficiario` = b.id 
SET v.`situacao` = 'I' 
WHERE b.`situacao`='I';
<br>

## Excluir todos os beneficiários que não tenham veículos.
DELETE FROM beneficiarios
WHERE beneficiarios.id NOT IN (SELECT idBeneficiario FROM veiculos)
<br>

## Atualizar para inativo todos os veículos e todos os beneficiários que são da cidade de Belo Horizonte.
UPDATE     veiculos v
INNER JOIN beneficiarios b ON v.`idBeneficiario` = b.id 
SET v.`situacao` = 'I' , b.situacao = 'I'
WHERE b.cidade = 'belo horizonte';
<br>

## Exibir a quantidade de veículos por estado
SELECT b.uf, COUNT (v.idBeneficiario) AS quant
FROM veiculos v INNER JOIN beneficiarios b
ON v.idBeneficiario = b.id
GROUP BY b.uf
