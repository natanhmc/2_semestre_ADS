import java.util.Scanner;
public class exer_5_multiplicadoPeloIndice {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double arrayA[]= new double[10];
        double arrayB[]= new double[10];
        for (int i=0;i< arrayA.length;i++){
            System.out.printf("informe o %d elemento do vetorA\n",i);
            arrayA[i] = scan.nextDouble();
            arrayB[i] = (arrayA[i]*i);
        }
        for (int i=0;i< arrayA.length;i++){
            System.out.printf("vetor B : %.2f. que e vetor A: %.2f vezes o indice %d\n",arrayB[i],arrayA[i],i);
        }

    }
}
