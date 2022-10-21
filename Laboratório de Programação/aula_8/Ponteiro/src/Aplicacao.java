public class Aplicacao {
    public static void main(String[] args) {
        Relogio r1 = new Relogio();

        r1.acertarRelogio(15,60,13);

        System.out.println("Posicao da hora: "+ r1.ponteiroHora.posicao);
        System.out.println("posicao do minuto "+ r1.ponteiroMinuto.posicao);
        System.out.println("posicao do segundo "+ r1.ponteiroSegundo.posicao);


        int hora = r1.lerHora();
        hora = hora+12;
        int minuto = r1.lerMinuto();
        minuto=minuto*5;
        int segundo = r1.lerSegundo();
        segundo=segundo*5;

        System.out.println("Hora "+ hora);
        System.out.println("minuto "+ minuto);
        System.out.println("segundos "+segundo);

    }
}
