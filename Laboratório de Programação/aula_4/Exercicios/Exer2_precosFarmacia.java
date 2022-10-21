import java.util.Scanner;
public class Exer2_precosFarmacia {
    public static void main(String[] args) {
    double novoPreco=0;
    double precoVelho=0;
    Scanner scan = new Scanner(System.in);
    int i=0;

    while (i<1){
        System.out.println("Ola!! informe o preco a ser modificado:");
        precoVelho = scan.nextDouble();
        if (precoVelho!=0){
            novoPreco =(Math.round( precoVelho * 1.12));
            System.out.printf("O novo preco do produto sera de %.2f \n",novoPreco);
        }else{
            System.out.println("Ate mais!!");
            i=1;
        }
    }

    }
}
