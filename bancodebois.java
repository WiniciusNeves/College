# faculty
code i learned in college
package br.com.unicuritiba;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int qtdBois = 0;
        float PBoi = 0;
        float pmm = Float.MAX_VALUE;
        float PMG = Float.MIN_VALUE;
        int NMG = 0;
        int nmm = 0;
        int numerodeboi=1;
        Scanner input = new Scanner(System.in);
        while (qtdBois < 3) {
            System.out.println("Informe o número do boi:"+numerodeboi );
            int NBoi = input.nextInt();
            System.out.println("Agora informe seu peso:");
            PBoi = input.nextFloat();
            numerodeboi++;
            if (PBoi > PMG) {
                PMG = PBoi;
                NMG = NBoi;
            }
            if (PBoi < pmm) {
                pmm = PBoi;
                nmm = NBoi;
            }
            qtdBois++;
        }
        System.out.println("O boi mais gordo é o " + NMG + " e pesou " + PMG + "kg");
        System.out.println("O boi mais magro é o " + nmm + " e pesou " + pmm + "kg");
    }
}
