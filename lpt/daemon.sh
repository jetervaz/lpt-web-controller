#!/bin/bash

while true
do
	for i in `seq 1 100`
	do
		./escreve $(cat fazer.txt | cut -c1,2,3,4)
		./le_status >> estado.txt
	done
	./le_status > estado.txt
done

