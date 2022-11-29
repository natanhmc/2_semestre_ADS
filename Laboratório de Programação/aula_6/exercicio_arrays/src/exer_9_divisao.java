import java.util.Scanner;
public class exer_9_divisao {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double vetorA[] = new double[3];
        double vetorB[] = new double[3];
        double vetorC[] = new double[3];

        for (int i = 0; i < vetorA.length; i++) {
            System.out.printf("informe o %d valor do vetor A \n", i, i);
            vetorA[i] = scan.nextInt();
        }
        for (int i = 0; i < vetorB.length; i++) {
            System.out.printf("informe o %d valor do vetor B \n", i, i);
            vetorB[i] = scan.nextInt();
        }
        for (int i = 0; i < vetorC.length; i++) {
            vetorC[i] = vetorB[i] / vetorA[i];
            System.out.println("as divisao dos dois primeiros vetores e: " + vetorC[i]);
        }

    }
}