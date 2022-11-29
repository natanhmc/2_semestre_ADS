public class Exer1_jogandoDados {
    public static void main(String[] args) {
        int soma=0;
        for (int i=0;i<3;i++){
            soma = soma + (int)(Math.random()*6);
            System.out.println(i);
        }
        System.out.printf("A soma das jogadas deu %d",soma);
    }
}
