import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int numeroP = 16;
        String[] nomes = new String[numeroP];
        int[] numRank = new int[numeroP];
        int contador = 1;
        int media = 0;

        Scanner scanner = new Scanner(System.in);

        for (int indice = 0; indice < numeroP; indice++) {
            System.out.println("Informe o nome do participante " + contador);
            String nome = scanner.nextLine();
            nomes[indice] = nome;
            contador++;
        }

        contador = 1;
        for (int ind = 0; ind < numeroP; ind++) {
            System.out.println("Informe o rank do participante " + contador);
            int rank = scanner.nextInt();
            numRank[ind] = rank;
            media += rank;
            contador++;
        }

        System.out.println("Estes são os nomes e os ranks dos participantes:");
        for (int i = 0; i < numeroP; i++) {
            System.out.println(nomes[i] + ": " + numRank[i]);
        }

        double rankMedio = (double) media / numeroP;
        System.out.println("Rating médio do torneio: " + rankMedio);

        System.out.println("Os 3 maiores ratings com os nomes dos jogadores:");
        exibirTresMaioresRatings(nomes, numRank);
    }

    public static void exibirTresMaioresRatings(String[] nomes, int[] numRank) {
        int[] sortedRanks = numRank.clone();
        String[] sortedNomes = nomes.clone();

        for (int i = 0; i < sortedRanks.length - 1; i++) {
            for (int j = 0; j < sortedRanks.length - i - 1; j++) {
                if (sortedRanks[j] < sortedRanks[j + 1]) {
                    int tempRank = sortedRanks[j];
                    sortedRanks[j] = sortedRanks[j + 1];
                    sortedRanks[j + 1] = tempRank;

                    String tempNome = sortedNomes[j];
                    sortedNomes[j] = sortedNomes[j + 1];
                    sortedNomes[j + 1] = tempNome;
                }
            }
        }

        for (int i = 0; i < 3 && i < sortedRanks.length; i++) {
            System.out.println(sortedNomes[i] + ": " + sortedRanks[i]);
        }
    }
}
