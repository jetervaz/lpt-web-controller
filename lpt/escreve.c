
/*
 *  dapraser.c
 *  05-02-2006
 *  Jeter Vaz <jetervaz (a) gmail com>
i*/

#include <stdio.h>
#include <sys/io.h>
#include <unistd.h>
#include <stdlib.h>
#define PARAL_PORT 0x378

//se estado for zero seta bit na posicao 'pos' para '0', senao seta para '1'.
void set_bit_port(int pos, int estado)
{
	if(pos<0 || pos>15){
		printf("Posicao inexistente!!!\n");
		exit(1);
	}
	if(!estado){
		outb(((0x7f7f>>pos)&inb(PARAL_PORT)), PARAL_PORT);	
} else {
		outb(((0xff8080>>pos)|inb(PARAL_PORT)), PARAL_PORT);
	}
}

//pede permissao ao sistema para utilizar a porta de I/O 'porta'
void pede_permisao(int porta)
{
	if(ioperm(porta, 3, 1)){
		printf("Nao me foi permitido operar. Voce deve ser superusuario!\n");
		exit(1);
	}
}

main(int argc, char *argv[])
{
	pede_permisao(PARAL_PORT);
	//testa o num de argumentos
	if(argc<3){
		printf("Usage: %s POS STATUS\n", argv[0]);
		exit(1);
	}
	//testa se o primeiro argumento eh um numero
	if(argv[1][0]<'0' || argv[1][0]>'9'){
		printf("O primeiro argumento nao eh um numero!\n");
		exit(1);
	}
	set_bit_port(atoi(argv[1]), atoi(argv[2]));
}
