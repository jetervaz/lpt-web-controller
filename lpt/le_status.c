#include <stdio.h>
#include <sys/io.h>
#include <unistd.h>
#include <stdlib.h>
#define PARAL_PORT 0x378

//pede permissao ao sistema para utilizar a porta de I/O 'porta'
void pede_permisao(int porta)
{
	if(ioperm(porta, 3, 1)){
		printf("Nao me foi permitido operar. Voce deve ser superusuario!\n");
		exit(1);
	}
}

int read_bit_s(int bit)
{
	int byte;
	if(bit<0 || bit>8){
		printf("Bit inexistente!!!\n");
		exit(1);
	}
	byte=inb(PARAL_PORT);
	bit=0x80>>bit;
	if((bit & byte) == 0){
		return 0;
	} else {
		return 1;
	}
}

main(int argc, char *argv[])
{
	int i;
	pede_permisao(PARAL_PORT);
	for(i=0;i<8;i++){
		printf("%d", read_bit_s(i));
	}
	printf("\n");
}
