public class Exercicio3 {
    public static void main(String[] args) {
        int F = 1;
        int ant = 0;

        for (int i = 0; i <= 15; i++) {
                F += ant;
                ant = F - ant;
            System.out.println("numero "+i+" Fibonacci: "+F);

        }

    }
    }
