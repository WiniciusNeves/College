package br.cm.unicuritiba;
import java.util.Random;
import java.util.Scanner;
import java.util.Timer;
import java.util.TimerTask;

public class Main {
    private static final int Facil = 240; //modo facil
    private static final int Medio = 120; //modo médio
    private static final int Dificio = 60; //modo dificil

    public static void main(String[] args) {
        System.out.print("Informe o número de categorias para o stop: ");
        Scanner scanner = new Scanner(System.in);
        int numcat = scanner.nextInt();
        scanner.nextLine();
        String[] categorias = new String[numcat];
        for (int i = 0; i < numcat; i++) {
            System.out.print("Insira o nome da categoria: ");
            String nomeCategoria = scanner.nextLine();
            categorias[i] = nomeCategoria;
        }

        Random random = new Random();
        char letra = (char) (random.nextInt(26) + 'A');
        System.out.println("O stop é: " + letra);

        String[] respostas = new String[numcat];
        Timer timer = new Timer();
        TimerTask task = new TimerTask() {
            int timeLimit = getTimeLimit(numcat);

            @Override
            public void run() {
                if (timeLimit > 0) {
                    System.out.println("\nTempo restante: " + timeLimit + " segundos");
                    try {
						Thread.sleep(10000);
					} catch (InterruptedException e) {
						e.printStackTrace();
					}
                    timeLimit=timeLimit-10;
                } else {
                    System.out.println("Acabou o tempo esgotado!");
                    timer.cancel();
                    scanner.close();
                    System.exit(0);
                }
            }
        };
        timer.scheduleAtFixedRate(task, 10000, 10000);

        for (int j = 0; j < numcat; j++) {
            System.out.print(categorias[j] + ": ");
            String resposta = scanner.nextLine();
            respostas[j] = resposta;
        }

        timer.cancel();
        scanner.close();
   
        System.out.println("Stoppp, Parabens voce ganhou, chegou no potion");
        
        }

    private static int getTimeLimit(int numcat) {
        int timeLimit;
        if (numcat <= 3) {
            timeLimit = Facil;
        } else if (numcat <= 6) {
            timeLimit = Medio;
        } else {
            timeLimit = Dificio;
        }
        return timeLimit;
    }
}
