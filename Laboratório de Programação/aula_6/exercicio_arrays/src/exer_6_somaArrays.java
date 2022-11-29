import java.util.Scanner;
public class exer_6_somaArrays {
    public static void main(String[] args) {
        Scanner scan =new Scanner(System.in);
        int vetorA[] = new int[10];
        int vetorB[] = new int[10];
        int vetorC[] = new int[10];

        for (int i=0;i<vetorA.length;i++){
            System.out.printf("informe o %d valor do vetor A \n",i,i);
            vetorA[i] = scan.nextInt();
        }
        for (int i=0;i<vetorB.length;i++){
            System.out.printf("informe o %d valor do vetor B \n",i,i);
            vetorB[i] = scan.nextInt();
        }
        for (int i=0;i<vetorC.length;i++){
            vetorC[i]=vetorB[i]+vetorA[i];
            System.out.println("as somas dos dois primeiros vetores e: "+vetorC[i]);
        }

    }
}
