import java.util.Scanner;
public class exer_1_arraysIguais {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int vetorA[] = new int[5];
        int vetorB[]= new int[vetorA.length];
        for (int i=0;i< vetorA.length;i++){
            System.out.println("informe o valor na posicao "+(i+1));
            vetorA[i] = scan.nextInt();
            vetorB[i]=vetorA[i];
        }
        for (int i=0;i< vetorA.length;i++){
            System.out.println("valor do vetorB "+vetorB[i]+" valor do vetorA "+vetorA[i]+ " na ´posicao "+i);
        }
    }



}
