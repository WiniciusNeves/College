import java.util.Scanner;

public class calculadora {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int resultado = 0;
        System.out.println("Digite a operação que deseja:");
        System.out.println("1 - Soma");
        System.out.println("2 - Subtração");
        System.out.println("3 - Multiplicação");
        System.out.println("4 - Divisão");

        int opcao = scanner.nextInt();

        System.out.println("Digite o operando 1");
        int operando1 = scanner.nextInt();

        System.out.println("Digite o operando 2");
        int operando2 = scanner.nextInt();

        switch (opcao) {
            case 1:
                resultado = somar(operando1, operando2);
                break;

            case 2:
                resultado = subtrair(operando1, operando2);
                break;

            case 3:
                resultado = multiplicar(operando1, operando2);
                break;

            case 4:
                if (operando2 != 0) {
                    resultado = dividir(operando1, operando2);
                } else {
                    System.out.println("Erro: divisão por zero.");
                    return;
                }
                break;

            default:
                System.out.println("Operação inválida");
                return;
        }

        System.out.println("O resultado é: " + resultado);

        if (erro(resultado)) {
            System.out.println("O resultado é maior ou igual a 300.");
        } else {
            System.out.println("O resultado não é válido.");
        }
    }

    private static int somar(int num1, int num2) {
        int resultado = num1 + num2;
        return resultado;
    }

    private static int subtrair(int num1, int num2) {
        int resultado = num1 - num2;
        return resultado;
    }

    private static int multiplicar(int num1, int num2) {
        int resultado = num1 * num2;
        return resultado;
    }

    private static int dividir(int num1, int num2) {
        int resultado = num1 / num2;
        return resultado;
    }

    private static boolean erro(int resultado) {
        return resultado >= 300;
    }
}
