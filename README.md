# Interface web para controle da Porta Paralela (LPT) no Linux

*Este é um outro projeto feito em 2006 que resolvi agora disponibilizar via Github. O código é objeto de uma postagem em meu antigo blog pessoal, que você pode encontrar [aqui](https://jetervaz.wordpress.com/2014/10/04/interface-web-para-controle-da-porta-paralela-linux/), cujas partes mais relevantes seguem reproduzidas a seguir.*

O sistema web consiste em uma página completamente simples que permite controlar o *status* de cada *bit* do **registrador de dados** da [porta paralela](http://arquivo.ufv.br/dea/ambiagro/arquivos/ParallelPort/PortaParalela/), onde os sinais variam de 0 a 5V (nivel lógico baixo – zero – e alto – um -, respectivamente). Seguem algumas screenshots (feio pra caramba.. haha):

![Selecionando um dos pinos - *bits* - do registrador de dados](https://jetervaz.files.wordpress.com/2014/10/lpt1.png)
![Enviando o comando para ser executado](https://jetervaz.files.wordpress.com/2014/10/lpt2.png)

## Sobre a Porta Paralela e o conector DB25

Informações sobre a Porta Paralela (que inclusive usei à época e que antes estavam disponíveis no site *rogercom.com*), inclusive sobre como montar um circuito eletrônico para plugar nela, podem ser encontradas [aqui](http://arquivo.ufv.br/dea/ambiagro/arquivos/ParallelPort/PortaParalela/).

## Para fazer funcionar
*(última edição: 18Abr2007)*

1. Faça uma cópia do diretório `lpt` em seu diretório Web (`public_html`, por exemplo);
2. Mude o dono do arquivo fazer.txt para o usuario do servidor web (no meu caso, é `www-data`: para descobrir se o seu também é, digite `cat /etc/passwd | grep www`).
Para mudar o dono do arquivo, digite (no diretorio `lpt/`):
```
sudo chown nome_de_usuario_do_servidor_web fazer.txt
```
Se o usuario do servidor web for www-data, como o meu, fica:
```
sudo chown www-data fazer.txt
```
3. Inicie a execução do daemon com o comando (no diretório “lpt”):
```
sudo ./daemon
```
4. Se quiser deixar o daemon rodando em *background*, digite o comando e mais o
&, como abaixo:
```
sudo ./daemon &
```
5. E pronto! Acesse depois a página e boa sorte!
