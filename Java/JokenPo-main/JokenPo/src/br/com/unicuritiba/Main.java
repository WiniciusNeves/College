package br.com.unicuritiba;
import java.util.Random;
import java.util.Scanner;

import br.com.unicuritiba.model.Jogada;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

	System.out.println("Bem-vindo ao JokenPo");
	System.out.println();
	System.out.println();	
	System.out.println();	
	
	Scanner mao = new Scanner(System.in);
	
	
	Jogada[] jogadas = new Jogada[3];
	jogadas[0] = new Jogada("Pedra",1 );
	jogadas[1] = new Jogada("Pedra",2 );
	jogadas[2] = new Jogada("Pedra",3 );
	
	System.out.println("Dgite a jogada que deseja:");
	System.out.println();	
	System.out.println("1 - Pedra");
	System.out.println();
	System.out.println("2 - Papel");
	System.out.println("");
	System.out.println("3 - Tesoura");
	System.out.println();
	
		int jogadorJogadaPosicao = mao.nextInt();
		int computadorJogadaPosicao = new Random().nextInt(3);
		
		Jogada jogadaCompudor = 
				jogadas[computadorJogadaPosicao];
		
		if(jogadorJogadaPosicao<3) {
		
		if(jogadorJogadaPosicao == jogadaCompudor.getValor()){
			System.out.println("empate");
		}
		
		else if(jogadorJogadaPosicao !=3 && jogadaCompudor.getValor() !=3) {
			if(jogadorJogadaPosicao > jogadaCompudor.getValor()) {
			System.out.println("jagador ganhou");
			
		}
		
		else {
			System.out.println("derrota, pc ganhou ");
		}
		
	}else {
					if (jogadorJogadaPosicao == 3 && jogadaCompudor.getValor() == 1) {
						System.out.println("computador ganhou");
						
					}
					else if (jogadorJogadaPosicao == 1 && jogadaCompudor.getValor() == 3 ) {
						System.out.println("Jagador ganhou");
					}	
					else {
						if (jogadorJogadaPosicao> jogadaCompudor.getValor()) {
							System.out.println("jagador ganhou");
						}
						else 
							System.out.println("computador ganhou");
					}
		    System.out.println(jogadaCompudor.getNome());
		}
		
		
		}	
		else {
			System.out.println("vc errou so pode ir ate o 3");
		}
		
	}

}
