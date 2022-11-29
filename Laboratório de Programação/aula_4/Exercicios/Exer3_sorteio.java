public class Exer3_sorteio {
    public static void main(String[] args) {
        String sorteio = new String();
        String numero;
        int numeroSorte=0;
        int i=0;
        while (i!=1){
            numeroSorte = (int)(Math.random()*10)+5;
            if ((numeroSorte>4)&&(numeroSorte<11)){
                i=1;
            }else{
                i=0;
            }
        }

        for (int x=0;x<numeroSorte;x++){
            numero = Integer.toString((int)(Math.random()*9));
            sorteio = sorteio+numero;
        }
        System.out.printf("o numero da sorte foi %d \n",numeroSorte);
        System.out.println("a senha e: "+sorteio);
    }
}

